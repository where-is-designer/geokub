const RegError = document.querySelector(".reg_error");

function validateForm () {
    
    // выбираем элементы
    var login = document.getElementById('reg-login');
    var password1 = document.getElementById('reg-password1');
    var password2 = document.getElementById('reg-password2');

    // проверяем email
    var email = document.getElementById('reg-email');
    // регулярка для проверки, не знаю, работает ли приведенный в примере
    var email_regexp = /[0-9a-zа-я_A-ZА-Я]+@[0-9a-zа-я_A-ZА-Я^.]+\.[a-zа-яА-ЯA-Z]{2,4}/i;
    
    // проверяем значение поля email, если нет, то: 
    if (!email_regexp.test(email.value)) {
        RegError.innerHTML = `<h3>Укажите вашу эл.почту</h3>`
        return false;
    }
        // проверяем логин
    if (login.value  == "") {
        RegError.innerHTML = `<h3>Укажите ваш логин</h3>`
        return false;
    }
    if (password1.value  == "") {
        RegError.innerHTML = `<h3>Укажите ваш пароль</h3>`
        return false;
    }
    if (password2.value  == "") { 
        RegError.innerHTML = `<h3>Повторите пароль</h3>`
        return false;
    }

    // проверяем пароли
    // сравниваем написанное, если не равно, то:
    if (password1.value !== password2.value) {
        // сообщаем пользователю, можно сделать как угодно
        alert('Проверьте пароли!');
        // сообщаем браузеру, что не надо обрабатывать нажатие кнопки
        // как обычно, т. е. не надо отправлять форму
        return false; 
    }

}