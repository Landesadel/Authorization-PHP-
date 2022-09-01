<?php


session_start();
$host = "localhost";
$username = "root";
$password = "root";
$db = "testDb";


$connect = new PDO("mysql:host=$host;dbname=$db", $username, $password);
//$connect = require_once 'connectDb.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$re_password = $_POST['repeat_password'];
if(isset($email) & isset($password)) {

    $statement = $connect->prepare('SELECT COUNT(*) as count FROM users WHERE email=?');
    $mail = $_POST['email'];
    $statement->execute(array($mail));
    $mailCount = $statement->fetch(PDO::FETCH_ASSOC);

    if ($mailCount['count'] > 0) {
        $_SESSION['message_err'] = "Email already exists!";
        header('Location: ../registration.php');
    } else {

        if ($password === $re_password) {
            try {
                $password = md5($password);
                $sql = "INSERT INTO users (full_name, email, password) VALUES ('$name', '$email', '$password')";
                $connect->exec($sql);

                $_SESSION['message_suc'] = "Registration was successful";
                header('Location: ../login.php');

            } catch (PDOException $e) {
                echo "Database error: " . $e->getMessage();
            }

        } else {
            $_SESSION['message_err'] = "Passwords don't match!";
            header('Location: ../registration.php');
        }
    }
}