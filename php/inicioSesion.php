<?php
session_start();
include("config.php");

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Verificar si el correo existe en la base de datos
    $query = $Conn->prepare("SELECT id, username, password FROM sugar WHERE email = :email");
    $query->bindParam(":email", $email, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
        $user = $query->fetch(PDO::FETCH_ASSOC);

        // Verificar si la contraseña ingresada es correcta
        if (password_verify($password, $user['password'])) {
            // Iniciar sesión si la contraseña es correcta
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            // Redirigir a la página principal después de un inicio de sesión exitoso
            header("Location: ../indexs/indexPrin.html");  // Asegúrate de que esta ruta sea correcta
            exit();
        } else {
            echo '<p class="error">Contraseña incorrecta</p>';
        }
    } else {
        echo '<p class="error">No se encontró un usuario con ese correo</p>';
    }
}
?>
