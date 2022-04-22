<?php
    require "header.php";
?>

    <section class="page-body monuments">
        <div class="container">
            <h2 class="title">Памятные места</h2>
            <div class="examples__list">
            <?php 
                    require 'blocks/configDB.php';

                    $query = $pdo->query('SELECT * FROM `monuments` ORDER BY `monuments`.`id` ASC');
                    $i = 0;
                    while($row = $query->fetch(PDO::FETCH_OBJ)): ?>
                    
                    <?php
                        if($row->camera == NULL) {
                            $show_img ='data:image/jpeg;base64, '.base64_encode($row->photo); 
                        } else {
                            $show_img = $row->camera;
                        }
                            
                            
                    ?>
                        <div class="examples__item">
                            <a href="#" class="examples_link">
                                <div class="examples__img">
                                <img src="<?php echo $show_img ?>" alt="">
                                <div class="examples__text">
                                    <h3 class='culture__title'><?php echo'Объект: '.$row->title; ?></h3>
                                    <p class='culture__place'><?php echo'Адрес: '.$row->adress; ?></p>
                                    <p class='culture__place'><?php echo'Координаты: '.$row->coord; ?></p>
                                    <p class='culture__place'><?php echo'Описание: '.$row->descr; ?></p>
                                    <div class="culture__hashtag-list">
                                        <div class="culture__hashtag-item"><?php echo $row->hashtag ?> </div>
                                    </div>
                                </div>
                            </a> 
                        </div>
                    
            </div>
            <?php endwhile;?>
        </div>
        
    </section>

<?php 
    require "footer.php";
?>