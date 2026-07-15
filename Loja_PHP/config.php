<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'loja_php';
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verifica conexão
if ($conn->connect_error) {
    die('Falha na conexão: ' . $conn->connect_error);
}

// Garante acentuação correta (nomes em português)
$conn->set_charset('utf8mb4');
?>
