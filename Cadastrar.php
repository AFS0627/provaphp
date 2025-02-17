<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            display: flex;
            justify-content: center; 
            align-items: center; 
            min-height: 100vh; 
            margin: 0;
            background-color: gray; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        form {
            width: 100%;
            max-width: 400px; 
            padding: 30px;
            border: none;
            border-radius: 15px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 1.1em;
            color: #333;
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

        input[type="submit"] {
            width: 100%; 
            padding: 15px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: blue;
        }
    </style>
</body>
<body>
    <form action="pessoaControle.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade" required> 
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" required>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <input type="hidden" name="acao" value="cadastrar">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>