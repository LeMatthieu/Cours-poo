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
    public $Attackrange; 

    function combat($adversaire1, $adversaire2){
        echo "le combat sera entre $adversaire1 et $adversaire2";
    }
}
    $archer = new job();
    $archer->role="damage dealer";
    $archer->nom="bowman";

    $guerrier = new job();
    $guerrier->role="tank";
    $guerrier->nom="warrior";

    echo $archer->combat($guerrier->nom, $archer->nom);
?>