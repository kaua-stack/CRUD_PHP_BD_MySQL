<?php
include "conexao.php";

$id = $_GET['id'];

$sql = "SELECT * FROM produtos WHERE id_produto = $id";
$result = $con->query($sql);
$produto = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>EDITAR produto</h1>
<br>

<form action="atualizar_produto.php" method="post">

    <input type="hidden" name="id_produto" value="<?php echo $produto['id_produto']; ?>">

    Nome:
    <input type="text" name="nome" value="<?php echo $produto['nome']; ?>" required>
    <br><br>

    preco:
    <input type="number" name="preco" value="<?php echo $produto['preco']; ?>" required>
    <br><br>
    
   
   Estoque:  <input type="number" name="estoque" value="<?php echo $produto['estoque']; ?>" required>
    <br><br>


    categoria:
    <input type="text" name="id_categoria" value="<?php echo $produto['id_categoria']; ?>">
    <br><br>


    <button type="submit">Atualizar</button>
    <br>
<a href="listar_produto.php">Voltar</a>

</form>

<br>




</body>
</html>