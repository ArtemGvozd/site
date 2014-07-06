<?php
$id='glavnaj';
if(isset($_GET['id'])){
    $id = strtolower(strip_tags(trim($_GET['id'])));
}
switch ($id) {
case 'contacts': include 'php/header_line/contacts.php'; break;
case 'glavnaj' : include 'php/header_line/glavnaj.php';  break;
case 'galery'  : include 'php/header_line/galery.php';   break;
case 'obratnaj': include 'php/header_line/obratnaj.php'; break;
}
