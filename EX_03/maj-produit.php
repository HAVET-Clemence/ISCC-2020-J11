<?php
function connect_to_basetest01(){
$servername="localhost";
$username="root";
$databasename="basetest01";
$password="";

try {
    $pdo= new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $pdo->setAttribute (PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    echo "Connected successfully";
    return $pdo;
} catch (PDOException $e){
    echo "Connection failed: ". $e->getMessage();
}
}

$pdo=connect_to_basetest01();
$pdo->exec("UPDATE produit
SET quantite=1
WHERE nom='Short bleu'");
?>