/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function myFunction() {
    var id, text;
    var direccion;
    var titulo;
    var precio;

    // Get the value of the input field with id="numb"
    id = document.getElementById("id").value;
    estacion = document.getElementById("estacion").value;
    titulo = document.getElementById("titulo").value;
    precio = document.getElementById("precio").value;
}

function validateForm() {
    var success = true
    var id = document.forms["contact-form"]["id"].value;
    if (id == "") {
        alert("El campo id es obligatorio");
        success = false
    }

    var estacion = document.forms["contact-form"]["estacion"].value;
    if (estacion == "") {
        alert("El campo estacion es obligatorio");
        success = false;
    }

    var titulo = document.forms["contact-form"]["titulo"].value;
    if (titulo == "") {
        alert("El campo titulo es obligatorio");
        success  = false
    }

    var precio = document.forms["contact-form"]["precio"].value;
    if (precio == "") {
        alert("El campo precio es obligatorio");
        success = false
    }

    if (success == true){
        alert("Registro exitoso.")
    }

}