<?php
     $this->layout("_theme");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type='text/javascript' src="login.js" async></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/login.css"/>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.es.gov.br/fonts/font-awesome/css/font-awesome.min.css">
</head>
<body>
    
    <h2>Bem-vindo, faça login para continuar.</h2>

    

    <div id="box">
        <h1>Login</h1>
        <span>Nome</span>
          <input type="text" id="name"  placeholder="seu nome">
        <span>E-mail</span>
          <input type="email" id="email" required placeholder="seu email">
        <span>Senha</span>
          <input type="password" id="senha" required placeholder="sua senha">
        <span id="message"></span>
        <span id="semConta">Não tem uma conta? Cadastre-se</span>
        <button class="submit">LOGIN</button>
    </div>
    
</body>
</html>

