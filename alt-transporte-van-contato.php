<?php

if (isset($_POST['submit']) && ($_POST['submit']=='Enviar')){

	include("phpmailer/class.phpmailer.php");
	
	$mail = new PHPMailer();
	$nome = strip_tags(htmlentities($_POST['nomecontato'], ENT_QUOTES,'UTF-8'));
	$email = $_POST['emailcontato'];
	$telefone = strip_tags($_POST['fonecontato']);
	$tipo = strip_tags($_POST['tipo']);
	
	$mensagem = strip_tags(htmlentities($_POST['mensagem'], ENT_QUOTES,'UTF-8'));
	
	$assunto = "{$tipo} - Contato site";
	
	$mensagemHTML  = '<p>Nome: '.$nome.'</p>';
	$mensagemHTML .= '<p>E-mail: '.$email.'</p>';
	$mensagemHTML .= '<p>Telefone: '.$telefone.'</p>';
	$mensagemHTML .= '<p>Mensagem: '.$mensagem.'</p>';
	$mensagemHTML .= '<p>Data: '.date("d/m/Y H:i").'</p>';
		
	$mail->IsSMTP(); // mandar via SMTP
	$mail->Host = "smtp.alt.tur.br"; // Seu servidor smtp
	$mail->SMTPAuth = true; // smtp autenticado
	$mail->Port = 587; // porta de comunicacao
	$mail->Username = "teste@alt.tur.br"; // usuÃ¡rio deste servidor smtp
	$mail->Password = "teste123"; // senha 
	
	$mail->FromName = $nome;
	$mail->SetLanguage( 'br', 'phpmailer/language/' ); // Carrega o idioma
	$mail->From = "teste@alt.tur.br";
	$mail->AddAddress('teste@alt.tur.br');
	//$mail->AddCC($email);
	//Endereço de resposta
	$mail->AddReplyTo($email);
	$mail->WordWrap = 50; // set word wrap
	$mail->IsHTML(true); // send as HTML
	$mail->Subject = '=?ISO-8859-1?B?' . base64_encode($assunto) . '?=';
	$mail->Body = utf8_encode($mensagemHTML);
	
	if($mail->Send()){
		echo '<script>alert("Mensagem enviada com sucesso!")</script>';
	}else{
		echo '<script>alert("Erro ao enviar a mensagem!")</script>';
	}

}

?>
<!doctype html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ALT Transporte Van Curitiba Contato</title>

<meta name="keywords" content="Fretamentos em Curitiba, Transporte Executivo em Curitiba, Aluguel de Van em Curitiba, Locacao de Van para Turismo em Curitiba" /> 
<meta name="description" content="Aluguel de Van em Curitiba. ALT - América Latina Turismo, Locacao de Van para Turismo em Curitiba." /> 

<?php include 'includes/head.php';?>
</head>
<body>
<div class="all">
<?php include 'includes/header.php';?>
<nav class="menu">
		<div class="center">
			<ul>
				<li><a href="index"><img src="img/home_0.png" alt="" title="" ></a>
				<li><span>|</span>
				<li><a href="transporte-executivo-curitiba-empresa-de-fretamento" >fretamentos curitiba</a>
				<li><span>|</span>
				<li><a href="empresa-de-fretamento-curitiba-alt-proposta" >quem somos</a>
				<li><span>|</span>
				<li><a href="transporte-diferenciado-van-curitiba" >diferenciais</a>
				<li><span>|</span>
				<li><a href="preco-fretamento-curitiba-turismo" >orçamento</a>
				<li><span>|</span>
				<li><a href="alt-transporte-van-contato" class="ativo">contato</a>
			</ul>
		</div>
		<div class="clear"></div>	
	</nav>
<div class="clear"></div>
<section id="banner">
	<ul class="rslides">
	  <li><img src="img/topo-contato.jpg" alt="" title=""></li>
	</ul>
	<div class="clear"></div>
</section>
<section >
<div class="center">
	<article class="principal">
		<div class="center">
		<div class="conteudo">
			<br>
			<a href="javascript:window.history.go(-1)" class="voltar"><< voltar</a><br><br>
			<div class="clear"></div>
		</div>
		</div>
	</article>		
</div>
</section>
<section class="contato">
	<div class="center">
	<div class="conteudo">
			<br><h1>CONTATO</h1><br>
			<h1><b>ALT AMÉRICA LATINA TURISMO</b></h1>
			<p>Av. Presidente Kennedy, 1491 sala 104</p>
			<p>Curitiba - PR CEP 80220-201</p>
			<p><b>41 3117 9477</b></p>
			<p>alt@alt.tur.br</p>
	</div>		
	</div>
</section>

<section>
	<div class="center">
		<article class="principal">
		<div class="conteudo">
			<form action="" enctype="multipart/form-data" method="post" id="contato" class="contato">
				<fieldset>
					<label>* Tipo</label>
					<select name="tipo">
						<option name="Elogio">Elogio</option>
						<option name="Sugestão">Sugestão</option>
						<option name="Reclamação">Reclamação</option>
					</select>
					<input name="nomecontato" id="nomecontato" type="text" placeholder="* Nome" required>
					<input name="emailcontato" id="emailcontato" type="email" placeholder="* Email" required>
					<input name="fonecontato" id="fonecontato" type="tel" placeholder="* Fone Contato" required>
					<textarea name="mensagem" placeholder="* Mensagem" autocomplete="off" required></textarea>
				</fieldset>
				
				
				<br>		
				<br>		
				<p>Campos identificados com * são obrigatórios</p>
				<input id="submit" name="submit" type="submit" value="Enviar">	
			</form>
			<div class="clear"></div>
			<br><br>
			</div>
		</article>
	</div>
</section>
<?php include 'includes/footer.php';?>
</div>
</body>
</html>