<?php

   require_once("Usuario.class.php");

   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $senha = $_POST["senha"];

   $objetoUsuario = new Usuario($nome, $email, $senha);   
   $objetoUsuario->exibirDados();
   //$objetoDisciplina->cadastrarUsuario();

   echo "çaça";

?>