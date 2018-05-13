<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

require_once 'functions.php';

$actualUserName = "";
$actualPassword = "";

$hashedPassword = password_hash($actualPassword, PASSWORD_DEFAULT);

updateCredentials($db, $actualUserName, $hashedPassword);
header('Location: login.php');

