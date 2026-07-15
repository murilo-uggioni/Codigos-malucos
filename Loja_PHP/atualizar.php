<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int) $_POST['id'];
    $nome_produto = $_POST['nome'];
    $preco = $_POST['preco'];
    $Quantidade = $_POST["qnt"];

    $sql = "UPDATE produtos SET nome = ?, preco = ?, quantidade = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sdii', $nome_produto, $preco, $Quantidade, $id);

    if ($stmt->execute()) {
        header('Location: index.php');
        exit;
    } else {
        echo 'Erro ao atualizar: ' . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
