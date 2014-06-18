<?php 


$nome = $_POST['nomecontato'];
$email = $_POST['emailcontato'];
$fone = $_POST['fonecontato'];
$tipo = $_POST['tipo'];
$mensagem = $_POST['mensagem'];
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/plain; charset=utf-8\n";
$headers .= "From: $email \n"; // remetente
$headers .= "Return-Path: $email \n"; // return-path
$headers .= "Reply-To: $email \n"; // Endereço (devidamente validado) que o seu usuário informou no contato


$to = 'contato@ifwebs.com';
$subject = '[Ifwebs] Contato';
$msg = "Oi, veja abaixo o contato realizado pelo site: \n" .
		"Nome: $nome \n" .
		"E-mail: $email \n" .
		"Mensagem: $mensagem \n";
		

mail($to, $subject, $msg, $headers,$email);

if(mail)
echo '<script type="text/JavaScript">
	 	alert("Seu contato foi enviado com sucesso. Obrigado!");
	 	location.href="index.html"
   	 </script>';
?>