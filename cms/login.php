<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

require_once 'functions.php';

$credentialsArray = getUserCredentials($db);

foreach ($credentialsArray as $credentials) {
    $actualUserName = $credentials['name'];
    $hashedPassword = $credentials['password'];
}

$inputUserName = $_POST['userName'];
$inputPassword = $_POST['password'];
$hashedPassword = password_hash($inputPassword, PASSWORD_DEFAULT);

if (isset($_POST['login']) && ($inputUserName !== empty($inputUserName) || $inputPassword !== empty($inputPassword))) {
    $checkCredentials = checkCredentials($actualUserName, $hashedPassword, $inputUserName, $inputPassword);
    login($checkCredentials);
} else {
    echo 'Please enter user name and password';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
    <form method="post" action="login.php">
        <input type="name" name="userName">
        <input type="name" name="password">
        <input type="submit" name="login">
    </form>
</body>
</html>