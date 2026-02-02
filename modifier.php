<?php
include("config.php");

$id = $_GET['id'];
$sql = "SELECT * FROM utilisateur WHERE id_user=$id";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

if(isset($_POST['modifier']))
{
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];
    $passwordm=$_POST['passwordm'];
    $nbre_anne=$_POST['nbre_anne'];
    $fonction=$_POST['fonction'];



    $sql = "UPDATE utilisateur SET nom='$nom', prenom='$prenom', tel='$tel', 
    email='$email', passwordm='$passwordm', nbre_anne='$nbre_anne', fonction='$fonction' WHERE id_user=$id";
    mysqli_query($conn, $sql);
    header("location:tableau.php");
    exit;

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
                <input type="text" id="nom" class="form-control" name="nom" value="<?= $user['nom']; ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="prenom">Prenom:</label>
                <input type="text" id="prenom" class="form-control" name="prenom" value="<?= $user['prenom']; ?>" required>
            </div>
            </div>            

        <div class="row">
        <div class="col-md-6 mb-3">
            <label for="telephone">Telephone:</label>
            <input type="text" id="tel" class="form-control" name="tel" value="<?= $user['tel']; ?>" maxlength="10" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="email">Email:</label>
            <input type="email" id="email" class="form-control" name="email" value="<?= $user['email']; ?>"  required>
        </div>
        </div>

        <div class="row">
        <div class="col-md-6 ">
            <label for="passwordm">Mot de passe</label>
            <input type="password" name="passwordm" class="form-control" value="<?= $user['passwordm']; ?>" id="passwordm"  required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="nbre_anne">Nombre d'années:</label>
            <input type="number" id="nbre_anne" class="form-control" name="nbre_anne" value="<?= $user['nbre_anne']; ?>" required>
        </div>
        </div>

        <div class="row">


        <div class="col-md-6 mb-3">
            <label for="photo">photo:</label>
            <input type="file" src="" alt="image" id="photo" class="form-control" name="photo" value="<?= $user['photo']; ?>" >
        </div>

        <div class="col-md-6 mb-3">
            <label for="photo">fonction:</label>
            <input type="text" src="" alt="image" id="fonction" class="form-control" value="<?= $user['fonction']; ?>" name="fonction" >
        </div>
        </div>
        <div class="row">
        <button type="submit" name="modifier" class="btn btn-primary w-100 mt-3">Modifier</button>
        </div>
        </div>
    </form>
</body>
</html>
