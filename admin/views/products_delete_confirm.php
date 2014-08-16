<?php head(); ?>
<div id="content_admin">
    <center>
            Вы действительно Хотите удалить?<br>
            <a href="index.php?r=products_delete&id=<?php echo $_GET['id']; ?>"> Да </a>  /
            <a href="index.php?r=products_list"> Назад </a>
    </center>
</div>
<?php foot(); ?>