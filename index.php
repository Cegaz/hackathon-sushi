<?php

$method = $_SERVER['REQUEST_METHOD'];

if($method = "POST"){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);

	if(isset($json->result->parameters->oui_non)) {
		include('oui_non.php');
	}

	if(isset($json->result->parameters->{'epice'})) {
		include('gouts.php');
	}

	if(isset($json->result->parameters->ecouter)) {
		include('ecouter.php');
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
