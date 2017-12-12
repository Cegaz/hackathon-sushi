<?php

$method = $_SERVER['REQUEST_METHOD'];

if($method = "POST"){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);

	$text = $json->result->parameters->text;

	switch ($text) {
		case 'chocolat':
			$speech = "j'adore le chocolat !!";
			break;
		
		case 'café':
			$speech = "j'aime pas le café...";
			break;

		default:
			$speech = "je n'ai pas compris votre demande :(";
			break;
	}

	$response = new \stdClass();
	$response->speech = "";
	$response->displayText = "";
	$response->source = "webhook";
	echo json_encode($response);
}
else {
	echo "Méthode non autorisée.";
}