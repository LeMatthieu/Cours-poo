<?php


 class Pomme {
   public $nom;
 }

 class Poire {
    public $nom;
 }

$countPoire=0;
$countpomme=0;

 $pom1 = new Pomme("Pomme");
 $pom2 = new Pomme("Pomme");
 $pom3 = new Pomme("Pomme");
 $pom4 = new Pomme("Pomme");
 $pom5 = new Pomme("Pomme");

 $poire1 = new Poire("poire");
 $poire2 = new Poire("poire");
 $poire3 = new Poire("poire");
 $poire4 = new Poire("poire");

 $panier = [$pom1, $pom2, $pom3, $pom4,  $pom5, $poire1, $poire2, $poire3, $poire4 ];

 for ($i=0; $i < count($panier); $i++) {
    if($panier[$i] instanceof Pomme){
        $countpomme+=1;
    }
    elseif($panier[$i] instanceof Poire){
        $countPoire+=1;
    }
 }
    
 echo "Votre panier contient " .count($panier)." articles  $countpomme pommes et $countPoire poires";
 ?>