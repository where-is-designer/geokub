<?php
    // $img = $_POST ['obj-img'];
    // if($img == '') {
    //     echo 'Загрузите изображение';
    //     exit();
    // }

    $title = $_POST['obj-name'];
    $adress = $_POST['obj-adress'];
    $coord = $_POST['obj-location'];
    $hashtag = $_POST['obj-hashtag'];
    $descr= $_POST['obj-descr'];

        // require 'connect.php';
        // $mysql->query("INSERT INTO `monuments` (`id`, `title`, `adress`, `coord`, `photo`, `descr`, `hashtag`) 
        // VALUES(NULL,'$title', '$adress', '$coord', '$img', '$descr', '$hashtag')");
        if($_FILES['img_upload']['tmp_name'] != '') {
            if(isset($_POST['upload'])){
                $img_type = substr($_FILES['img_upload']['type'], 0, 5);
                $img_size = 2*1024*1024;
                if(!empty($_FILES['img_upload']['tmp_name']) and $img_type === 'image' and $_FILES['img_upload']['size'] <= $img_size){ 
                $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
                require 'connect.php';
                $mysql->query("INSERT INTO `monuments` (`id`, `title`, `adress`, `coord`, `photo`, `descr`, `hashtag`, `camera`) 
                VALUES(NULL,'$title', '$adress', '$coord', '$img', '$descr', '$hashtag', NULL)");
                $mysql->close();
                }
            }
        
        } else if($_POST['obj-img'] != ''){
            $camera = $_POST['obj-img'];
            
            require 'connect.php';
            $mysql->query("INSERT INTO `monuments` (`id`, `title`, `adress`, `coord`, `photo`, `descr`, `hashtag`, `camera`) 
            VALUES(NULL,'$title', '$adress', '$coord', NULL, '$descr', '$hashtag', '$camera')");
            $mysql->close();
        } else {
            echo 'Вставьте фотографию';
        }
    
    // require 'configDB.php';
    // $sql = 'INSERT INTO monuments(title, adress, coord, photo, descr, hashtag) 
    // VALUES(:title, :adress, :coord, :img, :descr, :hashtag)';
    // $query = $pdo->prepare($sql);
    // $query->execute(['title' => $title]);

    
 
    

    header('Location: ../make-photo.php');
?>