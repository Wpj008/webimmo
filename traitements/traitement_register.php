<?php
session_start(); 
require_once "../functions/database.php";
require_once "../functions/users.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){

    if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['role']) && isset($_POST['phone'])){

    if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['role']) && !empty($_POST['phone'])){

        $firstName = htmlspecialchars($_POST['prenom']);
        $lastName = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $rule = htmlspecialchars($_POST['role']);
        $phone = htmlspecialchars($_POST['phone']);


        register($firstName, $lastName, $email, $rule, $phone); 
     
        }
    }
    else{
       header("Location: /webimmo/"); 
    }

}
else{
    header("Location: /webimmo/");
}

?>