<?php 
// create Crud du produit
require 'BDD.php';
function insert_products($nom_product,$descriptions,$prix,$quantite_stock){
    global $pdo;
    // Préparez la requête d'insertion
    $requete = $pdo->prepare("INSERT INTO produit (nom_product, descriptions,prix,quantite_stock) VALUES (:nom_product, :descriptions,:prix,:quantite_stock)");

    // Liez les valeurs aux paramètres de la requête
    $requete->bindParam(':nom_product',$nom_product );
    $requete->bindParam(':descriptions', $descriptions);
    $requete->bindParam(':prix', $prix);
    $requete->bindParam(':quantite_stock', $quantite_stock);

    // Exécutez la requête
    $requete->execute();
}