<?php
 class Verre {

    public $nom;
    public $materiaux;
    public $contenu;

function __construct($nom, $materiaux, $contenu){
    
    $this->nom=$nom;
    $this->materiaux=$materiaux;
    $this->contenu = $contenu;

}
 }
$gobletEau = new Verre("Gobelet", "plastique", "eau");


?>