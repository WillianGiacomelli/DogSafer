<?php 

include 'conexao.php';

$idanimal = $_POST['idanimal'];
$numanimal = $_POST['numColeira'];

$query = " insert into coleira(num_coleira,idAnimal) values('$numanimal','$idanimal')";

mysqli_query($conexao,$query);

header('location:../Admin/admin.php');



?>