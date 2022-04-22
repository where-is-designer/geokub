<?php
   $login =filter_var(trim($_POST['username']),
   FILTER_SANITIZE_STRING);
   $email =filter_var(trim($_POST['email']),
   FILTER_SANITIZE_STRING);
   $pass =filter_var(trim($_POST['password']),
   FILTER_SANITIZE_STRING);

//    if(mb_strlen($login) < 2 || mb_strlen($login) > 30) {
//        echo 'Недопустимая длина логина';
//        exit();
//    }

    $pass = md5($pass.'dasdasdgf1');

    require "../blocks/connect.php";
   $mysql->query("INSERT INTO `users` (`username`, `pass`, `email`)
   VALUES('$login', '$pass', '$email')");

    $mysql->close();
    header('Location: /');
?>