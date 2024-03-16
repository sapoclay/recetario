<?php 

$servername = 'localhost';
$username = 'root';
$password = '36159152';
$db = 'recetas';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    echo 'Conexión exitosa!!';
} catch (PDOException $e) {
    echo 'Fallo en la conexión: ' . $e->getMessage();
}