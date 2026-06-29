<?php

session_start();

require "../functions/properties.php";


if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['enregistrement']) ){

      

            $reference = htmlspecialchars($_POST["ref"]);
            $title = htmlspecialchars($_POST["titre"]);
            $description = htmlspecialchars($_POST["description"]);
            $price = htmlspecialchars($_POST["prix"]);
            $transaction = htmlspecialchars($_POST["transaction"]);
            $type = htmlspecialchars($_POST["type"]);
            $surface = htmlspecialchars($_POST["surface"]);
            $terrain = htmlspecialchars($_POST["terrain"]);
            $pieces = htmlspecialchars($_POST["pieces"]);
            $chambres = htmlspecialchars($_POST["chambres"]);
            $sdb = htmlspecialchars($_POST["sdb"]);
            $annee = htmlspecialchars($_POST["annee"]);
            $adresse = htmlspecialchars($_POST["adresse"]);
            $floor = htmlspecialchars($_POST['floor']);
            $ville = htmlspecialchars($_POST["ville"]);
            $status = htmlspecialchars($_POST["statut"]);
            $featured = isset($_POST["a_la_une"]) ? 1 : 0;
            $user = $_SESSION["user_id"];

       

            $propertyId = insertProperty($reference,$title,$description,$price,$transaction,$type,$surface,$terrain,$pieces,$chambres,$sdb, $annee, $floor, $adresse,$ville,$status,$featured,$user);


            if(!$propertyId){
                
                die("Erreur insertion propriété");
            }

        if(!empty($_FILES["photos"]["name"][0]))
        {

            foreach($_FILES["photos"]["tmp_name"] as $key=>$tmp)
            {

                $filename = uniqid()."_".$_FILES["photos"]["name"][$key];

                move_uploaded_file(
                    $tmp,
                    "../assets/img/".$filename
                );

                $cover = ($key==0)?1:0;

                insertImage(
                   
                    $propertyId,
                    $filename,
                    $cover
                );

            }

        }

        if(isset($_POST["equip"]))
        {

            foreach($_POST["equip"] as $feature)
            {

                insertFeature(
                  
                    $propertyId,
                    $feature
                );

            }

        }


        header("Location: ../pages/properties.php");

}
