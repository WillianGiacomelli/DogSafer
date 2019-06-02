<?php 

include 'conexao.php';

$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$cep = $_REQUEST['cep'];
$rua = $_REQUEST['rua'];
$numero = $_REQUEST['numero'];
$bairro = $_REQUEST['bairro'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['uf'];
$senha = sha1(md5($_REQUEST["senha"]));

$query = "insert into cliente(idCliente,nome,email,telefone,cep,rua,numero,bairro,cidade,estado,senha)
    values (NULL,'$nome','$email','$telefone','$cep','$rua','$numero','$bairro','$cidade','$estado','$senha')";

mysqli_query($conexao,$query);

echo "<script>window.location.href='./login.html;</script>";
?>