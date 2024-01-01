<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
#$user = 'MYSQL_USER';
#myuser
$user = 'myuser';
//database user password
$pass = 'mypassword';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}

$base_de_donnees = "mydatabase"; // Remplacez par le nom de votre base de données
mysqli_select_db($conn, $base_de_donnees) or die('Erreur lors de la sélection de la base de données : ' . mysqli_error($conn));
?>