
<?php
include("abre.php"); 

$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];
$Autor = $_POST['Autor'];
$Año = $_POST['Año'];


if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$imagen = null; 


if (isset($_FILES['Imagen']) && $_FILES['Imagen']['error'] == 0) {
    $imagen = file_get_contents($_FILES['Imagen']['tmp_name']);
}


$consulta = $conexion->prepare("INSERT INTO arte (Nombre, Descripcion, Autor, Año, Imagen) VALUES (?, ?, ?, ?, ?)");


$consulta->bind_param("sssis", $Nombre, $Descripcion, $Autor, $Año, $imagen);

if ($consulta->execute()) {
  
    header("Location: ../mostrar.php");
    exit();  
} else {
    echo "Error: " . $consulta->error;
}


$consulta->close();
$conexion->close();
?>
