<?php
    define('USER', 'root');
    define('PASSWORD', '1234');
    define('HOST', 'localhost');
    define('DATABASE', 'website');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>