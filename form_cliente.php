<?php
include "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de cliente</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<h1>Cadastro de cliente</h1>

    <br>

    <form action="salvar_cliente.php" method="post">

        <input type="hidden" name="id_cliente">
 
    NOME:   <input type="text" name="nome" required ><br>
 
    Email:   <input type="text" name="email" required>
 
    TELEFONE:    <input type="text" name="telefone">
 
    CIDADE:    <input type="text" name="cidade">
 
    ESTADO:    <input type="text" name="estado" maxlength="2">
    
    <button type="submit">Salvar</button>
    </form>
    <br>
    <a href="listar_cliente.php">Voltar</a>


</body>
</html>