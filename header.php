<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ГеоКруг</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link href='style.css' rel="stylesheet"> 
    
    
</head>
<body>
    <header class="main-header">
        <div class="main-header__container container">
            <div class="logo">
                <a class="logo__link" href="index.php">
                    <img src="assets/img/Logo.svg" width="80" height="80" alt=""> 
                    <div class="logo__title">
                        <h1 class="logo__main-title">ГеоКруг</h1>
                        <h2 class="logo__subtitle">Культура - рядом</h2>
                    </div>
                </a> 
            </div>
            <nav class="main-nav">
                <ul class="main-nav__list">
                    <li class="main-nav__item"><a href="monuments.php">Памятные места</a></li>
                    <?php 
                        if($_COOKIE['user'] != ''):
                    ?>    
                        <li class="main-nav__item"><a href="make-photo.php">Добавить место</a></li>
                    <?php endif; ?>
                    <li class="main-nav__item"><a href="page-team.php">Наша Команда</a></li>
                    <li class="main-nav__item"><a href="faq.php">FAQ</a></li>
                </ul>
            </nav>
            <?php 
                if($_COOKIE['user'] == ''):
            ?>
            <div class="login">
                <a href="#" class="login__btn login__link">Войти</a>
            </div>
            
            <?php else: ?>
                <div class="login">
                    <a href="exit.php" class='login__btn'>Выход</a>
                </div>
            <?php endif; ?>
            <div class="callback">
                <a href="#" class="login__btn callback__link">Оставить отзыв</a>
            </div>
        </div>
    </header>
    