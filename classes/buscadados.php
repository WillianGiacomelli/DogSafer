<?php 

include 'conexao.php';

$query = "select * from cliente";
$consulta_clientes = mysqli_query($conexao,$query);

?>