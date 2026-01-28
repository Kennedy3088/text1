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
                        <h3 class="mb-0 text-center">Informations Personnelles</h3>
                    </div>
                    <div class="card-body">
                        <form action="traitement.php" method="POST" enctype="multipart/form-data">
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
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="telephone" class="form-label">Téléphone <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="telephone" name="telephone" maxlength="10" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="daten" class="form-label">Date de Naissance <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="daten" name="daten" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="nombreanne" class="form-label">Nombre d'années <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="nombreanne" name="nombreanne" min="0" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="photo" class="form-label">Photo <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
                            </div>

                            <div class="mb-3">
                                <label for="mot_de_passe" class="form-label">Mot de passe <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 mt-3">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="style/js/bootstrap.bundle.min.js"></script>
</body>
</html>