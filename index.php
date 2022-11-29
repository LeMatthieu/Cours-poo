<?php 
//creatiopn d'un objet via instanciation
// class User {
//     public $nom;
//     public $age;
//     function tchater($message) {
//         echo " - ".$message; 
//     }
// }
// $michel = new User(); // on instancie un objet michel
// $michel->age=49; //assigne un age
// $michel->nom="michel"; // oui l'objet michel pas la props
// echo $michel->tchater("$michel->nom: Salut les dev full stack");


class job{
    public $name;
    public $role;
    public $attackRange; 
    public $weaponType;

    function combat($adversaire1, $adversaire2){
        echo "le combat sera entre $adversaire1 et $adversaire2";
    }

    function Details(){
        echo "Vous avez choisi la classe : $this->nom. La classe à pour role $this->role, 
        une portée d'attaque de $this->attackRange et utilise des $this->weaponType pout se battre";
    }
}
    $archer = new job();
    $archer->role="damage dealer";
    $archer->nom="bowman";
    $archer->attackRange=35;
    $archer->weaponType="bow";

    $guerrier = new job();
    $guerrier->role="tank";
    $guerrier->nom="warrior";
    $guerrier->attackRange=5;
    $guerrier->weaponType="axe";

    $chaman = new job();
    $chaman->role="healer";
    $chaman->nom="Shaman";
    $chaman->attackRange=35;
    $chaman->weaponType="stick";

    //echo $archer->combat($guerrier->nom, $archer->nom);
    echo $archer->Details();
?>