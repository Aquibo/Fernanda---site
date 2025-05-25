<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Baixe o PHPMailer com o Composer

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'SEUEMAIL@gmail.com'; // Seu e-mail de envio
    $mail->Password   = 'SENHA_DO_APLICATIVO'; // Senha de app, não sua senha normal
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('SEUEMAIL@gmail.com', 'Seu Nome');
    $mail->addAddress('uaheraajv02@gmail.com', 'Destinatário');

    $mail->isHTML(true);
    $mail->Subject = 'Teste de envio';
    $mail->Body    = 'Esta é uma mensagem de teste enviada do seu site.';

    $mail->send();
    echo 'Mensagem enviada com sucesso.';
} catch (Exception $e) {
    echo "Erro ao enviar: {$mail->ErrorInfo}";
}
?>
