<?php head(); ?>
        <b>Добавление Продукта</b>
        <form enctype="multipart/form-data" action="" method="POST">
            <table class="table table-hover">
                <tr>
                    <td> Название:</td><td> <input type="text" name="name" value=""></td></tr>
                <tr>
                    <td> Описание:</td><td> <textarea rows="10" cols="45"name="description"></textarea></td></tr>
                <tr>
                    <td> Название:</td><td> <input type="file" name="image_name" value=""></td></tr>
                <tr>
                    <td></td><td> <input type="submit" name="buton" value=" Добавить " /></tr></tr>
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




