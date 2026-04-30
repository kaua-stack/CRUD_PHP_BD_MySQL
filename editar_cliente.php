<?php
include "conexao.php";

$id = $_GET['id'];

$sql = "SELECT * FROM clientes WHERE id_cliente = $id";
$result = $con->query($sql);
$cliente = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>EDITAR CLIENTE</h1>
<br>

<form action="atualizar_cliente.php" method="post">

    <input type="hidden" name="id_cliente" value="<?php echo $cliente['id_cliente']; ?>">

    Nome:
    <input type="text" name="nome" value="<?php echo $cliente['nome']; ?>" required>
    <br><br>

    Email:
    <input type="text" name="email" value="<?php echo $cliente['email']; ?>" required>
    <br><br>

    Telefone:
    <input type="text" name="telefone" value="<?php echo $cliente['telefone']; ?>">
    <br><br>

    Cidade:
    <input type="text" name="cidade" value="<?php echo $cliente['cidade']; ?>">
    <br><br>

    Estado:
    <input type="text" name="estado" maxlength="2" value="<?php echo $cliente['estado']; ?>">
    <br><br>

    <button type="submit">Atualizar</button>
    <br>

<!-- BOTÃO DE EXCLUSÃO -->

<br>
<a href="listar_cliente.php">Voltar</a>

</body>
</html>