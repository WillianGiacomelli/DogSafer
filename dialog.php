<?php
	//permitir acesso de qq site
	header('Access-Control-Allow-Origin: *');

	//iniciar a sessão
	session_start();

	//se existir a sessao do id
	if(isset($_SESSION['id']))
	{
		$sessionid = $_SESSION['id'];
	}
	else
	{
		$sessionid = uniqid();
		$_SESSION['id'] = $sessionid;
	}
	//echo $sessionid;
	//receber a mensagem do usuário
	//http://localhost/inicio-layout/dialog.php?m=Oi
	$query = $_GET['m'];
	if($query !=""){
		
	

	//organizar dados para faze o cURL
	$postData = array('query' => array($query),
					  'lang' => "pt",
					  'sessionId' => $sessionid);
	//transformar os dados em Json
	$jsonData = json_encode($postData);
	//echo $jsonData;
	//define a versão do bot
	$v = date('Ymd');
	//url da API e inicia do cURL
	$ch = curl_init("https://api.api.ai/v1/query?v=".$v);
	//configurações do cURL
	//definir o método de envio como post
	curl_setopt($ch, CURLOPT_POST, 1);

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	//definir o que será enviado
	curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
	//injetar o token de acesso
	curl_setopt($ch, CURLOPT_HTTPHEADER, 
				array('Content-Type: application/json',
					'Authorization: Bearer 1bb0cce56e1345c2a6963293a083b010'));
	//definir que o retorno string
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	//obtem os dados de volta em JSON
	$result = curl_exec($ch);

	if($errno = curl_errno($ch)) {
    $error_message = curl_strerror($errno);
    echo "cURL error ({$errno}):\n {$error_message}";
	}


	//echo $result;
	//transformar o json em array
	$result = json_decode($result);
	//capturar a mensagem de resposta
	echo $result -> result -> fulfillment -> speech;
	//encerro o curl
	curl_close($ch);


}



?>