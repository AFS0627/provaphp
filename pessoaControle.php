<?php
    include_once("Database.php");
    include_once("PessoaDAO.php");
   
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Cadastrara
    if (isset($_POST["acao"]) && $_POST["acao"] == "cadastrar") {
        if (isset($_POST["nome"]) && isset($_POST["idade"]) && isset($_POST["cpf"]) && isset($_POST["senha"])) {
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            $cpf = $_POST["cpf"];
            $senha = $_POST["senha"];
    
            save($nome, $idade, $cpf, $senha); 
            header("Location: Listar.php");
        } else {
            echo "Todos os campos são obrigatórios.";
        }
    }

    // Editar
    if (isset($_POST["acao"]) && $_POST["acao"] == "editar") {
        if (isset($_POST["id"]) && isset($_POST["nome"]) && isset($_POST["idade"]) && isset($_POST["cpf"]) && isset($_POST["senha"])) {
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            $cpf = $_POST["cpf"];
            $senha = $_POST["senha"]; 
            editUsuario($id, $nome, $idade, $cpf, $senha); 
            header("Location: Listar.php");
            exit();
        } else {
            echo "Erro ao editar usuário";
        }
    }

    // Excluir
    if (isset($_POST["acao"]) && $_POST["acao"] == "delete") {
        if (isset($_POST["id"])) {
            $id = $_POST["id"];
            deleteUsuario($id); 
            header("Location: Listar.php");
        }
    }
?>
