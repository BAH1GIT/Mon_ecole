<?php
include_once("header.php");
include_once("Db.php");

// var_dump($_POST);

if (
    isset($_POST['nom']) && !empty($_POST['nom']) &&
    isset($_POST['prenom']) && !empty($_POST['prenom']) &&
    isset($_POST['ville']) && !empty($_POST['ville'])&&
    isset($_POST['id']) && !empty($_POST['id'])
) {

    $nom = strip_tags($_POST['nom']);
    $prenom = strip_tags($_POST['prenom']);
    $ville = strip_tags($_POST['ville']);
    $id = strip_tags($_POST['id']);


    $sql = 'update etudiants set nom=:nom, prenom=:prenom, ville=:ville where id=:id';
    $query = $conn->prepare($sql);
    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
    $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $query->bindValue(':ville', $ville, PDO::PARAM_STR);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    header('location:list.php');

}

?>
