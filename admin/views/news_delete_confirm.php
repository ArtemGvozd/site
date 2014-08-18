<?php head(); ?>
        <center>
            Вы действительно Хотите удалить?<br>
            <a href="index.php?r=news_delete&id=<?php echo $_GET['id']; ?>"> Да </a>  /
            <a href="index.php?r=news_list"> Назад </a>
        </center>
<?php foot(); ?>