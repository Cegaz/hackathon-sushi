<?php

echo 'hello sushi world';

/*$method = $_SERVER['REQUEST_METHOD'];

if($method = "POST"){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);

	$text = $json->result->parameters->text;

	switch ($text) {
		case 'coucou':
			$speech = "coucou mon ami";
			break;
		
		case 'tchao':
			$speech = "tchao mon pote";
			break;

		default:
			$speech = "je n'ai pas compris votre demande";
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
}*/