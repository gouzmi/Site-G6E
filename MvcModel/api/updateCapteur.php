<?php
include('../Models/connexiondb.php');

$data = json_decode(file_get_contents('php://input'), true);
$fonctionnement =  $data["fonctionnement"]? 1 : 0;
$capteurId = $data["capteurId"];
$sqlcapteur="UPDATE capteur
             SET fonctionnement = $fonctionnement
             WHERE capteur.id_capteur = $capteurId";
$reqpiece = $bdd ->query($sqlcapteur);


/*if($reqpiece) {
    echo(json_encode((object)array("success"=>true)));
} else {
}*/
//UPDATE `capteur` SET `fonctionnement`=1 WHERE `id_capteur`=2
