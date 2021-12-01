<?php

$host = 'localhost';
$db   = 't0001';
$user = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try{
    $pdo = new PDO($dsn, $user, $password);
    if ($pdo) {
        echo "Banco conectado com sucesso.";
    }
} catch (PDOException $e){
    print "Erro: " . $e->getMessage();
    die();
}

?>