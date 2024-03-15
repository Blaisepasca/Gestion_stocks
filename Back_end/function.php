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
// function for reading Product
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
    function Insert_supplier($id_fournisseur, $nom_fournisseur, $adresse, $telephone){
        global $pdo;

    
$stmt = $pdo->prepare("INSERT INTO produit (nom_fournisseur, adresse,telephone ) VALUES (:nom_fournisseur, :adresse,:telephone)");
$stmt->bindParam(':nom_fournisseur', $nom_fournisseur);
$stmt->bindParam(':adresse', $adresse);
$stmt->bindParam(':telephone', $telephone);
$stmt->bindParam(':id_fournisseur ', $id_fournisseur);


$stmt->execute();

    }
        //function to read supplier
function readSupplier($id_fournisseur){
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM produit WHERE id_produit = :id_produit");
    $stmt->bindParam(':id_fournisseur', $id_fournisseur);
    $stmt->execute();

}
// function to update supplier
function Update_Supplier($id_fournisseur, $nom_fournisseur, $adresse, $telephone){
    global $pdo;
    $stmt = $pdo->prepare("UPDATE produit SET  nom_fournisseur= :nom_fournisseur, adresse = :adresse,  telephone= :telephone WHERE id_fournisseur = :id_fournisseur");
    $stmt->bindParam(':nom_fournisseur', $newnom_fournisseur);
    $stmt->bindParam(':adresse', $newadresse);
    $stmt->bindParam(':telephone', $newtelephone);
    $stmt->bindParam(':id_fournisseur', $id_fournisseur);
    
    if ($stmt->execute()) {
        return true; // Update successful
    } else {
        return false; // Update failed
    }
}
// function for delete supplier
function deleteSupplier($id_fournisseur) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM produit WHERE  id_produit= :id_produit");
    $stmt->bindParam(':id_produit', $id_fournisseur);

    if ($stmt->execute()) {
        return true; // Deletion successful
    } else {
        return false; // Deletion failed
    }
}
// function for creating command
function createCommand($id_produit, $id_fournisseur,$date_commande,$quantite_commandee) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO produit (id_fournisseur , id_produit, date_commande,quantite_commandee) VALUES (:id_fournisseur, :id_produit, :date_commande, :quantite_commandee)");
    $stmt->bindParam(':id_fournisseur', $id_fournisseur);
    $stmt->bindParam(':id_produit', $id_produit);
    $stmt->bindParam(':date_commande', $date_commande);
    $stmt->bindParam(':quantite_commandee', $quantite_commandee);
    
    return $stmt->execute();
}
 // function for reading a command
 function getCommands($pdo) {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM produit");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
// function to Update command
function updateCommand($id_command, $id_produit, $id_fournisseur,$date_commande,$quantite_commandee) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE produit SET id_produit = :id_produit, id_fournisseur = :id_fournisseur ,date_commande =:date_commande,quantite_commandee =:quantite_commandee WHERE id_command = :id_command");
    $stmt->bindParam(':id_produit', $id_produit);
    $stmt->bindParam(':id_fournisseur', $id_fournisseur);
    $stmt->bindParam(':date_commande', $date_commande);
    $stmt->bindParam(':quantite_commandee',$quantite_commandee);
    $stmt->bindParam(':id_command', $id_command);
    
    return $stmt->execute();
}
// Delete a command
function deleteCommand($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM produit WHERE id = :id");
    $stmt->bindParam(':$id_command', $id_command);
    
    return $stmt->execute();
}




    

