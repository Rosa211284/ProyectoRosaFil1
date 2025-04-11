<?php
include("abre.php");

$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Contra = $_POST['Contra'];


$consulta = "INSERT INTO donato (Nombre,Correo,Contra) VALUES ('$Nombre','$Correo','$Contra')";

if($conexion->query($consulta)=== TRUE){
        header("Location: index.html");
}
else{
    echo "Error: " .$consulta. "br" .$conexion->error;
}

$conexion -> close();
?>