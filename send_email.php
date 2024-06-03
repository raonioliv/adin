<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $assunto = "Adin - Contato";

    $headers = "From: raoni.rocha@alphasquad.cx";
    $headers .= "\r\nMIME-Version: 1.0";
    $headers .= "\r\nContent-Type: multipart/mixed; boundary=\"boundary\"\r\n";

    $body = "--boundary\r\n";
    $body .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $body .= "Content-Disposition: inline\r\n";
    $body .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
    $body .= "Nome: $name\r\n";
    $body .= "E-mail: $email\r\n";
    $body .= "Assunto: $subject\r\n\r\n";
    $body .= "Mensagem: $message\r\n\r\n";

    mail("raoni.rocha@alphasquad.cx", $assunto, $body, $headers);
    header('Location: index.html'); 
    die();
}
?>
