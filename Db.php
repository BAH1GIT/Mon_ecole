<?php

try {
$conn = new PDO('mysql:host=localhost;dbname=monecole', 'root','');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo'connection reussie !';
}catch(PDOException $e) {
    echo 'erreur'. $e->getMessage();
    die();
}

