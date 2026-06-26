<?php
require_once "../functions/database.php";

function register($firstName, $lastName, $email, $role, $phone){

        $password = "123456";

        $hash = password_hash($password,PASSWORD_DEFAULT);

    try{

    $queryInsert = getPDO()->prepare("INSERT INTO users(first_name, last_name, email, password, phone, role) VALUES(:first_name, :last_name,:email,:password,:phone,:role)");
    $queryInsert->bindParam(":first_name", $firstName);
    $queryInsert->bindParam(":last_name", $lastName);
    $queryInsert->bindParam(":email", $email);
    $queryInsert->bindParam(":password", $hash);
    $queryInsert->bindParam(":phone",$phone);
    $queryInsert->bindParam(":role", $role);

   $result = $queryInsert->execute();
   header("Location: /new-webimmo/partials/dashboard_admin.php");

    //var_dump($result);


}catch(PDOException $e){

    echo "ERREUR LORS DE L'INSCRIPTION" .$e->getMessage();
}

}

function connexion($email, $password){

    $querySelect =getPDO()->prepare("SELECT * FROM users WHERE email = :email");
    $querySelect->bindParam(":email",$email);
    $querySelect->execute();

    $result = $querySelect->fetch(PDO::FETCH_ASSOC);


    if ($result) {

    if($password == "123456"){

    $_SESSION["user_id"] = $result["id_user"];
    header("Location: ../pages/update_password.php");

    exit;
    }else{

        
       $isSame = password_verify($password,$result["password"]);

       
        if($isSame){
      
            echo "Mot de passe correct";
            session_start();
            $_SESSION["first_name"] = $result["first_name"];
            $_SESSION["last_name"] = $result["last_name"];
            $_SESSION["email"] = $result["email"];
            $_SESSION["role"] = $result["role"];
            $_SESSION["user_id"] = $result["id_user"];

                   

            if($result["role"] === "Admin"){
                header("Location: /new-webimmo/partials/dashboard_admin.php");
                exit();
            } else if ($result["role"] === "Agent") {
                header("Location: /new-webimmo/partials/dashboard_agent.php");
                exit();
            }
        }
      } 
    } else {
        echo "Aucun utilisateur trouvé avec cet e-mail.";
    }

}
/*
//function  de verification de la connexion user
function checkLogin(){
    // Vérifier si l'utilisateur est connecté
    if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
         header('Location: ../index.php');  // Rediriger vers la page de connexion
      exit;  // Arrêter l'exécution des scripts suivants
    }
}*/


?>