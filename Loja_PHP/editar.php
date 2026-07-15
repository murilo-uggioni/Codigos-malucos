<?php
require_once 'config.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$sql = "SELECT * FROM produtos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$resultado = $stmt->get_result();
$loja = $resultado->fetch_assoc();

if (!$loja) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .navbar-aula { background-color: #ffc107; }
        .navbar-aula .navbar-brand { color: #212529; font-weight: bold; }
        .btn-cinza { background-color: #6c757d; border-color: #6c757d; color: #fff; }
        footer { background-color: #6c757d; color: #fff; padding: 15px 0; margin-top: 40px; }
        .card-form { border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
    </style>
</head>
<body>

<nav class="navbar navbar-aula navbar-expand-lg">
    <div class="container">
        <span class="navbar-brand">Aula de PHP com Prof. Lucas Castellan</span>
    </div>
</nav>

<div class="container my-5">
    <h2 class="mb-4 text-center">Editar Produto</h2>

    <div class="card card-form mx-auto" style="max-width: 500px;">
        <div class="card-body">
            <form action="atualizar.php" method="POST">
                <input type="hidden" name="id" value="<?= htmlspecialchars($loja['id']) ?>">

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?= htmlspecialchars($loja['nome']) ?>" required>
                </div>

                <div class="mb-3">
                    <label for="preco" class="form-label">Valor</label>
                    <input type="number" step="any" class="form-control" id="preco" name="preco" value="<?= htmlspecialchars($loja['preco']) ?>" required>
                </div>

                 <div class="mb-3">
                    <label for="qnt" class="form-label">Quantidade</label>
                    <input type="number" class="form-control" id="qnt" name="qnt" value="<?= htmlspecialchars($loja['quantidade']) ?>" required>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-warning w-100">Atualizar</button>
                    <a href="index.php" class="btn btn-cinza w-100">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>

<footer class="text-center">
    Aula de PHP com Prof. Lucas Castellan
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php $stmt->close(); $conn->close(); ?>
