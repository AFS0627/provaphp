<?php

session_start();


$pathPessoaDAO = __DIR__ . '/PessoaDAO.php';
if (!file_exists($pathPessoaDAO)) {
    die("Erro: O arquivo PessoaDAO.php não foi encontrado no caminho: " . $pathPessoaDAO);
}
include_once($pathPessoaDAO);

// verifica se é post e obtem os dados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $cpf = $_POST['cpf'] ?? '';
    $senha = $_POST['senha'] ?? '';

    //verifica se está preenchifo
    if (empty($cpf) || empty($senha)) {
        echo "<script>alert('Por favor, preencha todos os campos!'); window.location.href = 'login.php';</script>";
        exit();

    }

    //verifica se login existe
    if (!function_exists('login')) {
        die("Erro: A função 'login()' não foi encontrada no arquivo PessoaDAO.php.");
    }
// tenta autentica
    $resultado = login($cpf, $senha);
// caso bem sucedido manda pra listagem
    if ($resultado) {
        
        $_SESSION['usuario_id'] = $resultado['id']; 
        $_SESSION['usuario_nome'] = $resultado['nome'];
        header("Location: Listar.php");
        exit();
    } else {
        
        echo "<script>alert('Usuário ou senha incorretos!'); window.location.href = 'login.php';</script>";
        exit();
    }
}
