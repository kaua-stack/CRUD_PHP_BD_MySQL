<?php
include "conexao.php";

$id = $_POST['id_produto'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];
$id_categoria = $_POST['id_categoria'];

$sql = "UPDATE produtos SET
        nome = '$nome',
        preco = '$preco',
        estoque = '$estoque',
        id_categoria = '$id_categoria'
        WHERE id_produto = $id";

if ($con->query($sql)) {
    echo " Produto atualizado com sucesso!";
} else {
    echo " Erro ao atualizar: " . $con->error;
}

echo "<br><a href='listar_produto.php'>Voltar</a>";
?>