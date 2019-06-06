<?php

include 'conexao.php';

//Verificar se a tabela de pessoas está vazia
		$sqlstring = "select * from cliente";
		//Executar a instrução SQL no banco de dados
		$dados = mysqli_query($conexao,$sqlstring);
		
		//echo $dados;
		//var_dump($dados);
		//die($sqlstring);
		

		//Valida se a tabela retornou dados
		if(mysqli_affected_rows($conexao) == 0) {
			$senha = sha1(md5("123"));
			//Criar o comando para inserir os dados do Administrador na tabela de pessoas
			$sqlstring = "insert into cliente (idCliente,nome,email,celular,senha) values (NULL,";
			$sqlstring .= "'Administrador do Sistema','willian2406@live.com','(19) 98700-6423','$senha')";
			//die($sqlstring);	
			//Executar a instrução SQL no banco de dados
			$dados = mysqli_query($conexao,$sqlstring);
			// if($dados) {
			// 	$sqlstring = "select * from cliente where nome='Administrador do Sistema' and email='willian2406@live.com' and celular='(19) 98700-6423'";
			// 	$dados = mysqli_query($conexao,$sqlstring);
			// 	if(mysqli_affected_rows($conexao) > 0) {
			// 		//Recuperar os dados do registro encontrado na tabela
			// 		$registro = mysqli_fetch_array($dados);
			// 		$idpessoa = $registro["idCliente"];
					
			// 		$senha = sha1(md5("123"));
			// 		//Inserir os dados do usuário ADMIN na tabela
			// 		$sqlstring = "insert into cliente (senha) values ('$senha')";
					
			// 		//Executar a instrução SAL dentro do banco de dados
			// 		$dados = mysqli_query($conexao,$sqlstring);
			// 	}
			  
			//}
		}

?>