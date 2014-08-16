<?php
// SELECT * FROM TBL_NAME LIMIT [С КАКОЙ ЗАПИСИ], [СКОЛЬКО]
// SELECT * FROM TBL_NAME LIMIT [ОТСТУП, КОЛ-ВО СТРОК], [СКОЛЬКО]

// LIMIT [(CURR_PAGE - 1) * PER_PAGE], PER_PAGE
// Где PER_PAGE - кол. зап. на.стр
// CURR_PAGE - текущая стр.

if(!isset($_GET['page'])) {
    $page = 0;
} else {
    $page=$_GET['page'];
}

$num = 10; // кол-во записей на странице
$sql = ("SELECT COUNT(*) as cnt FROM products ");
$st = $conect->query($sql);
$result = $st->fetch();
$products = $result['cnt']; // число продуктов в базе

// Общие число страниц
$total = (($products-1)/$num)+1;  //
$total = intval($total);
$page  =  intval($page);

for($i=1; $i<=$total; $i++) {
    $pages[] = $i;
}

// если $page пустая или отрицательное число то переходим на первую страницу
if(empty($page) || $page<0) {
    $page = 1;
}
// если $page большое число то перехожим на последнюю
elseif($page>$total) {
    $page = $total;
}
$start = ($page * $num)-$num; // с какого номера выводим новости!!!!!!!!!

// Выбираем  поля из таблицы news с лимитом
$sql = ("SELECT * FROM products LIMIT $start, $num");
$st = $conect->query($sql);
$result = $st->fetchAll();
?>