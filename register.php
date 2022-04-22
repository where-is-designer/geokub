<?php
    require 'header.php'
?>

    <section class="page-body register">
        <div class="container reg__form">
            <h1 class="title">Регистрация пользователя</h1>
            <form method='post' action="validation-form/check.php" name='singup-form'>
                <p>
                    <label class="" for="reg-email">Введите email</label>
                    <input class="register__email" id="reg-email" type="email" name="email" placeholder="example@gmail.com">
                </p>
                <p>
                    <label class="" for="reg-login">Введите логин</label>
                    <input class="register__login" id="reg-login" type="text" name="username" placeholder="Логин" >
                </p>
                <p>
                    <label class="" for="reg-password">Введите пароль</label>
                    <input class="register__password" id="reg-password1" type="password" name="password" placeholder="••••••••">
                </p>
                <p>
                    <label class="" for="reg-password">Повторите пароль</label>
                    <input class="register__password" id="reg-password2" type="password" name="password-repeat" placeholder="••••••••"> 
                </p>
                <div class="reg_error"></div>
                <p>
                    <input type="submit" class="btn" id="submit_button" name="register" onclick="return validateForm()"/>
                </p>          
            </form>
        </div>
    </section>


    <script src="assets/js/register-validation.js"></script>
<?php
    require 'footer.php'
?>


