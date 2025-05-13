<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="/css/estiloCRUD.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <?php
    include("abre.php");
    $id =$_REQUEST['id'];

    $consulta ="SELECT * FROM arte WHERE id='$id'";

    $resultado =$conexion->query($consulta);
    $a=1;
    $row =$resultado-> fetch_assoc();
    ?>
    <center>
        <h1>Actualizar Datos</h1>
        <form action="actualizar.php?id+<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <ul>
        
             <input type="text" name="Nombre"  placeholder="Instrumento......" required value= "<?php echo $row['Nombre']; ?>"> <br>
             <input type="text" name="Descripcion"  placeholder="Descripcion......" required value= "<?php echo $row['Descripcion']; ?>"> <br>
             <input type="text" name="Autor"  placeholder="Cantidad......" required value= "<?php echo $row['Autor']; ?>"> <br>
             <input type="text" name="Año"  placeholder="Numero de Serie......" required value= "<?php echo $row['Año']; ?>"> <br>
             
             <td><img  height="50px" required src="data:image/jpeg;base64,<?php echo base64_encode($row['Imagen']); ?>"></td>
             <input type="file" name="Imagen">
             <input type="submit" value="Aceptar">

            </ul>



        </form>
    </center>
</body>
<style>
    body {
    margin: 0;
    padding: 20px;
    display: flex;
    justify-content: center;
    height: 100vh;
    text-align: center;
    padding: 20px;
    background-image: url('../img/fondoapi.jpg');
    background-size: cover; 
    background-position: center;
    background-repeat: no-repeat; 
    color: #ddd;
    font-style: italic;
}



h1 {
    text-align: center;
    color:white;
    padding-top: 30px;
}

form {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="file"] {
    margin: 10px 0;
    padding: 10px;
    border-radius: 5px;
    width: 100%;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color:rgb(76, 107, 175);
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s;
    box-sizing: border-box;
}

input[type="submit"]:hover {
    background-color:rgb(6, 2, 120);
}


td img {
    border-radius: 5px;
}
</style>
</html>