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

	$oui_non = $json->result->parameters->oui_non;

	switch ($oui_non) {
		case 'oui':
			$speech = 'ok, commençons ensemble';
			break;

		case 'non':
			$speech = 'c\'est noté, une prochaine fois peut-être';
			break;

		case 'peut-etre':
			$speech = "ok, je vous laisse réfléchir";
			break;
		
		default:
			$speech = "je n'ai pas compris votre demande";
			break;
	}

	$response = new \stdClass();
	$response->speech = $speech;
	$response->displayText = $speech;
	$response->source = "webhook";
	echo json_encode($response);
}
else {
	echo "Méthode non autorisée.";
}