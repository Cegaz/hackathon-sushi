<?

	$commande['poisson'] = $json->result->parameters->poisson;
	$commande['accompagnement'] = $json->result->parameters->accompagnement;
	$commande['sauce'] = $json->result->parameters->sauce;
	$commande['type'] = $json->result->parameters->type;

	$speech = "j'ai bien noté votre commande : vous voulez des " $commande['type'] . " de ". $commande['poisson'] . " avec du " . $commande['accompagnement'] . ", sauce " . $commande['sauce'] . " : c'est bien cela ?";