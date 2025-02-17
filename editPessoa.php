<?php 
    include_once("Database.php");
    include_once("PessoaDAO.php");
// pra buscar um usuario especifico
    if (isset($_GET["pessoa_id"])) {
        $id2 = $_GET["pessoa_id"];
        $pessoa = getUsuarioById($id2); 
    } else {
        die("Pessoa não encontrada");
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pessoa</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: light blue; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h2 {
            text-align: center;
            font-size: 2em;
            color: black;
            margin-bottom: 30px;
        }

        fieldset {
            width: 100%;
            max-width: 500px;
            padding: 30px;
            border: none;
            border-radius: 15px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        legend {
            font-size: 1.6em;
            font-weight: bold;
            color: #0056b3;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 1.1em;
            color: black;
        }

        input[type="text"],
        input[type="number"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1em;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="password"]:focus {
            border-color: blue;
            outline: none;
        }

        input[type="submit"], .delete-btn {
            width: 100%;
            padding: 15px;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"] {
            background-color: blue;
            margin-bottom: 10px;
        }

        input[type="submit"]:hover {
            background-color: blue;
        }

        .delete-btn {
            background-color: red;
        }

        .delete-btn:hover {
            background-color: red;
        }
    </style>
</head>
<body>

<h2>Editar Pessoa</h2>
<form action="pessoaControle.php" method="post">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($pessoa['id']); ?>">

    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?php echo htmlspecialchars($pessoa['nome']); ?>" required>

    <label for="idade">Idade:</label>
    <input type="number" name="idade" value="<?php echo htmlspecialchars($pessoa['idade']); ?>" required>

    <label for="cpf">CPF:</label>
    <input type="text" name="cpf" value="<?php echo htmlspecialchars($pessoa['cpf']); ?>" required>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" value="<?php echo htmlspecialchars($pessoa['senha']); ?>" required>

    <input type="hidden" name="acao" value="editar">
    <input type="submit" value="Salvar Alterações">
    
    <button type="submit" name="acao" value="delete" class="delete-btn">Excluir Usuário</button>
</form>

</body>
</html>