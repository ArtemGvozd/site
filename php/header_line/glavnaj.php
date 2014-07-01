<?php
if(!empty($_GET['n']) && $_GET['n']>0) { //Если n не пустая и она передана
    $sql = "SELECT * FROM news WHERE id=". intval($_GET['n']);// создаем запрос выборки
    $st=$conect->query($sql); //результат выражение
    $result=$st->fetch(); //метод fetch возвращает нам  массив

    if (!empty($result)) { // если не пустая РЕЗУЛЬТАТ
        echo "<h1>" .$result['title'] . "</h1>";
        echo "<i>" .$result['description'] . "</i><br>";
        echo "<i>" .$result['content'] . "</i>";
    } else {
        echo 'НЕТ НОВОСТИ!!БОЛТ';
    }
    
    }else {
$sql = "SELECT * FROM news";
$st=$conect->query($sql); //результат выражения
$result=$st->fetchAll();
foreach ($result as $v) {
    echo "<div class='news_item'><h2>" .$v['title'] ."</h2><i><a href='index.php?id=glavnaj&n=".$v['id']."'>". $v['description'] ."</a></i><br></div>";
}
}
?>