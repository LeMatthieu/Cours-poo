<?php 
//creatiopn d'un objet via instanciation

class Ballon {
    public $marque;
    public $sport;

    function lancer($distance = null) {
        echo "vous avez lancé le ballon à $distance métres"; 
    }
}
// on instancie 2 type de ballons
//------------------Ballon de Foot---------------------
$ballonFoot = new Ballon();// instanciation
$ballonFoot -> marque ="Nike"; // on assigne la valeur de la props 
$ballonFoot -> sport ="Football"; // on assigne la valeur de la props 
//------------------------ballon de rugby----------------
$ballonRugby = new Ballon();
$ballonFoot -> marque ="Gilbert TM"; // on assigne la valeur de la props 
$ballonFoot -> sport ="Rugby"; // on assigne la valeur de la props 
// Actions sur les objets 
echo "Sport : $ballonFoot->sport <br> Marque : $ballonFoot->marque";
echo "<br>";
$ballonFoot->lancer();

echo "<br><br><hr>";

echo "Sport: $ballonRugby->sport <br> Marque : $ballonRugby->marque";











?>

