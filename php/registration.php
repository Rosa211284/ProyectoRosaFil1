<?php
session_start();
    include("config.php");


    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        // Verificar si el correo ya existe en la tabla sugar
        $query = $Conn->prepare("SELECT * FROM sugar WHERE email = :email");
        $query->bindParam(":email", $email, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() > 0) {
            echo '<p class="error">EL CORREO YA EXISTE</p>';
        } else {
            // Insertar un nuevo registro en la tabla sugar
            $query = $Conn->prepare("INSERT INTO sugar (username, password, email) 
                                     VALUES (:username, :password, :email)");
            $query->bindParam(":username", $username, PDO::PARAM_STR);
            $query->bindParam(":password", $password_hash, PDO::PARAM_STR);
            $query->bindParam(":email", $email, PDO::PARAM_STR);
            $result = $query->execute();

            if ($result) {
                header("Location: ../indexs/indexPrin.html");
                exit();  
            } else {
                header("Location: ../indexs/indexPrin.html");
                exit(); 
                echo '<p class="error">ERROR AL AGREGAR EL REGISTRO</p>';
            }
        }
    }
?>



