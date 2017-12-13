<?php
include 'connect.php';
$pdo = new PDO(DSN, USER, PASS);

$poisson = $json->result->parameters->{'poisson'};
$accompagnement = $json->result->parameters->{'accompagnement'};
$sauce = $json->result->parameters->{'sauce'};
$type = $json->result->parameters->{'type'};


$sql_up = "UPDATE commande SET 
poisson = :poisson, 
accompagnement = :accompagnement, 
sauce = :sauce, 
type = :type
WHERE id = :id";
$prep = $pdo->prepare($sql_up);
$prep->execute([':id'=>1,':poisson'=> $poisson, ':accompagnement'=>$accompagnement, ':sauce'=>$sauce, ':type'=>$type]);

$speech = "j'ai bien noté votre commande : vous voulez des " . $type . " de ". $poisson . " avec du " . $accompagnement . ", sauce " . $sauce . " : c'est bien cela ?";
