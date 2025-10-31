<?php
if (isset($_GET['id']) & !empty($_GET['id'])) {
    include_once("Db.php");
    $id = strip_tags($_GET['id']);
    $sql = 'select * from etudiants where id=:id';
    $query = $conn->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $etudiant = $query->fetch();
} else {
    echo 'id inexistant !';
}


?>

<link rel="stylesheet" href="form.css">
<div class="container">
    <h1 class="mb-3 mt-3 text-center">Page Editer</h1>

    <div class="form_area">
        <p class="title">S'inscrire</p>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?= $etudiant['id']; ?>">
            <div class="form_group">
                <label class="sub_title" for="name">Nom</label>
                <input placeholder="Entrer votre nom" name="nom" class="form_style" type="text"
                    value="<?= $etudiant['nom']; ?>">
            </div>
            <div class="form_group">
                <label class="sub_title" for="prenom">Prenom</label>
                <input placeholder="Entrer votre prenom" name="prenom" class="form_style" type="text"
                    value="<?= $etudiant['prenom']; ?>">
            </div>

            <div class="form_group">
                <label class="sub_title" for="ville">Ville</label>
                <input placeholder="Entrer votre ville" name="ville" class="form_style" type="text"
                    value="<?= $etudiant['ville']; ?>">
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