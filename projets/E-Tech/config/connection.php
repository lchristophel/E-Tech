<?php 
function connection() {
    $servername = 'localhost'; 
    $username = 'host'; 
    $password = 'host';
    $dbname = 'E-Tech';
    $charset = 'utf8';

    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname;charset=$charset", $username, $password);
    } catch (PDOException $e) {
        echo 'Connexion à la base de données impossible : ' . $e->getMessage();
        return FALSE;
        exit();
    }
}
?>