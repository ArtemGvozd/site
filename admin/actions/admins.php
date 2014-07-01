<?php
// SELECT * FROM TBL_NAME LIMIT [С КАКОЙ ЗАПИСИ], [СКОЛЬКО]
// SELECT * FROM TBL_NAME LIMIT [ОТСТУП, КОЛ-ВО СТРОК], [СКОЛЬКО]

// LIMIT [(CURR_PAGE - 1) * PER_PAGE], PER_PAGE
// Где PER_PAGE - кол. зап. на.стр
// CURR_PAGE - текущая стр.

if(!isset($_GET['page'])) {
    $page = 0;
} else {
    $page = $_GET['page'];
}

$num       = 2; // записей на странице
$sql       = ("SELECT COUNT(*) as cnt FROM admin");
$st        = $conect->query($sql); //результат выражения
$result    = $st->fetch(); // 
$all_posts = $result['cnt']; // число записей администраторов в базе
if(empty($result)){
    header("Location: index.php");
}

// общие число страниц
$total = (($all_posts-1)/$num)+1;
$total = intval($total);
$page  = intval($page);

for($i=1; $i<=$total; $i++) {
    $pages[] = $i;
}

if(empty($page) || $page<0) {  // если $page пустая или - отрицательное число переходим на 1-ю страницу
    $page = 1;
}
elseif($page>$total) { // если $page слишком большая переходим на последнюю страницу
    $page = $total;
}

//  с какого номера выводим записи администраторов
$start = (($page-1)* $num);  // текущую страницу используем!!

// Запрос в бд на лимит администраторов
$sql = ("SELECT * FROM admin LIMIT $start, $num");
$st = $conect->query($sql);
$result = $st->fetchAll();
    
    
    