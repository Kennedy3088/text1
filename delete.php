<?php
include("config.php");
{
    $id=$_GET['id'];
    $sql="DELETE FROM utilisateur WHERE id_user=$id";
    mysqli_query($conn, $sql);
     header("location:tableau.php");
 exit;
}
?>