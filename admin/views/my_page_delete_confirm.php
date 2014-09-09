<?php head(); ?>
    <table class="table table-hover">
        <center>
            Вы действительно Хотите удалить?<br>
            <a href="index.php?r=my_page_delete&id=<?php echo $_GET['id']; ?>" button type="button" class="btn btn-default"> Да </button></a>
            <a href="index.php?r=admins" button type="button" class="btn btn-info"> Назад </button></a>
        </center>
    </table>
<?php foot(); ?>