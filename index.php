<?php

$method = $_SERVER['REQUEST_METHOD'];

if($method = "POST"){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);
	var_dump($json);

	$text = $json->result->parameters->text;

	switch ($text) {
		case 'coucou':
			$speech = "coucou mon ami";
			break;
		
		case 'tchao':
			$speech = "tchao mon pote";
			break;

		default:
			$speech = "je n'ai pas compris votre demande...";
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