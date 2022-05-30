<?php

include('config\connection.php'); 
 
try {
    $query = $pdo->query('SELECT firstname, lastname, adress, city, tel FROM contact');
    $contacts = $query->fetchAll();
} catch (PDOException $e) {
    $error = $e->getMessage(PDO::FETCH_OBJ);
}