<?php
include("abre.php");
$id =$_REQUEST['id'];
echo $id;
$consulta = "DELETE FROM arte WHERE id= '$id'";
echo $consulta;
$resultado =$conexion->query($consulta);

if($resultado=== TRUE){
    header("Location: ../mostrar.php");
} else{
    echo "Error en delete" . $consulta . "<br>" .$conexion->error;
}
?>