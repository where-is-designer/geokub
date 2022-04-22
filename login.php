<?php
    require "header.php"
?>

<section class="container">
    <h2 class="modal__title">Авторизация</h2>
    <p class="modal__subtitle">ВВЕДИТЕ ПОЖАЛУЙСТА СВОЙ ЛОГИН И ПАРОЛЬ</p>
    <form method="POST" action="">
        <p>
            <label class="visually-hidden" for="login-login">Логин</label>
            <input class="login__user" id="login-login" type="text" name="username" placeholder="Логин">
        </p>
        <p>
            <label class="visually-hidden" for="login-password">Пароль</label>
            <input class="login__password" id="login-password" type="password" name="password" placeholder="••••••••">
          </p>
        <button class="btn">Войти</button>
        <a href="register.php" class="btn btn__link">Зарегистрироваться</a>
    </form>
    <button class="modal__close">Закрыть</button>

<?php
    require "footer.php"
?>