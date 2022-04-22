<?php 
    require 'header.php'
?>
    <main>
    <section class="section slider">
        <div class="slider__list">
            <div class="slider__item slider-1 slider__item--active">
                <div class="container">
                    <h2>Российский аналог instagram!</h2>
                    <p class='subtitle'>Достаточно просто зарегистрироваться</p>
                    <a href="register.php" class="btn">Регистрация</a>
                </div>
            </div>  
            <div class="slider__item slider-2 slider__item--active slider__item--white">
                <div class="container">
                    <h2>Быстрая, надёжная сеть для ведения своей интернет-страницы!</h2>
                    <p class='subtitle'>Достаточно просто зарегистрироваться</p>
                    <a href="register.php" class="btn">Регистрация</a>
                </div>
            </div>  
            <div class="slider__item slider-3 slider__item--active slider__item--white">
                <div class="container">
                    <h2>Все ваши друзья, ваши фото и истории всегда под рукой!</h2>
                    <p class='subtitle'>Достаточно просто зарегистрироваться</p>
                    <a href="register.php" class="btn">Регистрация</a>
                </div>
            </div>  
        </div>
    </section>
        <section class="company container">
            <h2 class="title">О проекте</h2>
            <div class="company__wrapper">
                <p class="text">
                    Геокруг позволит любому пользователю запечатлеить и поделиться с миром интересным объектом или природным явлением со всем миром!
                    <br>
                    <br>
                    Для этого вам понадобиться всего лишь ваш телефон и необходимость сделать фото этого замечательного объекта.
                    <br>
                    <br>
                    <span class="text text--big">
                        Попробуйте прямо сейчас
                    </span>
                </p>
                <img class="company__img" src="assets/img/company-bg.jpg" alt="">
            </div>
        </section>

        <section class="advantage">
            <div class="container">
                <h2 class="title__reverse">О продукте</h2>
                <ul class="advantage-list">
                    <li class="advantage-item">
                        <div class="advantage__image-wrapper">
                            <img src="./assets/img/adv-5.svg" alt="">
                        </div>
                        <h3>Большой каталог изображений</h3>
                        <p>Разнообразные фотографии и картинки. Каждый может найти что-то по своему вкусу</p>
                    </li>
                    <li class="advantage-item">
                        <div class="advantage__image-wrapper">
                            <img src="./assets/img/adv-3.svg" alt="">
                        </div>
                        <h3>Загрузка с любой точки мира</h3>
                        <p>Достаточно пройти регистрацию и иметь доступ к интернету!</p>
                    </li>
                    <li class="advantage-item">
                        <div class="advantage__image-wrapper">
                        <img src="./assets/img/adv-4.svg" alt="">
                        </div>
                        <h3>Делитесь и комментируйте</h3>
                        <p>Показывайте изображения своим друзьям и обсуждайте увиденное вместе</p>
                    </li>
                </ul>
                <div class="advantage__button-wrapper">
                    <div class="">
                        <a href="faq.php" class="advantage__button advantage__button--red">Частые вопросы</a>
                    </div>
                    <div class="">
                        ИЛИ
                    </div>
                    <div class="">
                        <a href="register.php" class="advantage__button advantage__button--blue">Регистрация</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="examples">
            <div class="container">
                <h2 class="title">Наши наилучшие работы</h2>
                <div class="examples__list">
                    <div class="examples__item">
                        <a href="#" class='examples_link'>
                            <div class="examples__img">
                                <img src="assets/img/khv-1.jpg" alt="">
                            </div> 
                            <div class="examples__text">
                                <h3 class='culture__title'>Памятник Ленину</h3>
                                <p class='culture__place'>Хабаровск</p>
                                <div class="culture__hashtag-list">
                                    <div class="culture__hashtag-item">#Хабаровск</div>
                                </div>
                            </div>
                        </a>     
                    </div>
                    <div class="examples__item">
                        <a href="#" class='examples_link'>
                            <div class="examples__img">
                                <img src="assets/img/khv-3.jpg" alt="">
                            </div> 
                            <div class="examples__text">
                                <h3 class='culture__title'>Дальневосточный художественный музей</h3>
                                <p class='culture__place'>Хабаровск</p>
                                <div class="culture__hashtag-list">
                                    <div class="culture__hashtag-item">#Хабаровск</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="examples__item">
                        <a href="#" class='examples_link'>
                            <div class="examples__img">
                                <img src="assets/img/kms-1.jpg" alt="">
                            </div> 
                            <div class="examples__text">
                                <h3 class='culture__title'>Парк им. Гагарина</h3>
                                <p class='culture__place'>Комсомольск</p>
                                <div class="culture__hashtag-list">
                                    <div class="culture__hashtag-item">#Комсомольск</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="examples__item">
                        <a href="#" class='examples_link'>
                            <div class="examples__img">
                                <img src="assets/img/vl-1.jpg" alt="">
                            </div> 
                            <div class="examples__text">
                                <h3 class='culture__title'>Ботанический сад-институт ДВО РАН</h3>
                                <p class='culture__place'>Владивосток</p>
                                <div class="culture__hashtag-list">
                                    <div class="culture__hashtag-item">#Владивосток</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
                <div class="btn__wrapper">
                    <a href="monuments.php" class='btn'>Посмотреть ещё</a>
                </div>
            </div>  
        </section>
        
<?php
    require 'footer.php'
?>