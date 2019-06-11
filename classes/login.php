<?php 

include 'conexao.php';

$usuario = addslashes($_POST['txtemail']);
$senha = addslashes(sha1(md5($_POST["txtsenha"])));

$query = "select * from cliente where email = '$usuario' and senha='$senha'";

$consulta = mysqli_query($conexao,$query);


if(mysqli_num_rows($consulta) == 1){
    
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;

    header('location:../User/usuario.php');
}
else{
    header('location:../login.php?erro');
}

?>