<?php
session_start();
?>

<?php
if(isset($_POST['modificar']))
{   
  

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "formato";
$tbl_name = "resguardo";


$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$fech = $_POST['fecha'];
$nombre = $_POST['nombre'];
$dispo = $_POST['dispo'];

    

 $sql ="INSERT INTO resguardo(fecha,nombre,dispositivo) VALUES ($fech,'$nombre','$dispo')";


    ?>
<a href="index.php">inicio</a>

<?php
 echo "registrado";  
$result = $conexion->query($sql)

?><?php

   } 
?>
