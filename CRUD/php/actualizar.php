<?php 
include("abre.php");

$id =$_REQUEST['id'];

$Nombre  = $_POST['Nombre'];
$Descripcion  = $_POST['Descripcion'];
$Autor  = $_POST['Autor'];
$Año  = $_POST['Año'];


if (isset($_FILES['Imagen']) && $_FILES['Imagen']['error'] == 0) {
 
    $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
} else {
    
    $Imagen = null;
}


$consulta = "UPDATE arte SET Nombre='$Nombre', Descripcion='$Descripcion',
Autor='$Autor', Año='$Año', Imagen='$Imagen' WHERE id='$id'";


$resultado =$conexion->query($consulta);

if($resultado){
    header("Location: ../mostrar.php");
}
else{
    echo "No se modifico nada";
}

?>