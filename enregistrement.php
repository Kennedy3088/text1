<?php
include("config.php");

if (isset($_POST['enregistre'])) {

    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $telephone = $_POST['tel'] ?? '';
    $email = $_POST['email'] ?? '';
    $nombre_annee = $_POST['nbre_anne'] ?? '';
    $mot_de_passe = $_POST['passwordm'] ?? '';
    $fonction = $_POST['fonction'] ?? '';
    $photo_name=$_FILES['photo']['name'];
    $temp=$_FILES['photo']['tmp_name'];
    $destination="uploads/" .$photo_name;
    $photo=move_uploaded_file($temp, $destination);
    



    $sql = "INSERT INTO utilisateur (nom, prenom, tel, email, passwordm, nbre_anne, fonction,photo)
            VALUES ('$nom', '$prenom', '$telephone', '$email', '$mot_de_passe', '$nombre_annee', '$fonction','$destination')";

    if (mysqli_query($conn, $sql)) {
        header("Location: tableau.php?success=1");
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <title>Formulaire d'Enregistrement</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0 text-center">Formulaire d'enregistrement</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nom" class="form-label">Nom <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nom" name="nom" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="prenom" class="form-label">Prénom <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="prenom" name="prenom" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="telephone" class="form-label">Téléphone <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="telephone" name="tel" maxlength="10" required>
                                </div>                                
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="passwordm" class="form-label">Mot de passe <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="passwordm" name="passwordm" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="nbre_anne" class="form-label">Nombre d'années <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="nbre_anne" name="nbre_anne" min="0" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="photo" class="form-label">Photo</label>
                                <input type="file" class="form-control" id="photo" name="photo" >
                            </div>

                            <div class="mb-3">
                                <label for="mot_de_passe" class="form-label">fonction <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="fonction" name="fonction" required>
                            </div>

                            <button type="submit" name="enregistre" class="btn btn-primary w-100 mt-3">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="style/js/bootstrap.bundle.min.js"></script>
</body>
</html>

