<?php
/**
 * Created by PhpStorm.
 * User: clement
 * Date: 13/12/2017
 * Time: 14:02
 */

$ecouter = $json->result->parameters->ecouter;

switch ($ecouter) {
    case 'oui':
        $speech = 'https://www.youtube.com/watch?v=_Jkla2DZu5g';
        break;

    case 'non':
        $speech = 'c\'est votre choix';
        break;

    default:
        $speech = "je n'ai pas compris votre demande";
        break;
}