<?php head();?>
    <form method="POST" action="" class="form-horizontal" role="form">
        <div class="form-group">
            <label for="inputName" class="col-sm-1 control-label">Имя:</label>
            <div class="col-sm-3">
                <input type="text" name="name" class="form-control" id="inputName" value="<?php echo $result['name'] ?>" ">
            </div>
        </div>
        <div class="form-group">
            <label for="inputLogin" class="col-sm-1 control-label">Логин:</label>
            <div class="col-sm-3">
                <input type="text" name="login" class="form-control" id="inputLogin" value="<?php echo $result['login'] ?>" ">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPasword" class="col-sm-1 control-label">Пароль:</label>
            <div class="col-sm-3">
                <input type="password" name="pasword" class="form-control" id="inputDescription">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPaswor_d" class="col-sm-1 control-label">Повторите пароль:</label>
            <div class="col-sm-3">
                <input type="password" name="paswor_d" class="form-control" id="inputPaswor_d">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-4">
                <button type="submit" name="buton" class="btn btn-primary">Изменить</button>
            </div>
        </div>
    </form>
<?php
foreach($error as $p) {
    echo $p . "<br>";
}
?>
</center>
</div> 
<?php foot();?>