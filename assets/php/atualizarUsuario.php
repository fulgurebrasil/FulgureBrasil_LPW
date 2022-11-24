<!DOCTYPE html>
<html>

<head>
    <title>
        Atualização do Usuário
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style_cadastro.css">
    <script type="text/javascript" src="../assets/js/script.js"></script>
</head>

<body>
    <?php
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];
    ?>
    <div id="menu-bar">
        <div id="hamburguerInvertido" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <a href="#" title="Página Inícial">Home</a>
        <a href="#" title="Atualizar dados de cadastro">Atualizar Dados</a>
        <a href="#" title="Lista">Usuários</a>
        <a href="#" title="Equipe Fulgure Brasil">Sobre Nós</a>
    </div>
    <div id="tela">
        <div id="hamburguer" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p id="cadastrar">Alterar Dados</p>
        <p id="instrucao">Substitua os dados cadastrais de sua escolha.</p>
        <form id="cadastro" action="./recebeAtualizacaoUsuario.php" onsubmit="return validarCampos(this)" method="POST">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Seu nome" value="<?php echo $nome; ?>">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="exemplo@mail.com" value="<?php echo $email; ?>">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="••••••••••••••••••"
                value="<?php echo $senha; ?>">
            <p id="mensagem"></p>
            <button id="enviar" type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>

<style>
    body {
        font-family: 'Montserrat', sans-serif;
        place-items: center;
        padding: 50px 0;
    }

    a:link {
        text-decoration: none;
        cursor: pointer;
    }

    input,
    button {
        width: 100%;
        height: 44px;
        border-radius: 6px;
        display: block;
        margin-bottom: 24px;
    }

    button {
        cursor: pointer;
    }

    form input {
        padding-left: 2.5%;
        width: 97%;
    }

    p,
    label {
        font-size: 14px;
    }

    label {
        margin-bottom: 14px;
        display: inline-block;
    }

    div#tela {
        justify-content: center;
        width: 30%;
        height: 820px;
        margin: auto;
        padding: 80px 100px 0 100px;
        box-shadow: 3px 3px 3px 3px #9b9b9b;
        border-radius: 10px;
    }

    div#menu-bar {
        margin: 0 auto;
        position: fixed;
        background-color: black;
        color: white;
        height: 100%;
        width: 40%;
        padding-left: 30px;
        padding-top: 58px;
        box-shadow: 3px 3px 3px 3px #9b9b9b;
        left: 0;
        top: 0;
        display: none;
    }

    div#menu-bar a {
        text-decoration: none;
        color: white;
        font-weight: 100;
        display: block;
        margin-bottom: 50px;
    }

    div#hamburguer,
    div#hamburguerInvertido {
        cursor: pointer;
        margin-bottom: 60px;
    }

    div#hamburguer div,
    div#hamburguerInvertido div {
        width: 30px;
        height: 5px;
        margin-bottom: 3px;
    }

    div#hamburguerInvertido div {
        background-color: rgb(255, 255, 255);
    }

    div#hamburguer div {
        background-color: black;
    }

    p#cadastrar {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 23px;
    }

    p#instrucao {
        margin-bottom: 56px;
    }

    p#txtCadastro {
        display: inline;
    }

    p#mensagem {
        font-weight: bold;
        color: red;
    }

    button#enviar {
        background-color: black;
        color: white;
        font-weight: bold;
        border: none;
        box-shadow: 3px 3px 3px #9b9b9b;
        margin-bottom: 42px;
        margin-top: 38px;
    }

    .erro {
        border-color: red;
    }

    @media only screen and (max-device-width: 1200px) {

        div#tela {
            box-shadow: none;
            width: 60%;
            margin-bottom: 50px;
        }
    }

    @media only screen and (max-device-width: 850px) {

        div#tela {
            box-shadow: none;
            width: 80%;
            height: 1600px;
            margin: auto;
            margin-bottom: 150px;
        }

        label,
        p,
        body,
        button#enviar,
        input {
            font-size: 30px;
        }

        p#cadastrar {
            font-size: 45px;
            margin-bottom: 50px;
        }

        p#instrucao {
            margin-top: 70px;
            margin-bottom: 120px;
        }

        input,
        button {
            margin-top: 10px;
            width: 100%;
            height: 100px;
            border-radius: 15px;
            display: block;
            margin-bottom: 60px;
        }

        div#menu-bar {
            width: 40%;
            padding: 90px;
        }

        div#hamburguer {
            margin-top: 40px;
            margin-bottom: 150px;
        }

        div#hamburguerInvertido {
            margin-bottom: 120px;
        }

        div#hamburguer div,
        div#hamburguerInvertido div {
            width: 80px;
            height: 13.4px;
            margin-bottom: 8px;
        }

        button#enviar {
            margin-bottom: 100px;
            margin-top: 150px;
        }

    }
</style>