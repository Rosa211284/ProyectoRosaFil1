<?php
        $servername  ="localhost";
        $username    ="root";
        $password    ="";
        $dbname      ="validacion";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $fnombre = mysqli_real_escape_string($conn, $_POST['fnombre']);
            $fapellidos = mysqli_real_escape_string($conn, $_POST['fapellidos']);
            
            $encryption_key = "clave secreta";
            $sql = "INSERT INTO usuarios (nombre,apellidos) VALUES (
    
            AES_ENCRYPT('nombre','encryption_key'),
            AES_ENCRYPT('apellidos','encryption_key'))";

            if ($conn->query($sql) === TRUE) {
                echo "Los datos se guardaron correctamente.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        }

            $conn->close();
?>

<form action ="index.php" method="POST">
        Nombre: <input type="text" name="fnombre" required><br>
        Apellidos: <input type="text" name="fapellidos" required><br>

        <input type="submit"  value="guardar Datos">

</form>