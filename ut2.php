<?php
session_start();
?>

<?php
if(isset($_POST['buscar']))
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
$nombre = $_POST['nombre1'];


    //SELECT nombre FROM `resguardo` WHERE nombre LIKE '%Jo%'

 $sql ="SELECT * FROM resguardo WHERE nombre LIKE '%$nombre%' ";
$result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){

    ?>
           <center>
        <?php echo $mostrar['fecha'];?>--
        <?php echo $mostrar['nombre'];?>-- 
        <?php echo $mostrar['dispositivo'];?><br><br>
        


<?php
   }

$result = $conexion->query($sql)

?><?php

   } 
?>
<a href="index.php">inicio</a>
               </center>