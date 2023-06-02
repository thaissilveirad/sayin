<?php
     $this->layout("_theme");
?>

    
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


a