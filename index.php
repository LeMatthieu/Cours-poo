<?php 
//creatiopn d'un objet via instanciation
 
$ballonFoot = new stdClass; 
$ballonFoot->type="Football";
$ballonFoot->marque="Nike";
$ballonFoot->taille=5;
$ballonFoot->status="crevé";

//echo("hey le ballon de " . $ballonFoot->type . ". " . $ballonFoot->marque . " est " . $ballonFoot->status . ", Ismael");

echo " - hey le ballon de $ballonFoot->type, $ballonFoot->marque 
est $ballonFoot->status . ";

if(!property_exists($ballonFoot, 'prix')){
    $ballonFoot-> prix = 5;
    echo " le ballon coute $ballonFoot->prix";
}


?>