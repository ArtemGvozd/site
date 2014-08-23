<?php head(); ?>
<form method="POST" action="" class="form-horizontal" role="form">
    <div class="form-group">
        <label for="inputTitle" class="col-sm-1 control-label">Заголовок:</label>
        <div class="col-sm-3">
            <input type="text" name="title" class="form-control" id="inputTitlte" value="<?php echo $result['title'] ?>" ">
        </div>
    </div>
    <div class="form-group">
        <label for="inputDescription" class="col-sm-1 control-label">Описание:</label>
        <div class="col-sm-3">
            <input type="text" name="description" class="form-control" id="inputDescription" value="<?php echo $result['description'] ?>" ">
        </div>
    </div>
    <div class="form-group">
        <label for="inputContent" class="col-sm-1 control-label">Контент:</label>
        <div class="col-sm-3">
            <textarea class="form-control" name="content" rows="10" id="inputContent"><?php echo $result['content'] ?></textarea>
        </div>
    </div>
        <div class="form-group">
        <div class="col-sm-offset-1 col-sm-4">
            <button type="submit" name="buton" class="btn btn-primary">Изменить</button>
        </div>
    </div>
</form>

    <?php foot(); ?>