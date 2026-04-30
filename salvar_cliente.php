<?php include "conexao.php";

$nome =$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$cidade=$_POST['cidade'];
$estado =$_POST['estado'];


$sql = "insert into clientes (nome,email,telefone,cidade,estado)
values('$nome','$email','$telefone','$cidade','$estado')";

if($con ->query($sql)){
    echo "cliente cadastrado com sucesso !";

}else{
    echo"Erro ao cadastrar:".$con -> err;
}

echo"<br><a href='listar_clientes.php'>Voltar</a>";
?>