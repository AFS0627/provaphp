<?php 
    include_once("Database.php");

    function save($nome, $idade, $cpf, $senha) {
        $db = conecta();

        $sql = "INSERT INTO usuario (nome, idade, cpf, senha) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $idade);
        $stmt->bindValue(3, $cpf);
        $stmt->bindValue(4, $senha);
        $stmt->execute();
    }

    function getUsuarios() {
        $db = conecta();
        $sql = "SELECT * FROM usuario";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getUsuarioById($id) {
        $db = conecta();
        $sql = "SELECT * FROM usuario WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function login($cpf, $senha) {
        $db = conecta();
        
        $sql = "SELECT * FROM usuario WHERE cpf = ?"; 
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1, $cpf);
        $stmt->execute();
        
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($resultado && $senha === $resultado['senha']) {
            return $resultado;
        } else {
            return false;
        }
    }

    function deleteUsuario($id) {
        $db = conecta();
        $sql = "DELETE FROM usuario WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    function editUsuario($id, $nome, $idade, $cpf, $senha) {
        $db = conecta();
        $sql = "UPDATE usuario SET nome = ?, idade = ?, cpf = ?, senha = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $idade);
        $stmt->bindValue(3, $cpf);
        $stmt->bindValue(4, $senha);
        $stmt->bindValue(5, $id);
        $stmt->execute();
    }
?>
