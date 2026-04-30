<?php include "conexao.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Cadastro de Clientes</h1>
    <h2>Gerenciamento</h2>

    <div style="text-align:center; margin-bottom:20px;">
        <a href="form_cliente.php" class="btn">Cadastrar Cliente</a>
    <a href="listar_produto.php">Pagina de produtos</a>
    </div>

    <!-- TABELA -->
    <div class="table-wrapper">

    <?php $sql = "SELECT * FROM clientes";
    $result = $con->query($sql);  ?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Data de cadastro</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id_cliente']; ?></td>
                    <td><?= $row['nome']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['telefone']; ?></td>
                    <td><?= $row['cidade']; ?></td>
                    <td><?= $row['estado']; ?></td>
                    <td><?= $row['data_cadastro'];?></td>
                    
                    <td>
                        <a href="editar_cliente.php?id=<?= $row['id_cliente']; ?>">Editar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>