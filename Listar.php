<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Pessoas</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f8ff; 
        }

        h2 {
            text-align: center;
            color: black;
            font-size: 2em;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: blue;
            color: white;
            text-align: center;
        }

        td {
            height: auto;
        }

        a {
            color: blue;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
    include_once("Database.php");
    include_once("PessoaDAO.php");

    $listaPessoa = getUsuarios();
?>

    <h2>Listagem de Pessoas</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>CPF</th>
            <th>Senha</th>
        </tr>
        <?php
        foreach ($listaPessoa as $pessoa) {
            // cria uma linha pra cada pessoa 
        ?>
       
            <tr>
                <td>
                
                    <a href="editPessoa.php?pessoa_id=<?php echo $pessoa['id']; ?>">
                        <?php echo $pessoa['id']; ?>
                    </a>
                </td>
            
                <td><?php echo htmlspecialchars($pessoa['nome']); ?></td>
                <td><?php echo htmlspecialchars($pessoa['idade']); ?></td>
                <td><?php echo htmlspecialchars($pessoa['cpf']); ?></td>
                <td><?php echo htmlspecialchars($pessoa['senha']); ?></td>
            </tr>
            
        <?php
        }
        //  carrega os outros dados da lista de pessoas
        ?>
    </table>

</body>
</html>