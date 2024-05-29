<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $pretensao = $_POST['salaryExpect'];
    $ocupacao = $_POST['occupation'];
    $mensagem = $_POST['message'];
    $assunto = "Adin - Contato";
    $file = $_FILES["inputFile"];
    $attachment = $file["tmp_name"];
    $attachmentName = $file["name"];

    $headers = "From: raoni.rocha@alphasquad.cx";
    $headers .= "\r\nMIME-Version: 1.0";
    $headers .= "\r\nContent-Type: multipart/mixed; boundary=\"boundary\"\r\n";

    $body = "--boundary\r\n";
    $body .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $body .= "Content-Disposition: inline\r\n";
    $body .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
    $body .= "Nome: $name\r\n";
    $body .= "E-mail: $email\r\n";
    $body .= "Assunto: $subejct\r\n\r\n";
    $body .= "Mensagem: $message\r\n\r\n";

    $body .= "--boundary\r\n";
    $body .= "Content-Type: application/octet-stream; name="$attachmentName"\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n";
    $body .= "Content-Disposition: attachment; filename="$attachmentName"\r\n\r\n";
    $body .= chunk_split(base64_encode(file_get_contents($attachment))) . "\r\n";
    $body .= "--boundary--";
    mail("raoni.rocha@alphasquad.cx", $assunto, $body, $headers);
    header('Location: index.html'); 
    die();
}
?>
