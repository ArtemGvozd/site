<?php head(); ?>
<form action="" method="POST" >
    <table class="table table-hover">
    <tr>
        <td class="active"><b> Заголовок:</b></td><td> <input type="text" name="title" value=""></td></tr>
    <tr>
        <td class="active"><b> Описание:</b></td><td> <input type="text" name="description"></td></tr>
    <tr>
        <td class="active"><b>Контент:</b></td><td> <textarea name="content" cols="50" rows="20"></textarea></td></tr>
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
<?php foot(); ?>