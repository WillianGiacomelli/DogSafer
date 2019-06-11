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
$nomepet = $_POST['nomepet'];


$query = "insert into cliente(idCliente,nome,email,celular,cep,rua,numero,bairro,cidade,estado,senha)
    values (NULL,'$nome','$email','$telefone','$cep','$rua','$numero','$bairro','$cidade','$estado','$senha')";

mysqli_query($conexao,$query);

$id= mysqli_insert_id();

$query2 = "insert into animal(nome) values ('$nomepet') where idAnimal = '$id'";

mysqli_query($conexao,$query2);

	

echo "<script>window.location.href='../login.php';</script>";
}
?>