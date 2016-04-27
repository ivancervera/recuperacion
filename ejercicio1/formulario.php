<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nombre= $_REQUEST['nombre'];
$fnacimiento= $_REQUEST['fnacimiento'];
$dni= $_REQUEST['dni'];
$apellidos= $_REQUEST['apellidos'];
$calle= $_REQUEST['calle'];
$codigopostal= $_REQUEST['codigopostal'];
$ciudad= $_REQUEST['ciudad'];
$provincia= $_REQUEST['provincia'];
$telefono= $_REQUEST['telefono'];
$ocupacion= $_REQUEST['ocupacion'];
$comentario= $_REQUEST['comentario'];

if ($_POST) {
    if ($nombre==""){
        echo "No ha introducido ningun nombre."."<br/>";
    } else {
        echo "Nombre: " .$nombre. "<br/>";
    }  
}


if ($_POST) {
    if ($apellidos==""){
        echo "No ha introducido ningun apellido."."<br/>";
    }else {
        echo "Apellidos: " .$apellidos. "<br/>";
    }
}

if ($_POST) {
    if ($fnacimiento==""){
        echo "No ha introducido ninguna fecha de nacimiento."."<br/>";
    }else {
        echo "F.Nacimiento: " .$fnacimiento. "<br/>";
    }
}

if ($_POST) {
    if ($dni==""){
        echo "No ha introducido ningun DNI."."<br/>";
     }else {
         echo "DNI: " .$dni. " ";
     }
}

function letra_nif($dni) {
        return substr("TRWAGMYFPDXBNJZSQVHLCKE",strtr($dni,"XYZ","012")%23,1);
    }
 
    $numero = $dni;
    echo ' ___________    La letra del DNI "'.$numero.'" es "'.letra_nif($numero).'"<br/>';



if ($_POST) {
    if ($calle==""){
        echo "No ha introducido ninguna direccion."."<br/>";
    }else {
        echo "Calle: " .$calle. "<br/>";
    }
}

if ($_POST) {
    if ($codigopostal==""){
        echo "No ha introducido ningun codigo postal."."<br/>";
    }else {
        echo "CodigoPostal: " .$codigopostal. "<br/>";
    }
}

if ($_POST) {
    if ($ciudad==""){
        echo "No ha introducido ninguna ciudad."."<br/>";
    }else {
        echo "Ciudad: " .$ciudad. "<br/>";
    }
}

if ($_POST) {
    if ($provincia==""){
        echo "No ha introducido ninguna provincia"."<br/>";
    }else {
        echo "Provincia: " .$provincia. "<br/>";
    }
}

if ($_POST) {
    if ($telefono==""){
        echo "No ha introducido ningun numero de telefono."."<br/>";
    }else {
        echo "Telefono: " .$telefono. "<br/>";
    }
}

if ($_POST) {
    if ($ocupacion==""){
        echo "No ha introducido ninguna ocupacion."."<br/>";
    }else {
        echo "Ocupacion: " .$ocupacion. "<br/>";
    }
}

if ($_POST) {
    if ($comentario==""){
        echo "No ha introducido ningun comentario final."."<br/>";
    }else {
        echo "Comentarios: " .$comentario. "<br/>";
    }
}

?>
<html>
    
    <a href=./formulario.html> Volver al formulario</a>             
</html>