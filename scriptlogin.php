<?php 
include("Mypdo.php");
session_start();
if(isset($_POST['login']) && !empty($_POST['login'])){
    $login = $_POST['login'];
}
if(empty($_POST['login'])){
   unset($_POST['login']);
}
if(isset($_POST['password']) && !empty($_POST['password'])){
    $password = $_POST['password'];
}
if(empty($_POST['password'])){
    unset($_POST['password']);
}

if(empty($login) && empty($password)){
    exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

$db = new Mypdo();
$db1 = $db->getDbInstance();
$sql = 'SELECT * FROM users';
$stmt = $db1->query($sql)->fetchAll(PDO::FETCH_ASSOC);
print_r($stmt);
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
