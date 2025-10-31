<h1>etudiant Supprimer</h1>



<?php
include_once("header.php");
include_once("Db.php");

// var_dump($_POST);

if (
    isset($_POST['id']) && !empty($_POST['id'])
) {

 
    $sql = 'delete from etudiants where id=:id';
    $query = $conn->prepare($sql);
    $query->execute();
    header('location:index.php');

}
