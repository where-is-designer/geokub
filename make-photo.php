<?php
    require "header.php";
?>
<?php 
    if($_COOKIE['user'] == '') {
        header('Location: /');
    }
?>
<script src='assets/js/webcam.min.js'></script>

    <section class="page-body create-photo">
        <div class="container reg__form">
            <h2 class='title'>Добавить новое памятное место</h2>
            <form class='form' method="POST" action='blocks/make-photo__send.php' enctype="multipart/form-data">
                <div class="form__wrapper">
                    <input type="button" class='btn' id='openCamera' value="Включить камеру">
                    <div class="camera__wrapper">
                        <div id="my_camera"></div>
                        <input type="button" class='btn' id='makePhoto' value="Сделать снимок">
                        <div id="results">Фотография будет появляться здесь</div>
                    </div>
                    
                </div>
                </input>
                <div class="form__wrapper">
                    <p>
                        <label for="obj-name">Название объекта</label>
                        <input id="obj-name" type="text" name="obj-name" placeholder="Памятник Ленину">
                    </p>
                    <p>
                        <label class="" for="obj-location">Координаты будут отображаться здесь</label>
                        <input class="" id="obj-location" type="text" name="obj-location" placeholder="xx.xxxxxx yy.yyyyyy">
                    </p>
                    <p>
                        <label class="" for="obj-adress">Адрес</label>
                        <input class="" id="obj-adress" type="text" name="obj-adress" placeholder="г. Хабаровск, улина Ленина, 20">
                    </p>
                    <p>
                        <label class="" for="obj-hashtag">Хештеги</label>
                        <input class="" id="obj-hashtag" type="text" name="obj-hashtag" placeholder="#Хабаровск #Природа">
                    </p>
                    <p>
                        <label class="" for="obj-descr">Описание</label>
                        <input class="" id="obj-descr" type="text" name="obj-descr" placeholder="Прекрасный памятник в городе">
                    </p>
                    
                    <p class='visually-hidden'>
                        <label class="" for="obj-img">Изображение</label>
                        <input class="" id="obj-img" type="text" name="obj-img" placeholder="Прекрасный памятник в городе">
                    </p>
                    <p class=''>
                        <label class="" for="img__upload">Сделайте фото или загрузите его с устройства</label>
                        <input class="" id="img_upload" type="file" name="img_upload">
                    </p>
                    <button name='upload' class="btn">Отправить место</button>
                </div>   
            </form>
        </div>
        
    </section>
    <script src='assets/js/cam-script.js'></script>
<?php 
    require "footer.php"
?>