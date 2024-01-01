<?php
$host = 'db';
$user = 'myuser';
$pass = 'mypassword';
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$base_de_donnees = "mydatabase"; 
mysqli_select_db($conn, $base_de_donnees) or die('Erreur lors de la sélection de la base de données : ' . mysqli_error($conn));
?>