<?php
 
 
 class Chicken {
    function __clone (){
        echo "<p> Objet cloner </p>"
    }
    function __destruct(){
        echo "<p> Objet détruit </p>";
    }
    function __construct(){
        echo "<p> objet créer </p>";

    }

 }

 $nugget =new Chicken ();
 $nugget2 =new Chicken ();

?>