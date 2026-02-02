<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<?php
session_start();
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h4 class="fw-bold mb-0">
                        Bienvenue <?php echo $_SESSION['nom'] . " " . $_SESSION['prenom']; ?>
                    </h4>
                </div>
                <div class="card-body px-4 py-4">
                    <h5 class="mb-4 text-secondary">Détails de vos informations</h5>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Nom :</strong> <?php echo $_SESSION['nom']; ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Prénom :</strong> <?php echo $_SESSION['prenom']; ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Téléphone :</strong> <?php echo $_SESSION['tel']; ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Email :</strong> <?php echo $_SESSION['email']; ?>
                        </li>
                        <li class="list-group-item">
                            <strong>photo :</strong><img src="<?php echo $_SESSION['photo']; ?>" alt="kl" width="80" height="80" style="border: radius 50px;">
                        </li>                        
                    </ul>
                </div>
                <div class="card-footer text-center bg-white">
                    <a href="deconnection.php" class="btn btn-danger px-4">Se deconnecter</a>
                </div>

            </div>

        </div>
    </div>
</div>
</body>
</html>
