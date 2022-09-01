<?php
session_start();
//require_once __DIR__ . 'connectDb.php';
$host = "localhost";
$username = "root";
$password = "root";
$db = "testDb";


$connect = new PDO("mysql:host=$host;dbname=$db", $username, $password);

$email = $_POST['email'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM users WHERE email = :email AND password = :password";


$statement = $connect->prepare($sql);
$statement->execute([
    'email' => $email,
    'password' => $password
]);

$result = $statement->fetch(PDO::FETCH_ASSOC);

if($result !== false) {

    $_SESSION['user'] = [
        "id" => $result['id'],
        "name" => $result['full_name'],
        "email" => $result['email'],
    ];


    header('Location: ../profile.php');
} else {
    $_SESSION['message_err'] = "Invalid Email or Password!";
    header('Location: ../login.php');
}