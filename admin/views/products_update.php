<?php head(); ?>
    <form enctype="multipart/form-data" action="" method="POST">
        <table class="table table-hover">
            <tr>
                <td class="active"> Название:</td><td> <input type="text" name="name" value="<?php echo $result['name'] ?>"></td></tr>
            <tr>
                <td class="active"> Описание:</td><td> <textarea rows="10" cols="45"name="description" ><?php echo $result['description'] ?></textarea></td>
                <td><img width="50" height="50" src="<?php echo "../gallery/". $result['image_name']; ?>"
                        title="<?php echo $result['image_name'] ?>"></td></tr>
            <tr>
                <td class="active"> Название:</td><td> <input type="file" name="image_name" value=""></td></tr>
            <tr>
                <td></td><td> <input type="submit" name="buton" value=" Изменить " /></td></tr>
        </table>
    </form>

    <center>
        <?php
        foreach ($error as $q) {
            echo $q . "<br>";
        }
        ?>
    </center>
</div>
<?php foot();?>



