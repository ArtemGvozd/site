<?php head(); ?>
<form enctype="multipart/form-data" action="" method="POST" >
    <table class="table table-hover">
        <tr>
            <td class="active"><b>Название:</b></td><td> <input type="text" name="name" value=""></td></tr>
        <tr>
            <td class="active"><b>Описание:</b></td><td> <textarea name="description" cols="50" rows="20"></textarea></td></tr>
        <tr>
            <td></td><td><INPUT name="image_name" type="file"></td>
        </tr>
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
<?php foot(); ?>




