<?php
$user_name = $_POST["user_name"];
$user_password = $_POST["user_password"];
if(isset($user_name) && isset($user_password)){
try {
$pdo = new PDO('mysql:host=sql7.freesqldatabase.com;dbname=sql7586126;
charset=utf8', 'sql7586126', 'ZJymVgKP5C');
$pdo->setAttribute(PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);
$sql = 'INSERT INTO Users SET
username = "'.$user_name.'",
userpassword = "'.$user_password.'",
userdate = "2017-06-01"';
$pdo->exec($sql);
$output = 'registered succesfully.';
}
catch (PDOException $e) {
$output = 'Database error:' . $e->getMessage() . ' in ' .
$e->getFile() . ':' . $e->getLine();
}}
include 'home.php';