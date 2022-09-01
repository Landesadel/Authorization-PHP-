<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>



    <form class="Login-form" action="vendor/signup.php" method="post">
        <label>Name</label>
        <input class="input-login" name="name" type="text" placeholder="Enter your full name">
        <label>Email</label>
        <input class="input-login" name="email" type="email" placeholder="Enter your Email">
        <label>Password</label>
        <input class="input-login" name="password" type="password" placeholder="Enter your password">
        <input class="input-login" name="repeat_password" type="password" placeholder="Repeat your password">
        <button type="submit" class="btn-login">Sign in</button>
    </form>
    <p class="signin-par" >
        <a href="login.php">Login</a>
    </p>

            <?php
            if(isset($_SESSION['message_err'])) {
                echo "<p class='message-err'>" . $_SESSION['message_err'] . "</p>";
            }
            unset($_SESSION['message_err']);
            ?>

</body>
</html>
