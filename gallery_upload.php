<?php
//каталог для загрузки файлов
$dir = './gallery/';

if(isset($_FILES['myfile'])) {
    // РНР  Сохраняет  Принятые  ФАЙЛЫ ВО  временном каталоге, в этом поле массива хранится имя временного файла;
    $myfile      = $_FILES["myfile"]["tmp_name"];
    // имя файла на компьютере пользователя;
    $myfile_name = $_FILES["myfile"]["name"];
    // размер файла
    $myfile_size = $_FILES["myfile"]["size"];
    //MIMT- тип файла
    $myfile_type = $_FILES["myfile"]["type"];
    // код ошибки
    $error_flag  = $_FILES["myfile"]["error"];
    //если нет ошибок
    if($error_flag == 0) {
        $f_thum="gallery/thum_"  .  $myfile_name;

        print("Имя файла на сервере  (во время запроса):  ".$myfile."<br>");
        print("Имя файла на моем компьютере:  ".$myfile_name."<br>");
        print("Имя файла на сервере:  ".$myfile."<br>");
        print("Имя thumb-файла на сервере:  ".$f_thum. "<br>");
        print("М1МЕ-тип файла:  ".$myfile_type."<br>");
        print("Размер файла:  ".$myfile_size."<br><br>");
        //  если размер файла больше  512 Кбайт...
        if($myfile_size >  512*1024){
            die('Размер файла больше 512 Кб!  Уменьшите файл и повторите попытку1');
        }
        //  копируем файл из временного каталога в галерею
        copy ($myfile, "gallery/$myfile_name") ;
        // делаем миниатюру
        function imageresize($outfile,$infile,$neww,$newh,$quality) {

            $im = imagecreatefromjpeg($infile) ;
            $iml = imagecreatetruecolor($neww,$newh);
            imagecopyresairpled($iml,$im,0,0,0,0,$neww,$newh,imagesx($im),imagesy($im));
            imagejpeg($iml,$outfile,$quality);
            imagedestroy($im);
            imagedestroy($iml) ;
        }
        //создаем миниатюру размером 160*100,  качество JPEG 75
        imageresize($f_thum,"gallery/$myfile_name"/160,100,75);
    }
    }
    else {
        //выводим форму
        echo file_get_contents('gallery_form.html');
    }

