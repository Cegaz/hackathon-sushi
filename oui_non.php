	<?

	$oui_non = $json->result->parameters->oui_non;

	switch ($oui_non) {
		case 'oui':
			$speech = "ok, commençons ensemble ! Avez-vous l'âme d'un aventurier ?!";
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