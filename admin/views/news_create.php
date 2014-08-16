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

    <form action="" method="POST" class="form-horizontal" role="form">
        <div class="form-group">
            <label for="inputtitle" class="col-sm-1 control-label">Заголовок</label>
            <div class="col-sm-3">
                <input type="text" name="title" class="form-control" id="inputtitle" placeholder="Введите заголовок">
            </div>
        </div>
        <div class="form-group">
            <label for="inputDescription" class="col-sm-1 control-label">Описание</label>
            <div class="col-sm-3">
                <input type="text" name="description" class="form-control" id="inputDescription" placeholder="Введите описание">
            </div>
        </div>
        <div class="form-group">
            <label for="inputContent" class="col-sm-1 control-label">Полное Описание</label>
            <div class="col-sm-3">
                <textarea  name="content" class="form-control" id="inputContent"  cols="50" rows="20"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-1">
                <button type="submit" name="buton" class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </form>

?>
<center>
<?php
foreach ($error as $q) {
    echo $q . "<br>";
}
?>
</center>
</div>
<?php foot(); ?>