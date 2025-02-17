<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: light blue
        }

        .login-container {
            background-color: white;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 320px;
            text-align: center;
        }

        .login-container h1 {
            color: blue;
            margin-bottom: 20px;
            font-size: 2em;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1em;
            transition: border-color 0.3s;
        }

        .login-container input[type="text"]:focus,
        .login-container input[type="password"]:focus {
            border-color: blue;
            outline: none;
        }

        .login-container button {
            background-color: green;
            color: white;
            border: none;
            padding: 12px 15px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.1em;
            width: 100%;
            transition: background-color 0.3s;
        }

        .login-container button:hover {
            background-color: green;
        }

        .login-container a {
            color: blue;
            text-decoration: none;
            font-size: 14px;
            display: block;
            margin-top: 10px;
        }

        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="loginControle.php" method="post">
            <label for="cpf">Insira seu CPF:</label>
            <input type="text" name="cpf" id="cpf" required>
            <label for="senha">Insira sua senha:</label>
            <input type="password" name="senha" id="senha" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>