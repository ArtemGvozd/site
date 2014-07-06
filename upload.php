<?php
//каталог для загрузки файлов
$dir = './upload/';

if(isset($_FILES['upfile'])) {
    // РНР  Сохраняет  Принятые  ФАЙЛЫ ВО  временном каталоге, в этом поле массива хранится имя временного файла;
    $upfile      = $_FILES["upfile"]["tmp_name"];
    // имя файла на компьютере пользователя;
    $upfile_name = $_FILES["upfile"]["name"];
    // размер файла
    $upfile_size = $_FILES["upfile"]["size"];
    //MIMT- тип файла
    $upfile_type = $_FILES["upfile"]["type"];
    // код ошибки
    $error_code  = $_FILES["upfile"]["error"];
    //если нет ошибок
    if($error_code == 0) {
        echo "Имя файла на сервере :" . $upfile . "<br>";
        echo "Имя файла на компьютере :" . $upfile_name . "<br>";
        echo "Размер фйла :" . $upfile_size . "<br>";
        echo "Тип файла :" . $upfile_type . "<br>";

        //дополняем имя файла
        $upfile_name = $dir . $upfile_name;

        /*копируем временный файл в каталог $dir,  имя файла будет исходное,
        т.  е.  как на компьютере у меня
        первый параметр — источник
        второй параметр — получатель
        аналогично -
        move_uploaded_file($upfile,  $upfile_name);
        */
        copy($upfile,$upfile_name);

    }

}