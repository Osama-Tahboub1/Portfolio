<?php
require_once '../settings.php';
$db = new PDO("mysql:host=$dbHost; dbname=$dbName", "$dbUserName");
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

require_once 'functions.php';

$credentialsArray = getUserCredentials($db);

if (is_array($credentialsArray) === true) {
    foreach ($credentialsArray as $credentials) {
        $actualUserName = $credentials['name'];
        $hashedPassword = $credentials['password'];
    }

} else {
    echo "Application error, contact admin";
}

$inputUserName = filter_var($_POST['userName'],FILTER_SANITIZE_STRING);
$inputPassword = filter_var($_POST['password'],FILTER_SANITIZE_STRING);

if (isset($_POST['login']) && ($inputUserName !== empty($inputUserName) || $inputPassword !== empty($inputPassword))) {
    $checkCredentials = checkCredentials($actualUserName, $hashedPassword, $inputUserName, $inputPassword);
    login($checkCredentials);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
    <h1>Portfolio CMS</h1>
    <form method="post" action="login.php">
        <input type="name" name="userName">
        <p></p>
        <input type="name" name="password">
        <p></p>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>