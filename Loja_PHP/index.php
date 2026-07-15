<?php
require_once 'config.php';

$sql = "SELECT * FROM produtos ORDER BY id DESC";
$resultado = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .navbar-aula { background-color: #ffc107; }
        .navbar-aula .navbar-brand { color: #212529; font-weight: bold; }
        .btn-cinza { background-color: #6c757d; border-color: #6c757d; color: #fff; }
        .btn-cinza:hover { background-color: #5a6268; border-color: #545b62; color: #fff; }
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

    <h2 class="mb-4 text-center">Gerenciamento de Alunos</h2>

    <!-- Formulário de Cadastro (Create) -->
    <div class="card card-form mb-5">
        <div class="card-body">
            <h5 class="card-title mb-3">Cadastrar Novo Produto</h5>
            <form action="salvar.php" method="POST" class="row g-3">
                <div class="col-12 col-md-5">
                    <label for="nome" class="form-label">Nome do produto:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="col-12 col-md-5">
                    <label for="preco" class="form-label">Valor:</label>
                    <input type="number" step = "any" class="form-control" id="preco" name="preco" required>
                </div>
                <div class="col-12 col-md-5">
                    <label for="preco" class="form-label">Quantidade:</label>
                    <input type="number" class="form-control" id="qnt" name="qnt" required>
                </div>
                <div class="col-12 col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-warning w-100">Salvar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Listagem de Alunos (Read) -->
    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead class="table-secondary">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Qnt</th>
                    <th class="text-end">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($resultado && $resultado->num_rows > 0): ?>
                    <?php while ($linha = $resultado->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($linha['id']) ?></td>
                            <td><?= htmlspecialchars($linha['nome']) ?></td>
                            <td><?= htmlspecialchars($linha['preco']) ?></td>
                            <td><?= htmlspecialchars($linha['quantidade']) ?></td>
                            <td class="text-end">
                                <a href="editar.php?id=<?= $linha['id'] ?>" class="btn btn-sm btn-cinza">Editar</a>
                                <a href="excluir.php?id=<?= $linha['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Deseja realmente excluir este aluno?');">Excluir</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center text-muted">Nenhum aluno cadastrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</div>

<footer class="text-center">
    Aula de PHP com Prof. Lucas Castellan
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php $conn->close(); ?>
