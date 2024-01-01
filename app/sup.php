<?php
require_once("connexion.php");
$matricule = $_GET['matricule'];
$req = "DELETE FROM etudiant WHERE matricule = $matricule";
mysqli_query($conn, $req) or die(mysqli_error($conn));
header("location:list.php");
?>



