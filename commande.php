<?php

$poisson = $json->result->parameters->{'poisson'};
$accompagnement = $json->result->parameters->{'accompagnement'};
$sauce = $json->result->parameters->{'sauce'};
$type = $json->result->parameters->{'type'};

$speech = "j'ai bien noté votre commande : vous voulez des " . $type . " de ". $poisson . " avec du " . $accompagnement . ", sauce " . $sauce . " : c'est bien cela ?";
/*
if(isset($speech)) {
include 'connect.php';
$pdo = new PDO(DSN, USER, PASS);

    $sql_up = "UPDATE commande SET 
                poisson = :poisson, 
                accompagnement = :accompagnement, 
                sauce = :sauce, 
                type = :type
                WHERE id = :id";

    $id = 1;
    $prep = $pdo->prepare($sql_up);
    $prep->execute([':id' => $id, ':poisson' => $poisson, ':accompagnement' => $accompagnement, ':sauce' => $sauce, ':type' => $type]);
}
*/