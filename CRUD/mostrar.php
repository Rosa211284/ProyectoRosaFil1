<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="css/estiloCRUD.css">
</head>
<body>
    <br><br>
    <h1>Lista Instrumentos Disponibles</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Instrumento</th>
            <th>Descripcion</th>
            <th>Cantidad</th>
            <th>Numero de serie</th>
            <th>Imagen</th>
            
        </tr>
        <tbody>
        <?php
include("php/abre.php");

$consulta = "SELECT * FROM arte";
$resultado = $conexion->query($consulta);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["Nombre"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["Descripcion"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["Autor"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["Año"]) . "</td>";
        echo "<td><img height='50px' src='data:image/jpg;base64," . base64_encode($row['Imagen']) . "'></td>";
       
        echo "<td>
        <a href='php/eliminar.php?id=" . htmlspecialchars($row['id']) . "'><img height='35px' src='img/eliminar.png'></a>
        
        <a href='php/modificar.php?id=" . htmlspecialchars($row['id']) . "'><img height='35px' src='img/agregar.png'> </a>
      </td>";

        
    }
} else {
    echo "<tr><td colspan='5'>No hay usuarios</td></tr>";
}

$conexion->close();
?>
    </tr>
    </tbody>
    </table>
    <tr>
        <div id="boton">
        <th colspan="11"> <a href="php/agregar.php">Agregar Otro Instrumento</a></th>
        </div>
        
    </tr>
    <p>"No importa el tamaño del instrumento, sino el amor con que se toca."</p>


</html>