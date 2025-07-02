<?php
// Dane logowania do bazy danych
$host = 'localhost';
$db   = 'automatyzacjaWSB';
$user = 'automatyzacjaWSB';
$pass = 'automatyzacjaWSB';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
