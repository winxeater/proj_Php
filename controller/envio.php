<?php

$to      = Config::EMAIL_USER;
$subject = 'Contato - Matheus e-Comm';
$message = 'Email de:'.$_GET['name']."\r\n".$_GET['body'];
$dest    = $_GET['email'];
$headers = 'From:'.$dest;

mail($to, $subject, $message,$dest, $headers);
?>

<!-- <script>alert('Email Enviado Com Sucesso!')</script>
<meta http-equiv="refresh" content="0;url=contact"> -->
