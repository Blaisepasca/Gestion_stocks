<?php 
// create Crud du produit
require 'BDD.php';
function insert_products($nom_produit,$descriptions,$prix,$quantite_stock){
    global $pdo;
    // Préparez la requête d'insertion
    $requete = $pdo->prepare("INSERT INTO produit (nom_produit, descriptions,prix,quantite_stock) VALUES (:nom_produit, :descriptions,:prix,:quantite_stock)");

    // Liez les valeurs aux paramètres de la requête
    $requete->bindParam(':nom_produit',$nom_produit );
    $requete->bindParam(':descriptions', $descriptions);
    $requete->bindParam(':prix', $prix);
    $requete->bindParam(':quantite_stock', $quantite_stock);
    

    // Exécutez la requête
    $requete->execute();
}
function read_product(){
    global $pdo;
    $requete = $pdo->prepare("SELECT * FROM produit");

        // Exécutez la requête
        $requete->execute();

        // Récupérez les résultats
        $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);

        return $resultats;
}

function delete_product($id){
    global $pdo;
    // Préparez la requête de suppression
    $requete = $pdo->prepare("DELETE FROM produit WHERE id_produit = :id");

    // Liez la valeur du paramètre :id
    $requete->bindParam(':id', $id);

    // Exécutez la requête
    $requete->execute();
}
        // function to update product
function Update_product($id_produit,$nom_produit,$descriptions,$prix,$quantite_stock){
    global $pdo;
    // Préparez la requête de mise à jour
    $requete = $pdo->prepare("UPDATE produit SET nom_produit = :nom_produit, descriptions = :descriptions , prix =:prix, quantite_stock =:quantite_stock WHERE id_produit = :id_produit");

    // Liez les valeurs aux paramètres de la requête
    $requete->bindParam(':nom_produit', $nom_produit);
    $requete->bindParam(':descriptions', $descriptions);
    $requete->bindParam(':prix', $prix);
    $requete->bindParam(':quantite_stock', $quantite_stock);
    $requete->bindParam(':id_produit', $id_produit);

    // Exécutez la requête
    $requete->execute();
}
             //create Crud du fournisseur
    function Insert_supplier($nom_produit,$descriptions,$prix,$quantite_stock){
        global $pdo;

    
$stmt = $pdo->prepare("INSERT INTO produit (nom_produit, descriptions,prix,quantite_stock ) VALUES (:nom_produit, :descriptions, :prix, :quantite_stock)");
$stmt->bindParam(':nom_produit', $nom_produit);
$stmt->bindParam(':descriptions', $descriptions);
$stmt->bindParam(':prix', $prix);
$stmt->bindParam(':quantite_stock ', $quantite_stock );
$stmt->bindParam(':id_produit ', $id_produit );


$stmt->execute();

    }
        //function to read supplier
function readSupplier($id_produit,$nom_produit,$descriptions,$prix,$quantite_stock){
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM produit WHERE id_produit = :id_produit");
    $stmt->bindParam(':id_produit', $id_produit);
    $stmt->execute();

}
// function to update supplier
function Update_Supplier(){
    global $pdo;
    $stmt = $pdo->prepare("UPDATE produit SET  nom_produit= :nom_produit, descriptions = :descriptions,  prix= :prix WHERE id_produit = :id_produit");
    $stmt->bindParam(':nom_produit', $newnom_produit);
    $stmt->bindParam(':descriptions', $newdescriptions);
    $stmt->bindParam(':prix', $newprix);
    $stmt->bindParam(':id_produit', $id_produit);
    
    if ($stmt->execute()) {
        return true; // Update successful
    } else {
        return false; // Update failed
    }
}



    

