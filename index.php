<?php

$method = $_SERVER['REQUEST_METHOD'];

if($method = "POST"){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);

	if(isset($json->result->parameters->poisson)){
		($commande['poisson'] = $json->result->parameters->poisson;
		$commande['accompagnement'] = $json->result->parameters->accompagnement;
		$commande['sauce'] = $json->result->parameters->sauce;
		$commande['type'] = $json->result->parameters->type;

//		$speech = "j'ai bien noté votre commande : vous voulez des " $commande['type'] . " de ". $commande['poisson'] . " avec du " . $commande['accompagnement'] . ", sauce " . $commande['sauce'] . " : c'est bien cela ?";
		$speech = 'ok commande';
	}

	if(isset($json->result->parameters->oui_non)){
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
		$speech = "oui non ok";
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