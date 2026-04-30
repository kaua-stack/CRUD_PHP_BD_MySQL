<?php include "conexao.php";

    $id = $_POST['id_cliente'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $sql = "update clientes
        set nome='$nome', email='$email', telefone='$telefone', cidade='$cidade', estado='$estado' where id_cliente = $id;";
        
        if ($con -> query($sql)){
    
        echo "Cadastro atualizado com Sucesso";
        } 
        else 
        {
         echo "Erro ao atualizar! :" .$con->error;
        }

        echo "<br> <a href = 'listar_cliente.php'>voltar</a>";
?>
