<?php 

include_once "conexion/baseDatos.php";
class tablaAuto {
    private $patente;
    private $marca;
    private $modelo;
    private $dniDuenio;

    public function __construct($patent, $marc , $modl , $dniDuen) {
        $this->patente = $patent;
        $this->marca = $marc;
        $this->modelo = $modl;
        $this->dniDuenio = $dniDuen;
    }

    public function getPatente() {
        return $this->patente;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getDniDuenio() {
        return $this->dniDuenio;
    }
    public function setPatente($patent) {
        $this->patente = $patent;
    }

    public function setMarca($marc) {
        $this->marca = $marc;
    }

    public function setModelo($modl) {
        $this->modelo = $modl;
    }

    public function setDniDuenio($dniDuen) {
        $this->dniDuenio = $dniDuen;
    }
    public function selecionarAuto(){
        $bd = new BaseDatos();
        $resp = null;
        $sql = "SELECT * FROM auto";
        $resulBusq = $bd->query($sql);
        if($resulBusq) {
            $resp = $resulBusq->fetchAll(PDO::FETCH_ASSOC);
        }
        return $resp;  
    }
    public function insertarAuto(){
        $bd = new baseDatos();
        $resp = false;
        $resulBusq = $bd->query("SELECT COUNT(*) FROM auto WHERE Patente = '".$this->getPatente()."'");
        $cant = $resulBusq->fetchColumn();
        if($cant == 0){
            $sql = "INSERT INTO auto (Patente, Marca, Modelo, DniDuenio)
                VALUES ('".$this->getPatente()."','".$this->getMarca()."','".$this->getModelo()."','".$this->getDniDuenio()."')";

            if($bd->query($sql)){
                $resp = true;
            }
        }
        return $resp;
    }
    public function modificarAuto($patent, $marc, $modl, $dniDuen){
        $bd = new BaseDatos();
        $resp = false;
        $sql = "UPDATE auto SET Marca = '$marc', Modelo = '$modl', DniDuenio = '$dniDuen' WHERE Patente = '$patent';";
        $stmt = $bd->query($sql);
        if($stmt){
            $resp = true;
        }
        return $resp;
    }
    public function eliminarAuto($patent) {
        $bd = new BaseDatos();
        $resp = false;
        if ($bd->query("DELETE FROM auto WHERE Patente = '$patent'")) {
            $resp = true;
        }

        return $resp;
    }

}