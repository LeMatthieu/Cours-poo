<?php 

class user{
    public $name;
    public $age;
    public $avatar; 
    
    function tchater ($message) {
        echo " <p> - $this->avatar | $this->name : $message <p> <br>";
    }

    function choixAvatar($valeur){
        $avatartab=['😊','😂','🤣','😒'];
        $this->avatar=$avatartab[$valeur];
    }

    function vieillir($agevieilli){
        $this->age = $this->age + $agevieilli;
    }
}

$michel = new User();
$michel -> age = 54;
$michel -> name = "Michel";
$michel ->choixAvatar(2);

$David = new User();
$David-> age = 54;
$David -> name = "David";
$David->choixAvatar(0);

$Zak = new User();
$Zak -> age = 54;
$Zak -> name = "Zak";
$Zak ->choixAvatar(1);

$Samy = new User();
$Samy  -> age = 54;
$Samy  -> name = "Samy";
$Samy  ->choixAvatar(3);

var_dump($Samy);
var_dump($David);

echo "<h1> TCHAT </h1>";

$michel->tchater("Salut la compagnie !");

$David->tchater("Shalom sha va!");
$Zak->tchater("Salam, sa va, David Bordus");
$Samy->tchater("Qu'est-ce que je fou la moi !");

echo $Zak->age . " ans <br>";
$Zak->vieillir(10);
$Zak->vieillir(200);
$Zak->vieillir(200);

?>