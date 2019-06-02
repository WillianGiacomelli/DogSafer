<?php 

$servidor="localhost";
$user="root";
$pass="";
$banco="dogsafer";

$conexao = mysqli_connect($servidor,$user,$pass,$banco);

  if(!$conexao){
  	echo "Erro na conexao com o banco";
  }
  else{  
  //Abrir o banco de dados
      mysqli_select_db($conexao,$banco);
    }

    

?>