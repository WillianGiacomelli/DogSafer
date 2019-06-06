<?php 

include 'conexao.php';

if(isset($_POST['nome'])){

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['uf'];
$senha = sha1(md5($_POST["senha"]));

$query = "insert into cliente(idCliente,nome,email,celular,cep,rua,numero,bairro,cidade,estado,senha)
    values (NULL,'$nome','$email','$telefone','$cep','$rua','$numero','$bairro','$cidade','$estado','$senha')";



mysqli_query($conexao,$query);
//$id= mysql_insert_id();
//die($id);

echo "<script>window.location.href='../login.html';</script>";
}
?>