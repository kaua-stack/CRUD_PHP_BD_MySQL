<?php
include "conexao.php";

$nome        = $_POST['nome'];
$preco       = $_POST['preco'];
$estoque     = $_POST['estoque'];
$id_categoria = $_POST['id_categoria'];

if ($nome == "" || $preco == "" || $estoque == "" || $id_categoria == "") {
    die("Preencha todos os campos!");
}

$sql = "INSERT INTO produtos (nome, preco, estoque, id_categoria)
        VALUES ('$nome', '$preco', '$estoque', '$id_categoria')";

if ($con->query($sql)) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $con->error;
}

echo "<br><a href='listar_produto.php'>Voltar</a>";
?>