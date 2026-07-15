<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_produto  = $_POST['nome'];
    $preco = $_POST['preco'];
    $Quantidade = $_POST["qnt"];

    // Uso de prepared statement para evitar SQL Injection
    $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sdi', $nome_produto, $preco, $Quantidade);

    if ($stmt->execute()) {
        header('Location: index.php');
        exit;
    } else {
        echo 'Erro ao salvar: ' . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
