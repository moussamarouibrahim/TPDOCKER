<?php
$host = 'db';
$user = 'myuser';
$pass = 'mypassword';
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}

$base_de_donnees = "mydatabase"; // Remplacez par le nom de votre base de données
mysqli_select_db($conn, $base_de_donnees) or die('Erreur lors de la sélection de la base de données : ' . mysqli_error($conn));

$nom=$_POST['fname'];
$prenom=$_POST['lname'];
$formation= $_POST['formation'];
$req = "INSERT INTO etudiant(nom, prenom, formation) VALUES ('$nom', '$prenom', '$formation')";
mysqli_query($conn, $req) or die(mysqli_error($conn));

?>
