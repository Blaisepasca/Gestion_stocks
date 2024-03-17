<?php
require 'BDD.php';
$name =$_POST['name'];
$quantity =$_POST['quantity'];
$designation=$_POST['designation'];
$price=$_POST['price'];


$requete = $pdo->prepare("INSERT INTO produit (nom_produit, descriptions,prix,quantite_stock) VALUES (:nom_produit, :descriptions,:prix,:quantite_stock)");

// Liez les valeurs aux paramètres de la requête
$requete->bindParam(':nom_produit',$name );
$requete->bindParam(':quantite_stock', $quantity);
$requete->bindParam(':descriptions', $designation);
$requete->bindParam(':prix', $price);


// Exécutez la requête
$requete->execute();


?>