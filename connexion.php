<?php
include("config.php");
session_start();
if(isset($_POST['connect']))
{
    $email=$_POST['email'] ?? '';
    $motdepasse=$_POST['passwordm'] ?? '';
    $sql="SELECT * FROM utilisateur WHERE email='$email' AND passwordm='$motdepasse'";
    $result=mysqli_query($conn, $sql);
    $user=mysqli_fetch_assoc($result);

    //$data=mysqli_fetch_assoc($result);
    //var_dump($result);
        if(mysqli_num_rows($result)==1)
            {
                $_SESSION['id']=$user['id'] ?? '';
                $_SESSION['nom']=$user['nom'] ?? '';
                $_SESSION['prenom']=$user['prenom'] ?? '';
                $_SESSION['tel']=$user['tel'] ?? '';
                $_SESSION['email']=$user['email'] ?? '';
                $_SESSION['nombreannee']=$user['nbre_anne'] ?? '';
                $_SESSION['motdepasse']=$user['passwordm'] ?? '';
                $_SESSION['fonction']=$user['fonction'] ?? '';
                $_SESSION['photo']=$user['photo'] ??'';
                //$data=mysqli_fetch_assoc($result);

                if($_SESSION ['fonction'] == 'admin'){
                    header("location: tableau.php");
                }else
                header("location: user.php");
            }
            else{
                echo"Mot de pass ou email incorrect";
            }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <title>Connexion</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg p-4">
                    <h4 style="color: rgb(0, 110, 255);5"><center>Connexion</center></h4>
                    <form action="" method="POST">
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div><br>

                        <div>
                            <label>Mot de passe</label>
                            <input type="password" name="passwordm" class="form-control" required>
                        </div><br>
                        <button type="submit" name="connect" class="btn btn-primary w-100 mt-3">Se Connecter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
