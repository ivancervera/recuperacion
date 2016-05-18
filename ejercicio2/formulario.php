<?php

session_start();
include 'config.php';
//VARIABLES DEL FORMULARIO
$dni = $_REQUEST['DNI'];


//CONEXION A LA BD
$conex = new mysqli($host, $bduser, $bdpass, $bdname);
if($conex->connect_errno){
    die("Error al conectarnos a la base de datos: ".$conex->connect_errno);
}
//EVITAMOS INYECCION
$dni = mysqli_real_escape_string($conex, $dni);

//SENTENCIA SQL
$sql = "SELECT * FROM Usuarios WHERE DNI = '$dni' ";

//Enviamos consulta
$result = $conex->query($sql);

//Comprobamos resultados
if(($dni=='')){
    echo 'No ha introducido el DNI';
} elseif($result->num_rows==0){
    echo "No existen datos para el DNI que ha introducido";
} elseif($result->num_rows>0){
    echo "<form action='modifica.php' method='post' >";
    while ($extraido = $result->fetch_assoc()) {
        echo "DNI: <input type='text' name='DNI' value='".$extraido['DNI']."' readonly><br/>";
        echo "Nombre: <input type='text' name='Nombre' value='".$extraido['Nombre']."'><br/>";
        echo "Direccion: <input type='text' name='Direccion' value='".$extraido['Direccion']."'><br/>";
        echo "Codpostal: <input type='text' name='Codpostal' value='".$extraido['Codpostal']."'><br/>";
        echo "Ciudad: <input type='text' name='Ciudad' value='".$extraido['Ciudad']."'><br/>";
        echo "Provincia: <input type='text' name='Provincia' value='".$extraido['Provincia']."'><br/>";
        echo "Telefono: <input type='text' name='Telefono' value='".$extraido['Telefono']."'><br/>";
        echo "Ocupacion: <input type='text' name='Ocupacion' value='".$extraido['Ocupacion']."'><br/>";
        echo "Comentario: <input type='text' name='Comentario' value='".$extraido['Comentario']."'><br/>";
        echo "Fecha: <input type='text' name='Fecha' value='".$extraido['Fecha']."'><br/>";
    }
    #mysqli_free_result($result); 
    echo "<input type='submit' value='Guarda cambios'>";
    echo "<input type='Reset' value='Cancelar cambios'></form>";
}

echo "<br> <a href=./formulario.html> Volver al formulario</a></br>";


