<?php
include('../Models/connexiondb.php');

$data = json_decode(file_get_contents('php://input'), true);
$fonctionnement =  $data["fonctionnement"]? 1 : 0;
$actionneurId = $data["actionneurId"];
$sqlactionneur="UPDATE actionneur
             SET fonctionnement = $fonctionnement
             WHERE actionneur.id_actionneur = $actionneurId";
$reqpiece = $bdd ->query($sqlactionneur);


/*if($reqpiece) {
    echo(json_encode((object)array("success"=>true)));
} else {
}*/
//UPDATE `capteur` SET `fonctionnement`=1 WHERE `id_capteur`=2
