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
</head>

<body>
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
                    //echo "<td><a href='atualizar-usuario.php?nome={$dc["nome"]}&carga={$dc["email"]}&senha={$dc["senha"]}'>
                    //Editar</a> | Excluir</td>";
                    echo "<td class = 'ex'>Excluir</td>";
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
        padding: 50px 0;
    }
    th{
        text-align: center;
        background-color: #DCDCDC;
    }
    h2{
        text-align: center;
        border-radius: 4px;
        border: solid 1px #A9A9A9;
        padding: 10px;
        font-weight: bold;
    }
    table{
        border-radius: 4px;       
    }
    .ex{
        text-align: center;
    }

</style>