<?php
$dir =  "gallery";
$N = 3;  //  количество картинок в строке
echo  "<h1>Галерея</h1>";
echo "<p><table  width=100% cols=$N></p>";
$i = 0;  //  счетчик итераций
// получаем все элементы каталога gallery в массив  images
$images = scandir($dir);
//  выводим таблицу с картинками
foreach  ($images as  $k=>$v)
{
//  выводим только миниатюры и ссылки на большие изображения
if(strpos ($v, "thum_") !==false) {

    //  каждые 3 итераций выводим новую строку таблицы
    if($i  %  $N == 0) {
        echo  "<tr>";
        echo  "<td>";
        $image = substr($v,  5);
        echo  "<a target=_blank href=\"$dir//$iinage\ff>
        <img border=0  src=\"$dir//$v\"></a>";
        echo  "</td>";
        $i++;
    }
}
}
echo  "</table>";
echo  file_get_contents('gallery_form.html');
?>