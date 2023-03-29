<?php

$host = 'localhost';
$dbname = 'dbmahasiswa';
$username = 'root';
$password = '';


try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOxxception $e) {
    echo "Koneksi Gagal : " . $e->getMessage();
}

?>