<?php
include("config.php");

if (isset($_POST['enregistre'])) {

    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $telephone = $_POST['tel'] ?? '';
    $email = $_POST['email'] ?? '';
    $nombre_annee = $_POST['nbre_anne'] ?? '';
    $mot_de_passe = $_POST['passwordm'] ?? '';


    $sql = "INSERT INTO utilisateur (nom, prenom, tel, email, passwordm, nbre_anne)
            VALUES ('$nom', '$prenom', '$telephone', '$email', '$mot_de_passe', '$nombre_annee')";

    if (mysqli_query($conn, $sql)) {
        header("Location: tableau.php?success=1");
        exit;
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <form  method="post" action="" enctype="multipart/form-data">
        <div class="container mt-5">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0 text-center">Formulaire d'enregistrement</h3>
            </div>
            <div class="card-body">
            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" class="form-control" name="nom" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="prenom">Prenom:</label>
                <input type="text" id="prenom" class="form-control" name="prenom" required>
            </div>
            </div>            

        <div class="row">
        <div class="col-md-6 mb-3">
            <label for="telephone">Telephone:</label>
            <input type="text" id="tel" class="form-control" name="tel" maxlength="10" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="email">Email:</label>
            <input type="email" id="email" class="form-control" name="email" required>
        </div>
        </div>

        <div class="row">
        <div class="col-md-6 ">
            <label for="passwordm">Mot de passe</label>
            <input type="password" name="passwordm" class="form-control" id="passwordm"  required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="nbre_anne">Nombre d'années:</label>
            <input type="number" id="nbre_anne" class="form-control" name="nbre_anne" required>
        </div>
        </div>

        <div class="row">


        <div class="col-md-6 mb-3">
            <label for="photo">photo:</label>
            <input type="file" src="" alt="image" id="photo" class="form-control" name="photo" >
        </div>
        </div>
        <div class="row">
        <button type="submit" name="enregistre"class="btn btn-primary w-100 mt-3">Enregistrer</button>
        </div>
        </div>
    </form>
</body>
</html>

