<?php

   require_once("Usuario.class.php");

   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $senha = $_POST["senha"];

   $objetoDisciplina = new Disciplina($nome, $email, $senha);   
   $objetoDisciplina->exibirDados();
   //$objetoDisciplina->cadastrarUsuario();

   echo "çaça";

?>