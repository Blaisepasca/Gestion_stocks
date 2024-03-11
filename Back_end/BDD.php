<?php 
$host ='localhost';
$username ='root';
$password ='';
$dbname ='gestion_stocks';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Définir le mode d'erreur PDO sur Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie !";
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}