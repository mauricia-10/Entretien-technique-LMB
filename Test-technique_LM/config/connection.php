<?php

$host = 'localhost';
$port = "3306";
$database = 'lmb';
$user = '****';
$password ='****';

try {
	//On test la connexion à la base de donnée
    $pdo = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$database, $user, $password);

} catch(Exception $e) {
	//Si la connexion n'est pas établie, on stop le chargement de la page.
	reponse_json($success, $data, 'Echec de la connexion à la base de données');
    exit();
}
