<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="" href="" >
    </head>
    <body>
   <?php
        $host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "bd_01";
$tbl_name = "usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
    
    if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
        echo "USUARIOS";
        $sql="SELECT * FROM usuarios";
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
            
            ?>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>NOMBRE</td>
                <td>PRIMER APELLIDO</td>
                <td>SEGUNDO APELLIDO</td>
                <td>TELEFONO </td>
                <td>RFC</td>
                <td>CURP</td>
                <td>CP</td>
                <td>ACTA</td>
                <td>INE</td>
                <td>COMPROBANTE DOMICILIO</td>
                <td>COMPROBANTE ESTUDIOS</td>
                <td>EXPEDIENTE MEDICO</td>
                <td>FOTO</td>
                <td>PUESTO</td>
                <td>CONTRASENA</td>
                <td>USUARIO</td>
            </tr>
        <tr>
        <td><?php echo $mostrar['id'];?></td>
        <td><?php echo $mostrar['nombre'];?></td>
        <td><?php echo $mostrar['papellido'];?></td>
        <td><?php echo $mostrar['mapellido'];?></td>
        <td><?php echo $mostrar['telefono'];?></td>
        <td><?php echo $mostrar['rfc'];?></td>
        <td><?php echo $mostrar['curp'];?></td>
        <td><?php echo $mostrar['cp'];?></td>
        <td><?php echo $mostrar['acta'];?></td>
        <td><?php echo $mostrar['ine'];?></td>
        <td><?php echo $mostrar['comp_dom'];?></td>
        <td><?php echo $mostrar['comp_estudios'];?></td>
            <td><?php echo $mostrar['exp_medico'];?></td>
            <td><?php echo $mostrar['foto'];?></td>
            <td><?php echo $mostrar['puesto'];?></td>
            <td><?php echo $mostrar['contrasena'];?></td>
            <td><?php echo $mostrar['usuario'];?></td>
            
        
        
        </tr>
            </table><br>
        <?php
            
            
        }
        echo "REPORTES";
        $sql="SELECT * FROM modificacion";
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
          ?>
         <table border="1">
            <tr>
                <td>ID</td>
                <td>CORREO</td>
                <td>FECHA</td>
               
            </tr>
        <tr>
        <td><?php echo $mostrar['id'];?></td>
        <td><?php echo $mostrar['correo'];?></td>
        <td><?php echo $mostrar['fecha'];?></td>
       
            
        
        
        </tr>
            </table>
        
        <?php
    
        }
        $result = $conexion->query($sql);
        ?>
    </body>
</html>