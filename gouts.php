<?

	$nouveaute = $json->result->parameters->{'nouveaute'};
	$epice = $json->result->parameters->{'epice'};
	$thon = $json->result->parameters->{'thon'};
	$box = $json->result->parameters->{'box'};
	$cher = $json->result->parameters->{'cher'};


	$speech = "OK. Je crois que je commence à vous cerner... Voilà ma suggestion pour vous : ";

	$proposition = "...";

	if($box == 'oui') {
		if($thon == 'oui') {
			$proposition = 'la Sushi Box Super Mix';			
		} else {
			$proposition = 'la Sushi Box Salmon Lovers';
		}
	} else {
		if($nouveaute == 'oui') {
			$proposition = 'notre nouveauté 2017 : Sushi Black Pepper';
		} else {
			$proposition = 'notre classique : le sushi saumon';
		}
	}

	if($epice == 'oui') {
		$proposition .= ', avec un supplément Wasabi Peas';
	}

	$speech .= $proposition . ". Est-ce que cela vous correspond ?";