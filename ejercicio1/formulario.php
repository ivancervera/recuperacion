<html>

<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* funciones */
function letra_nif($dni) {
        return substr("TRWAGMYFPDXBNJZSQVHLCKE",strtr($dni,"XYZ","012")%23,1);
}
/* main */
$nombre= "";
$fnacimiento= "";
$dni= "";
$apellidos= "";
$calle= "";
$codigopostal= "";
$ciudad= "";
$provincia= "";
$telefono= "";
$ocupacion= "";
$comentario= "";
$errores=1;
if ($_POST) {
    $errores=0;
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
    if ($nombre==""){
        echo "No ha introducido ningun nombre."."<br/>";
        $errores=1;
    } else {
        echo "Nombre: " .$nombre. "<br/>";
    }  
    if ($apellidos==""){
        echo "No ha introducido ningun apellido."."<br/>";
        $errores=1;
    }else {
        echo "Apellidos: " .$apellidos. "<br/>";
    }
    if ($fnacimiento==""){
        echo "No ha introducido ninguna fecha de nacimiento."."<br/>";
        $errores=1;
    }else {
        echo "F.Nacimiento: " .$fnacimiento. "<br/>";
    }
    if ($dni==""){
        echo "No ha introducido ningun DNI."."<br/>";
        $errores=1;
     }else {
         echo "DNI: " .$dni. " ";
         $numero = $dni;
    echo ' ___________    La letra del DNI "'.$numero.'" es "'.letra_nif($numero).'"<br/>';
     }
    
    if ($calle==""){
        echo "No ha introducido ninguna direccion."."<br/>";
        $errores=1;
    }else {
        echo "Calle: " .$calle. "<br/>";
    }
    if ($codigopostal==""){
        echo "No ha introducido ningun codigo postal."."<br/>";
        $errores=1;
    }else {
        echo "CodigoPostal: " .$codigopostal. "<br/>";
    }
    if ($ciudad==""){
        echo "No ha introducido ninguna ciudad."."<br/>";
        $errores=1;
    }else {
        echo "Ciudad: " .$ciudad. "<br/>";
    }
    if ($provincia==""){
        echo "No ha introducido ninguna provincia"."<br/>";
        $errores=1;
    }else {
        echo "Provincia: " .$provincia. "<br/>";
    }
    if ($telefono==""){
        echo "No ha introducido ningun numero de telefono."."<br/>";
        $errores=1;
    }else {
        echo "Telefono: " .$telefono. "<br/>";
    }
    if ($ocupacion==""){
        echo "No ha introducido ninguna ocupacion."."<br/>";
        $errores=1;
    }else {
        echo "Ocupacion: " .$ocupacion. "<br/>";
    }
    if ($comentario==""){
        echo "No ha introducido ningun comentario final."."<br/>";
        $errores=1;
    }else {
        echo "Comentarios: " .$comentario. "<br/>";
    }
    echo "<a href=./formulario.html> Volver al formulario</a>";
}
    
if ($errores != 0 ) { 
echo <<<EOF
<FORM method="post" action="formulario.php">
<title>Formulario</title>
<CENTER>
<TABLE border="0">
    <h1>Datos personales<br></h1>
    
<TR>
   <TD>Nombre:</TD>
    <TD> <INPUT TYPE='text' value='$nombre' SIZE=18 MAXLENGTH=18 name='nombre'>
    F.Nac.: <INPUT TYPE='text' value='$fnacimiento'  SIZE=10 MAXLENGTH=10 name='fnacimiento'>
    DNI:    <INPUT TYPE='text' value='$dni' SIZE=12 name='dni'></TD>
<TR>
   <TD>Apellidos:</TD>
   <TD> <INPUT TYPE="text" value='$apellidos'  SIZE=48 MAXLENGTH=48 name="apellidos"></TD>
<TR>
   <TD>Calle y numero:</TD>
   <TD> <INPUT TYPE="text" value='$calle' SIZE=48 MAXLENGTH=48 name="calle"></TD>
<TR>
  <TD>Codigo Postal:</TD>
  <TD> <INPUT TYPE="text" value='$codigopostal'  SIZE=5 MAXLENGTH=5 name="codigopostal">
      Ciudad: <INPUT TYPE="text" value='$ciudad' SIZE=36 MAXLENGTH=36 name="ciudad"></TD>
<TR>
   <TD>Provincia: </TD>
   <TD> <INPUT TYPE="text" value='$provincia'  SIZE=20 MAXLENGTH=20 name="provincia"> 
      Telefono: <INPUT TYPE="text" value='$telefono' SIZE=19 MAXLENGTH=19 name="telefono"></TD>
<TR>
   <TD>Ocupacion:</TD>
   <TD> <SELECT name="ocupacion">
                <OPTION VALUE=""></OPTION>
               echo' <OPTION   VALUE="Estudiante">Estudiante</OPTION>';
		<OPTION VALUE="Empleado">Trabajador por cuenta ajena</OPTION>
		<OPTION VALUE="Autonomo">Autonomo</OPTION>
		<OPTION VALUE="Jubilado">Jubilado</OPTION>
		<OPTION VALUE="Desempleado">Desempleado</OPTION>
		<OPTION VALUE="Otro">Otro</OPTION>
	</SELECT>Escoja una opcion</TD>
<TR>
   <TD>Comentarios<BR> personales:</TD>
   <TD> <TEXTAREA rows="5" cols="48" name="comentario"></TEXTAREA></TD>
<TR>
   <TD><B>Pulse aqui:</B></TD>
   <TD ALIGN=CENTER>
       <INPUT TYPE="submit" name="enviar" VALUE="Enviar datos">
       <INPUT TYPE="reset" VALUE="Borrar los datos"></TD>
</TABLE>
</CENTER>
</FORM>
EOF;
}
//<?php if ($ocupacion == "Estudiante"){ echo "selected='Estudiante'"}
?>       
    
</html>