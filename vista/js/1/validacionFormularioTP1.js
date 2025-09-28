function validarEjercicio(){
    var eje = document.getElementsByName("ejercicio")[0].value;
    var respuesta = true;
    switch(eje){
        case "1":
            respuesta = validarEjercicio1();
            break;
        case "2":
            respuesta = validarEjercicio2();
            break;
        case "3Get":
            respuesta = validarEjercicio3();
            break;
        case "3Post":
            respuesta = validarEjercicio3();
            break;
        case "4":
            respuesta = validarEjercicio3();
            break;
        case "5":
            respuesta = validarEjercicio3();
            break;
        case "6":
            respuesta = validarEjercicio3();
            break;
        case "7":
            respuesta = validarEjercicio7();
            break;
        case "8":
            respuesta = validarEjercicio8();
            break;
        default:
            respuesta = false;
            break;
        
    }
    return respuesta;
}
function validarEjercicio1(){
    var inputNum = document.getElementById("numero-form");
    var res = document.getElementsByClassName("resp")[0];
    var numero = inputNum.value;
    var respuesta = true;
    if(isNaN(numero) || numero.trim() === ""){
        inputNum.style.border = "2px solid red";
        res.style.color = "red";
        res.innerHTML = "Debe ingresar un numero valido";
        respuesta = false;
    }else{
        res.innerHTML = "";
        inputNum.style.borderColor = "green";
    }
    return respuesta;
}
function validarEjercicio2(){
    var respuesta = true;
    var error = 0;
    var lunes = document.getElementById("horario_lunes");
    var martes = document.getElementById("horario_martes");
    var miercoles = document.getElementById("horario_miercoles");
    var jueves = document.getElementById("horario_jueves");
    var viernes = document.getElementById("horario_viernes");
    var sabado = document.getElementById("horario_sabado");
    var domingo = document.getElementById("horario_domingo");
    var dias = [lunes, martes, miercoles, jueves, viernes, sabado, domingo];
    var res = document.getElementsByClassName("resp")[0];
    for(var i=0; i<7; i++){
        if (!dias[i]) continue;
        if(isNaN(dias[i].value) || dias[i].value.trim() === ""){
            dias[i].style.border = "2px solid red";
            error ++;
        }else{
            dias[i].style.border = "2px solid green";
        }
    }
    if(error > 0){
        res.style.color = "red";
        res.innerHTML = "Debe ingresar numeros validos en los campos";
        respuesta = false;
    } 
    else{
        res.textContent = "Todos los días son válidos";
        res.style.color = "green";
    }
    return respuesta;
}
function validarEjercicio3(){
    var respuesta = true;
    var error = 0;
    var nombre = document.getElementById("nombre");
    var apellido = document.getElementById("apellido");
    var edad = document.getElementById("edad");
    var direccion = document.getElementById("direccion");
    var res = document.getElementsByClassName("resp")[0];
    var campos = [nombre, apellido, edad, direccion];
    for(var i=0; i<campos.length; i++){
        if (!campos[i]) continue;
        if(campos[i].value.trim() === ""){
            campos[i].style.border = "2px solid red";
            error ++;
        }else{
            campos[i].style.border = "2px solid green";
        }
    }
    if(error > 0){
        res.style.color = "red";
        res.innerHTML = "hay campos vacios o invalidos";
        respuesta = false;
    } 
    else if(error === 0 && isNaN(edad.value)){
        edad.style.border = "2px solid red";
        res.style.color = "red";
        res.innerHTML = "la edad debe ser un numero valido";
        respuesta = false;
    }else{
        res.textContent = "Todos los campos son válidos";
        res.style.color = "green";
    }
    return respuesta;
}
function validarEjercicio7(){
    var respuesta = true;
    var num1 = document.getElementById("num1");
    var num2 = document.getElementById("num2");
    var res = document.getElementsByClassName("resp")[0];
    var campos = [num1, num2];
    for(var i=0; i<campos.length; i++){
        if(isNaN(campos[i].value) || campos[i].value.trim() === ""){
            campos[i].style.border = "2px solid red";
            respuesta = false;
        }else {
            campos[i].style.border = "2px solid green";
        }
    }
    if(!respuesta){
        res.style.color = "red";
        res.innerHTML = "Debe ingresar numeros validos en los campos";
    }else{
        res.textContent = "";
    }
    return respuesta;
}
function validarEjercicio8(){
    var respuesta = true;
    var edad = document.getElementById("edad");
    var res = document.getElementsByClassName("resp")[0];
    if(isNaN(edad.value) || edad.value.trim() === ""){
        edad.style.border = "2px solid red";
        respuesta = false;
    }
    if(!respuesta){
        res.style.color = "red";
        res.innerHTML = "Debe ingresar un numero valido en el campo";
    }else{
        res.style.color = "green";
        res.textContent = "el campo edad es valido";
        edad.style.border = "2px solid green";
    }
    return respuesta;
}