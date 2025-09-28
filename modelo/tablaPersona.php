<?php
include_once "conexion/baseDatos.php";
class tablaPersona {
    private $nroDNI;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;

    public function __construct($dni, $apel, $nom, $fechNac, $tele, $dom){
        $this->nroDNI = $dni;
        $this->apellido = $apel;
        $this->nombre = $nom;
        $this->fechaNac = $fechNac;
        $this->telefono = $tele;
        $this->domicilio = $dom;
    }
    public function getNroDNI(){
        return $this->nroDNI;
    }
    public function setNroDNI($dni){
        $this->nroDNI = $dni;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apel){
        $this->apellido = $apel;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nom){
        $this->nombre = $nom;
    }
    public function getFechaNacimiento(){
        return $this->fechaNac;
    }
    public function setFechaNacimiento($fechNa){
        $this->fechaNac = $fechNa;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono($tele){
        $this->telefono = $tele;
    }
    public function getDomicilio(){
        return $this->domicilio;
    }
    public function setDomicilio($dom){
        $this->domicilio = $dom;
    }

    public function selecionarPersonas(){
        $bd = new BaseDatos();
        $resp = null;
        $sql = "SELECT * FROM persona";
        $resulBusq = $bd->query($sql);
        if($resulBusq) {
            $resp = $resulBusq->fetchAll(PDO::FETCH_ASSOC);
        }
        return $resp;
    }
    public function insertarPersona(){
        $bd = new baseDatos();
        $resp = false;
        $resulBusq = $bd->query("SELECT COUNT(*) FROM persona WHERE NroDni = '".$this->getNroDNI()."'");
        $cant = $resulBusq->fetchColumn();
        if($cant == 0){
            $sql = "INSERT INTO persona (NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio)
            VALUES ('".$this->getNroDNI()."','".$this->getApellido()."','".$this->getNombre()."','".$this->getFechaNacimiento()."','".$this->getTelefono()."','".$this->getDomicilio()."')";
            if($bd->query($sql)){
                $resp = true;
            }
        }
        return $resp;
    }
    public function modificarPersona($dni,$apel, $nom, $fechNac, $tele, $dom){
        $bd = new BaseDatos();
        $resp = false;
        $sql = "UPDATE persona SET Apellido = '$apel', Nombre = '$nom', fechaNac = '$fechNac', Telefono = '$tele', Domicilio = '$dom' WHERE NroDni = '".$dni."';";
        $stmt = $bd->query($sql);
        if($stmt){
            $resp = true;
        }
        return $resp;
    }
    public function eliminarPersona($dni) {
        $bd = new BaseDatos();
        $resp = false;
        if ($bd->query("DELETE FROM auto WHERE DniDuenio = '$dni'")&& $bd->query("DELETE FROM persona WHERE NroDni = '$dni'")) {
            $resp = true;
        }

        return $resp;
    }


}