<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type='text/javascript' src="cadastro.js" async></script>
	<link rel="stylesheet" type="text/css" href="login.css"/>
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdn.es.gov.br/fonts/font-awesome/css/font-awesome.min.css">
</head>
<body>
    
    <h2>Cadastre-se grátis para continuar.</h2>

    <div id="box">
        <h1>Cadastro</h1>
        <span>Nome Completo</span>
          <input type="text" id="nome"  placeholder="Informe seu nome inteiro">
          <span id="msgNome"></span>
          <span>E-mail</span>
            <input type="email" id="email" placeholder="....@gmail.com">
            <span id="msgEmail"></span>
        <span>Telefone</span>
          <input type="number" id="phone" placeholder="Número de telefone">
          <span id="msgPhone"></span>
        <span>Endereço</span>
          <input type="text" id="address" placeholder="Seu endereço">
          <span id="msgAddress"></span>
        <span>Senha</span>
          <input type="password" id="senha" placeholder="Crie uma senha">
          <span id="msgSenha"></span>
          <button class="submit">ENVIAR</button>

    </div>
    
</body>
</html>