<?php
include_once("header.php");
include_once("Db.php");

// var_dump($_POST);

if (
    isset($_POST['nom']) && !empty($_POST['nom']) &&
    isset($_POST['prenom']) && !empty($_POST['prenom']) &&
    isset($_POST['ville']) && !empty($_POST['ville'])
) {

    $nom = strip_tags($_POST['nom']);
    $prenom = strip_tags($_POST['prenom']);
    $ville = strip_tags($_POST['ville']);

    $sql = 'insert into etudiants (nom,prenom,ville) values(:nom, :prenom, :ville)';
    $query = $conn->prepare($sql);
    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
    $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $query->bindValue(':ville', $ville, PDO::PARAM_STR);
    $query->execute();
    header('location:index.php');

}else {
    echo'veillez renseigner les champs !';
}

?>



<link rel="stylesheet" href="form.css">
<div class="container">
    <h1 class="mb-3 mt-3 text-center">Page Editer</h1>

    <div class="form_area">
        <p class="title">S'inscrire</p>
        <form action="" method="post">
            <div class="form_group">
                <label class="sub_title" for="name">Nom</label>
                <input placeholder="Entrer votre nom" name="nom" class="form_style" type="text">
            </div>
            <div class="form_group">
                <label class="sub_title" for="prenom">Prenom</label>
                <input placeholder="Entrer votre prenom" name="prenom" class="form_style" type="text">
            </div>

            <div class="form_group">
                <label class="sub_title" for="ville">Ville</label>
                <input placeholder="Entrer votre ville" name="ville" class="form_style" type="text">
            </div>
            <div>
                <p class="text-decoration-none d-flex justify-content-center">
                    <button type="submit" class="bg  mx-1 btn1 border-0">Submit</button>
                    <a href="index.php" class="bg2 mx-1 btn1 text-decoration-none ">Retour</a>
                </p>

                <p class="text-decoration-none">Avez vous un compte? <a class="link" class="text-decoration-none"
                        href="#">Connection!</a></p>
            </div>

        </form>

    </div>
</div>