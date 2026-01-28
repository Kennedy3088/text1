<?php
include("config.php");
$sql = "SELECT * FROM utilisateur";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <title>Tableau Bootstrap simple</title>
</head>
<body class="p-4">

    <h4 class="text-center mb-3">Liste des personnes</h4>

    <table class="table table-bordered table-striped table-hover text-center">
        <thead class="table-secondary">
            <tr>
                <th>nom</th>
                <th>Prenom</th>
                <th>tel</th>
                <th>email</th>
                <th>passwordm</th>
                <th>nbre_anne</th>
                <th><center>action</center></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $p) { ?>
                <tr>
                    <td><?= $p['nom']; ?></td>
                    <td><?= $p['prenom']; ?></td>
                    <td><?= $p['tel']; ?></td>
                    <td><?= $p['email']; ?></td>
                    <td><?= $p['passwordm']; ?></td>
                    <td><?= $p['nbre_anne']; ?></td>
                    <td>
                        <div style="text-align: center;">
                            <a href="modifier.php?id=<?= $p['id_user']; ?>" class="btn btn-primary">Modifier</a>
                            <a href="" class="btn btn-danger">Supprimer</a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
