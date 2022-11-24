<!DOCTYPE html>
<html>

<head>
    <title>Todos Usuários</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
            function confirmarExclusao(id){
                var resp = window.confirm("Tem certeza que deseja excluir "+id+"?");
                if(resp){
                    window.location.href="recebeExclusaoUsuario.php?id="+id;
                }
            }
    </script>
</head>

<body>
    <nav id="nav" class="bg hover-circulo">
        <a href="./inicial.html" title="Página Inícial">Home</a>
        <a href="../assets/php/todosUsuarios.php" title="Todos usuários cadastrados">Usuários Cadastrados</a>
        <a href="#" title="Equipe Fulgure Brasil">Sobre Nós</a>
    </nav>
    <div class = "container">
        <h2>Usuários cadastrados - Fulgure Brasil</h2>
    </div>
    <div class="container">
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "usuario.class.php";
                $objusuario = new Usuario();
                $usuarios = $objusuario->buscarTodosUsuarios();
                foreach ($usuarios as $dc) {
                    echo "<tr>";
                    echo "<td>" . $dc["nome"] . "</td>";
                    echo "<td>" . $dc["email"] . "</td>";
                    echo "<td>" . $dc["senha"] . "</td>";
                    //echo "<td><a href='atualizar-usuario.php?nome={$dc["nome"]}&email={$dc["email"]}&senha={$dc["senha"]}'>
                    //Editar</a> | Excluir</td>";
                    echo "<td class = 'ex'>
                    <a href='javascript:func()' onclick='confirmarExclusao(\"{$dc["id"]}\")'> Excluir</a>                    
                    || 
                    <a href='atualizarUsuario.php?id={$dc["id"]}&nome={$dc["nome"]}&email={$dc["email"]}&senha={$dc["senha"]}'> Editar </a>
                    </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<style>
    body {
        font-family: 'Montserrat', sans-serif;
        place-items: center;
        background-image: url("../images/background.png");
    }
    table, h2{
        background-color: white;
    }
    th{
        text-align: center;
        background-color: #DCDCDC;
    }
    h2{
        text-align: center;
        border-radius: 4px;
        border: solid 1px #A9A9A9;
        padding: 13px;
        font-weight: bold;
        margin-top: 150px;
    }
    table{
        border-radius: 4px;       
    }
    .ex{
        text-align: center;
    }

    table a{
        background-color: #d3d3d3;
        padding: 5px;
        border-radius: 4px;
        border: solid grey 0.5px;
        color: green;
    }
    
nav.bg {
	    
        width:100%;
        float:left; 
        text-align:center;  
        background-color: #2d2c2c;
        padding:1.5em 0em; 
    }
    nav a {
        position: relative;
        display: inline-block;
        margin:5px 30px;
        outline: none;
        color: #fff;
        text-decoration: none;
        font-weight: bold;
        font-size: 1em;
        transition:0.6s; 
    }
    nav a:hover,
    nav a:focus {
        transition:0.4s;
        outline: none;
        color:#50e6ec; 
    }
    /* Efeito circulo */
    .hover-circulo a::before,
    .hover-circulo a::after {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 75px;
        height: 75px;
        border: 2px solid rgba(95, 217, 222, 0.18);
        border-radius: 50%;
        content: '';
        opacity: 0;
        -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
        -moz-transition: -moz-transform 0.3s, opacity 0.3s;
        transition: transform 0.3s, opacity 0.3s;
        -webkit-transform: translateX(-50%) translateY(-50%) scale(0.2);
        -moz-transform: translateX(-50%) translateY(-50%) scale(0.2);
        transform: translateX(-50%) translateY(-50%) scale(0.2);
    }
    .hover-circulo a::after {
        width: 50px;
        height: 50px;
        border-width: 6px;
        -webkit-transform: translateX(-50%) translateY(-50%) scale(0.8);
        -moz-transform: translateX(-50%) translateY(-50%) scale(0.8);
        transform: translateX(-50%) translateY(-50%) scale(0.8);
    }
    .hover-circulo a:hover::before,
    .hover-circulo a:hover::after,
    .hover-circulo a:focus::before,
    .hover-circulo a:focus::after {
        opacity: 1;
        -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
        -moz-transform: translateX(-50%) translateY(-50%) scale(1);
        transform: translateX(-50%) translateY(-50%) scale(1);
    }

</style>