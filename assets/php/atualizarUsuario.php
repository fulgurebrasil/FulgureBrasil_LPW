<!DOCTYPE html>
<html>
    <head>
        <title>
            Atualização do Usuário
        </title>
        <style>
            input, textarea{
                display: block;
            }
        </style>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php require_once "cabecalho.php";?>
        <?php
            $nome = $_GET["nome"];
            $carga = $_GET["carga"];
            $ementa = $_GET["ementa"];
        ?>
        <form method="POST" action="recebe-atualizar-disciplina.php">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $nome;?>" readonly>
            
            <label for="carga">Carga horária:</label>
            <input type="text" name="carga" id="carga" value="<?php echo $carga;?>" >
            
            <label for="Ementa">Ementa:</label>
            <textarea name="ementa" id="ementa" cols="30" rows="5">
            <?php echo $ementa; ?>
            </textarea>
            <button type="submit">Enviar</button>
            
        </form>
    </body>
</html>