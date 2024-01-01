<?php
require_once("connexion.php");
$matricule=$_POST['matricule'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$formation=$_POST['formation'];
$req = "update etudiant set nom='$nom',prenom='$prenom',formation='$formation' WHERE matricule = $matricule";
$resultat=mysqli_query($conn, $req) or die(mysqli_error($conn));
header("location:list.php");
 
?> 