<?php

$method = $_SERVER['REQUEST_METHOD'];

if($method = "POST"){
	header('Content-Type: application/json');
	ob_start();

	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody, true);

	$action = $json["result"]["action"];
	$parameters = $json["result"]["parameters"];

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
	ob_end_clean();
	echo json_encode($response);
}
else {
	echo "Méthode non autorisée.";
}