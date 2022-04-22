<?php 

$login =filter_var(trim($_POST['username']),
FILTER_SANITIZE_STRING);
$pass =filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);



$pass = md5($pass.'dasdasdgf1');

require "../blocks/connect.php";

$result = $mysql->query("SELECT * FROM `users` WHERE `username` = '$login' AND `pass` = '$pass'");

$user = $result->fetch_assoc();
if(count($user) == 0) {
    echo "Такого пользователя не найдено";
    exit();
}

setcookie('user', $user['username'], time() + 3600, "/");

 $mysql->close();
 header('Location: /')
?>