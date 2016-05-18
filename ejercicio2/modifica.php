<?php

session_start();
include 'config.php';
//VARIABLES DEL FORMULARIO
$dni2 = $_REQUEST['DNI'];
$Nombre2 = $_REQUEST['Nombre'];
$Direccion2 = $_REQUEST['Direccion'];
$Ciudad2 = $_REQUEST['Ciudad'];
$Codpostal2 = $_REQUEST['Codpostal'];
$Provincia2 = $_REQUEST['Provincia'];
$Telefono2 = $_REQUEST['Telefono'];
$Ocupacion2 = $_REQUEST['Ocupacion'];
$Comentario2 = $_REQUEST['Comentario'];
$Fecha2 = $_REQUEST['Fecha'];
//VARIABLES DE SESION (comprobar si no se ha modificado ningun campo)


//CONEXION A LA BD
$conex = new mysqli($host, $bduser, $bdpass, $bdname);
if($conex->connect_errno){
    die("Error al conectarnos a la base de datos: ".$conex->connect_errno);
}
//EVITAMOS INYECCION
$dni2 = mysqli_real_escape_string($conex, $dni2);
$sql = "SELECT * FROM Usuarios WHERE DNI = '$dni2' ";
$result = $conex->query($sql);
if($result->num_rows==0){
    echo "No existen datos para el DNI que ha introducido";
} else {
    $extraido = $result->fetch_assoc();
    $dni = $extraido['DNI'];
    $Nombre = $extraido['Nombre'];
    $Direccion = $extraido['Direccion'];
    $Codpostal = $extraido['Codpostal'];
    $Ciudad = $extraido['Ciudad'];
    $Provincia =$extraido['Provincia'];
    $Telefono =$extraido['Telefono'];
    $Ocupacion =$extraido['Ocupacion'];
    $Comentario =$extraido['Comentario'];
    $Fecha =$extraido['Fecha'];
//Comprobar si son iguales
//   echo $dni2."=".$dni;
//   echo "<br>";
//   echo $Nombre2."=".$Nombre;
//  echo "<br>";
//  echo $Direccion2."=".$Direccion;
//  echo "<br>";
//  echo $Ciudad2."=".$Ciudad;
//  echo "<br>";
//  echo $Codpostal2."=".$Codpostal;
//  echo "<br>";
//  echo $Provincia2."=".$Provincia;
//  echo "<br>";
//  echo $Telefono2."=".$Telefono;
//  echo "<br>";
//  echo $Ocupacion2."=".$Ocupacion;
//  echo "<br>";
//  echo $Comentario2."=".$Comentario;
//  echo "<br>";
//  echo $Fecha2."=".$Fecha;
//  echo "<br>";


    //Si el campo esta vacio 
    if(($dni2=='') || ($Nombre2=='') || ($Direccion2=='') || ($Ciudad2=='') ||($Codpostal2=='') || ($Provincia2=='') ||
        ($Telefono2=='')  || ($Ocupacion2=='') || ($Comentario2=='')|| ($Fecha2=='')){
        echo "Uno de los campos está vacio";
    } elseif (($dni2==$dni) && ($Nombre2==$Nombre) && ($Direccion2==$Direccion) && ($Ciudad2==$Ciudad) && ($Codpostal2==$Codpostal) 
            && ($Provincia2==$Provincia) && ($Telefono2==$Telefono) && ($Ocupacion2==$Ocupacion)
            && ($Comentario2==$Comentario) && ($Fecha2==$Fecha)) {
        echo "No ha modificado ningun campo";
     } else {
       $sql2 = "UPDATE `Usuarios` SET `Nombre`= '$Nombre2',`Direccion`= '$Direccion2',`Codpostal`= '$Codpostal2',"
               . "`Ciudad`='$Ciudad2',`Provincia`='$Provincia2',`Telefono`='$Telefono2',`Ocupacion`='$Ocupacion2'"
               . ",`Comentario`='$Comentario2',`Fecha`='$Fecha2' WHERE DNI = '$dni'";
    $result2 = $conex->query($sql2);          
    echo 'Modificacion Realizada con exito';
    }

}
?>