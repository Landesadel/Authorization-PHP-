<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>profile</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="profile">
        <h2>Welcome, <?= $_SESSION['user']['name'] ?> </h2>
        <p class="signin-par">(<?= $_SESSION['user']['email'] ?>)</p>
        <p class="signin-par" >
            <a href="vendor/logout.php"> Logout</a>
        </p>
    </div>
</body>
</html>
