function validFormul(event){
    var eje = document.getElementsByName("ejercicio")[0].value;
    var resp = false;
    if(eje == "2"){
        resp = validarPatente();
    }else if(eje == "4"){
        resp = NuevaPersona();
    }else if(eje == "5"){
        resp = nuevoAuto(); 
    }else if(eje == "6"){
        resp = cambioDuenio();
    }else{
        resp = validarDNI();
    }
    if(!resp){
        event.preventDefault()
        event.stopPropagation()
    }
    return resp;
}
function validarPatente(){
    var inputPatente = document.getElementById("patente");
    var patente = inputPatente.value;
    var patnSinEsp = patente.replace(/\s/g, "");
    var resp = false;
    inputPatente.classList.remove("is-invalid", "is-valid");
    if(/^[A-Z0-9]{6}$/i.test(patnSinEsp)){
        inputPatente.classList.add("is-valid");
        resp = true;
    }else{
        inputPatente.classList.add("is-invalid");
    }
    return resp;
}
function NuevaPersona(){
    var nombre = validarNombre();
    var apellido = validarApellido();
    var dni = validarDNI();
    var fechaNac = validarFechaNacimiento();
    var telefono = validarTelefono();
    var domicilio = validarDomicilio();
    var resp = false;
    if(nombre && apellido && dni && fechaNac && telefono && domicilio){
        resp = true;
    }
    return resp;
}
function nuevoAuto(){
    var patente = validarPatente();
    var marca = validarMarca();
    var modelo = validarModelo();
    var dni = validarDNI();
    var resp = false;
    if(patente && marca && modelo && dni){
        resp = true;
    }
    return resp;
}
function cambioDuenio(){
    var patente = validarPatente();
    var dni = validarDNI();
    var resp = false;
    if (patente && dni){
        resp = true;
    }
    return resp;
}
function validarNombre(){
    var inputnombre = document.getElementById("nombre");
    let nombre = inputnombre.value.trim();
    inputnombre.classList.remove("is-invalid", "is-valid");
    var resp = false;
    if(/^[A-Za-záéíóúÁÉÍÓÚüÜñÑ\s]+$/.test(nombre) && nombre.length > 1){
        inputnombre.classList.add("is-valid");
        resp = true;
    }else{
        inputnombre.classList.add("is-invalid");
    }
    return resp;
}
function validarApellido(){
    var inputApellido = document.getElementById("apellido");
    let apellido = inputApellido.value.trim();
    inputApellido.classList.remove("is-invalid", "is-valid");
    var resp = false;
    if(/^[A-Za-záéíóúÁÉÍÓÚüÜñÑ\s]+$/.test(apellido) && apellido.length > 1){
        inputApellido.classList.add("is-valid");
        resp = true;
    }else{
        inputApellido.classList.add("is-invalid");
    }
    return resp;
}
function validarDNI(){
    var inputDNI = document.getElementById("DNI");
    var dni = inputDNI.value.replace(/\D/g, "");
    var resp = false;
    inputDNI.classList.remove("is-invalid", "is-valid");
    if(/^\d{8}$/.test(dni)){
        inputDNI.classList.add("is-valid");
        resp = true;
    }else{
        inputDNI.classList.add("is-invalid");
    }
    return resp;
}
function validarFechaNacimiento(){
    var inputFechaNacimiento = document.getElementById("fechaNacimiento");
    var fechaNacimiento = new Date(inputFechaNacimiento.value);
    var fechaActual = new Date();
    var resp = false;
    inputFechaNacimiento.classList.remove("is-invalid", "is-valid");
    
    let edad = fechaActual.getFullYear() - fechaNacimiento.getFullYear();
    var mesDiff = fechaActual.getMonth() - fechaNacimiento.getMonth();
    if (mesDiff < 0 || (mesDiff === 0 && fechaActual.getDate() < fechaNacimiento.getDate())) {
        edad--;
    }
    if(edad >= 18){
        resp = true;
        inputFechaNacimiento.classList.add("is-valid");
    }else{
        inputFechaNacimiento.classList.add("is-invalid");
    }
    return resp;
}
function validarTelefono(){
    var inputTelefono = document.getElementById("telefono");
    var telefono = inputTelefono.value.replace(/\D/g, "");
    inputTelefono.classList.remove("is-invalid", "is-valid");
    var resp = false;
    if(/^\d{8,15}$/.test(telefono)){
        inputTelefono.classList.add("is-valid");
        resp = true;
    }else{
        inputTelefono.classList.add("is-invalid");
    }
    return resp;
}
function validarDomicilio(){
    var inputDomicilio = document.getElementById("domicilio");
    var domicilio = inputDomicilio.value.trim();
    inputDomicilio.classList.remove("is-invalid", "is-valid");
    var resp = false;
    if(domicilio.length > 1){
        inputDomicilio.classList.add("is-valid");
        resp = true;
    }else{
        inputDomicilio.classList.add("is-invalid");
    }
    return resp;
}
function validarMarca(){
    var inputMarca = document.getElementById("marca");
    var marca = inputMarca.value.trim();
    inputMarca.classList.remove("is-invalid", "is-valid");
    var resp = false;
    if(marca.length > 1){
        inputMarca.classList.add("is-valid");
        resp = true;
    }else{
        inputMarca.classList.add("is-invalid");
    }
    return resp;
}

function validarModelo(){
    var inputModelo = document.getElementById("modelo");
    var modelo = inputModelo.value.trim();
    inputModelo.classList.remove("is-invalid", "is-valid");
    var resp = false;
    if(modelo.length > 1){
        inputModelo.classList.add("is-valid");
        resp = true;
    }else{
        inputModelo.classList.add("is-invalid");
    }
    return resp;
}