<?php

   require_once("Usuario.class.php");

   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $senha = $_POST["senha"];

   $usuario = new Usuario($nome, $email, $senha);   
   $usuario->inserirUsuario();

?>