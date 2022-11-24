<?php
    $id = $_GET["id"];
    require_once "Usuario.class.php";
    $objeto = new Usuario();
    $objeto->excluirUsuario($id);
    header("Location: todosUsuarios.php");
?>