<?php
    $nome = $_GET["nome"];
    $objeto = new Usuario();
    $objeto->excluirUsuario($nome);
    header("Location: todosUsuarios.php");
?>