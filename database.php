<?php

function dataconnect(): object{

    $dbname = 'u986688590_Learnverse';
    $host = '193.203.168.44';
    $dsn = "mysql:dbname=$dbname;host=$host;port=3306;charset=utf8";


    $user = 'u986688590_NTH3C';
    $pass = 'Thauna1234';

    $driver_options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, 
    ];

    try {
        $pdo = new PDO($dsn, $user, $pass, $driver_options);
        return $pdo;
    } catch (PDOException $e) {
        echo 'La connexion à la base de données a échouée.';
    }

}