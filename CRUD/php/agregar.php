<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/estiloCRUD.css">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Registro de datos</h1>
        <p>Favor de registrar los nuevos datos</p>
        <form action="guardar.php" method = "POST" enctype="multipart/form-data">
            <ul>
                    <input type="text" name="Nombre"  placeholder="Instrumento" required value="">
                    <br><br>
                    <input type="text" name="Descripcion"  placeholder="Descripcion" required value="">
                    <br><br>
                    <input type="text" name="Autor"  placeholder="Cantidad" required value="">
                    <br><br>
                    <input type="text" name="Año"  placeholder="Numero de serie" required value="">
                    <br><br>
                    <input type="file" name="Imagen">
                <br><br>
                <input type="submit" value ="Aceptar">
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
    background-image: url('.../img/fondoapi.jpg');
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