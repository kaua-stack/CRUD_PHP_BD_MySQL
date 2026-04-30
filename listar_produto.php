<?php
include "conexao.php";

$sql = "SELECT * FROM produtos";

$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Cadastro de Clientes</h1>
    <h2>Gerenciamento</h2>

    <div style="text-align:center; margin-bottom:20px;">
        <a href="form_produtos.php" class="btn">Cadastrar Produto</a>
        <a href="listar_cliente.php">Pagina de clientes</a>
    </div>

    <!-- TABELA -->
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>estoque</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id_produto']; ?></td>
                    <td><?= $row['nome']; ?></td>
                    <td><?= $row['preco']; ?></td>
                    <td><?= $row['estoque']; ?></td>
                    <td><?= $row['id_categoria']; ?></td>
                    <td>
                        <a href="editar_produto.php?id=<?= $row['id_produto']; ?>">Editar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>