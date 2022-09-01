<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorization</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
if(isset($_SESSION['message_err'])) {
    echo "<p class='message-err'>" . $_SESSION['message_err'] . "</p>";
}
unset($_SESSION['message_err']);
?>
    <form class="Login-form" action="vendor/signin.php" method="post">
        <label>Email</label>
        <input class="input-login" name="email" type="email" placeholder="Your Email">
        <label>Password</label>
        <input class="input-login"  name="password" type="password" placeholder="Your password">
        <button type="submit" class="btn-login">Login</button>
    </form>

<p class="signin-par" >
    Registration: <a href="registration.php"> Sign in</a>
</p>

    <?php
    if(isset($_SESSION['message_suc'])) {
        echo '<p class="message-suc">' . $_SESSION['message_suc'] . '</p>';
    }
    unset($_SESSION['message_suc']);
    ?>
</body>
</html>



