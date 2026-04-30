<?php
include "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Cadastro de Produtos</h1>

<form action="salvar_produto.php" method="post">

    Nome:
    <input type="text" name="nome" required><br><br>

    Preço:
    <input type="number" step="0.01" name="preco" required><br><br>

    Estoque:
    <input type="number" name="estoque" required><br><br>

    Categoria:
    <select name="id_categoria" required>
        <option value="">-- Selecione a categoria --</option>

        <?php
        $sqlCat = "SELECT id_categoria, nome FROM categorias ORDER BY nome";
        $resCat = $con->query($sqlCat);

        while ($cat = $resCat->fetch_assoc()) {
            echo "<option value='{$cat['id_categoria']}'>{$cat['nome']}</option>";
        }
        ?>
    </select>

    <br><br>

    <button type="submit">Salvar</button>
    <br>
<a href="listar_produto.php">Voltar</a>

</form>



</body>
</html>