<?php

/**
 * Le PDO
 */
try {
    // DSN (Data Source Name) : chaîne de connexion
    $dsn = "mysql:host=localhost;dbname=jour09;charset=utf8mb4";
    $username = "root";
    $password = "";

    $options = 
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //Gestions des erreurs avec exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //Retourne des tableaux associatifs
        PDO::ATTR_EMULATE_PREPARES => false //Demande de faire de vraies requêtes
    ];

    //Création de la connexion
    $pdo = new PDO($dsn, $username, $password, $options);

    echo "La connexion a réussi !";

} catch (PDOException $e) {
    // En cas d'erreur
    die("Erreur de connexion : " . $e->getMessage());
}

