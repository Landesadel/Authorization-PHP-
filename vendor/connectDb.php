<?php

$host = "localhost";
$username = "root";
$password = "root";
$db = "testDb";


 new PDO("mysql:host=$host;dbname=$db", $username, $password, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
