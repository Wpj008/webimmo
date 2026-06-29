<?php
require_once "../functions/database.php";

function insertProperty($reference,$title,$description,$price,$transaction,$type,$surface,$terrain,$pieces,$chambres,$sdb, $annee, $floor, $adresse,$ville,$status,$featured,$user){

$pdo = getPDO();
try{
    $queryInsert = $pdo->prepare("INSERT INTO properties(reference_code,title_property,description_property,price_property,transaction_type,property_type,surface,land_surface, nbr_rooms, nbr_bedrooms, nbr_bathrooms, construction_year, floor_number, address_property, city,property_status,featured,user_id,created_at_property,updated_at_property) VALUES(:reference,:title,:description,:price,:transaction,:type,:surface,:terrain,:pieces,:chambres,:sdb,:annee, :floor,:adresse,:ville,:status,:featured,:user,NOW(), NOW())");

  

    $queryInsert->bindParam(":reference", $reference);
    $queryInsert->bindParam(":title", $title);
    $queryInsert->bindParam(":description", $description);
    $queryInsert->bindParam(":price", $price);
    $queryInsert->bindParam(":transaction", $transaction);
    $queryInsert->bindParam(":type", $type);
    $queryInsert->bindParam(":surface", $surface);
    $queryInsert->bindParam(":terrain", $terrain);
    $queryInsert->bindParam(":pieces", $pieces);
    $queryInsert->bindParam(":chambres", $chambres);
    $queryInsert->bindParam(":sdb", $sdb);
    $queryInsert->bindParam(":annee", $annee);
    $queryInsert->bindParam(":floor", $floor);
    $queryInsert->bindParam(":adresse", $adresse);
    $queryInsert->bindParam(":ville", $ville);
    $queryInsert->bindParam(":status", $status);
    $queryInsert->bindParam(":featured", $featured);
    $queryInsert->bindParam(":user", $user);

    $queryInsert->execute();

    return $pdo->lastInsertId();

    } catch(PDOException $e){
    echo"ECHEC D'INSERTION PROPERTY !". $e->getMessage();
    
    }
}






function insertImage($propertyId, $filename, $cover){

    try{

    $queryInsertImage = getPDO()->prepare("INSERT INTO property_images(property_id,filename_image,is_cover,created_at_image, updated_at_image)VALUES( :property, :image, :cover,NOW(), NOW())");

    $queryInsertImage->bindParam(":property", $propertyId);
    $queryInsertImage->bindParam(":image", $filename);
    $queryInsertImage->bindParam(":cover", $cover);

    return $queryInsertImage->execute();
    } catch(PDOException $e){
        echo"ECHEC D'INSERTION IMAGE !". $e->getMessage();
        
        }

}



function insertFeature($propertyId, $featureId)
{
  
    try{

    $queryInsertFeature = getPDO()->prepare("INSERT INTO property_feature(property_id,feature_id)VALUES(:property, :feature)");

    $queryInsertFeature->bindParam(":property", $propertyId);
    $queryInsertFeature->bindParam(":feature", $featureId);

    return $queryInsertFeature->execute();

    } catch(PDOException $e){
        echo"ECHEC D'INSERTION Feature !". $e->getMessage();
        
        }

}


function getProperty(){

    try{

    $querySelectProperty = getPDO()->prepare("SELECT * FROM properties INNER JOIN property_images ON property_images.property_id = properties.id_property AND property_images.is_cover = 1 INNER JOIN statut_property ON statut_property.id_statut_property = properties.property_status");
  // $querySelectProperty = getPDO()->prepare(" SELECT * FROM properties");

    $querySelectProperty->execute();

    $results = $querySelectProperty->fetchAll();

    return $results;




    }catch(PDOException $e){

            echo "ERREUR LORS DE LA RECUPERATION " .$e->getMessage();
    }


}


function getPropertyById($id_property){

    try{

    $querySelectProperty = getPDO()->prepare("SELECT * FROM properties INNER JOIN property_images ON property_images.property_id = properties.id_property AND property_images.is_cover = 1 INNER JOIN statut_property ON statut_property.id_statut_property = properties.property_status INNER JOIN property_feature ON property_feature.property_id = properties.id_property INNER JOIN property_features ON property_feature.feature_id = property_features.id_feature_property WHERE id_property = $id_property");


    $querySelectProperty->execute();

    $result = $querySelectProperty->fetch();

    return $result;




    }catch(PDOException $e){

            echo "ERREUR LORS DE LA RECUPERATION " .$e->getMessage();
    }


}


function getFeatureExist($id_property){

    $querySelect = getPDO()->prepare("SELECT * FROM property_features INNER JOIN property_feature ON property_feature.feature_id = property_features.id_feature_property WHERE property_id = :id");

    $querySelect->bindParam(":id", $id_property, PDO::PARAM_INT);
    
    $querySelect->execute();
    
    $result = $querySelect->fetchAll(PDO::FETCH_COLUMN);
    
    return $result;
    
    }





function getFeature(){

    $querySelect = getPDO()->prepare("SELECT * FROM property_features");

    $querySelect->execute();

    $result = $querySelect->fetchAll();

    return $result;

}

function getStatus(){
    
$querySelect = getPDO()->prepare("SELECT * FROM statut_property");

$querySelect->execute();

$result = $querySelect->fetchAll();

return $result;

}


function getImage($id_property){
    
$querySelect = getPDO()->prepare("SELECT * FROM property_images WHERE property_id = :id");

$querySelect->bindParam(":id", $id_property);

$querySelect->execute();

$result = $querySelect->fetchAll();

return $result;

}

