<?php

require_once "../functions/database.php";
require_once "../functions/users.php";


if($_SERVER["REQUEST_METHOD"] === "POST"){

    if(isset($_POST['mail']) && isset($_POST['mdp']) ){

        if(!empty($_POST['mail']) && !empty($_POST['mdp'])){
             

    $email = $_POST["mail"];
    $password = $_POST["mdp"];

    var_dump($email, $password);

       connexion($email, $password);
       
      
       
        }else{
            echo "Veuillez remplir tous les champs.";
        }
    }
    else{
       header("Location: /new-webimmo/"); 
    }

}
else{
    header("Location: /new-webimmo/");
}