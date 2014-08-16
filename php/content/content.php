<?php
$id='glavnaj';
if(isset($_GET['id'])){
    $id = strtolower(strip_tags(trim($_GET['id'])));
}
switch ($id) {
case 'contacts': include 'php/header_line/contacts.php'; break;
case 'glavnaj' : include 'php/header_line/glavnaj.php';  break;
case 'gallery'  : include 'php/header_line/gallery.php';   break;
case 'obratnaj': include 'php/header_line/obratnaj.php'; break;
case 'gallery_view'  : include 'php/header_line/gallery_view.php';   break;
}
