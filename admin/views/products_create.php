<?php head(); ?>
<form enctype="multipart/form-data" action="" method="POST" class="form-horizontal" role="form">
    <div class="form-group">
        <label for="inputName" class="col-sm-1 control-label">Название:</label>
        <div class="col-sm-3">
            <input type="text" name="name" class="form-control" id="inputName" placeholder="Введите название ">
        </div>
    </div>
    <div class="form-group">
        <label for="inputMessage" class="col-sm-1 control-label">Текст:</label>
        <div class="col-sm-3">
            <textarea class="form-control" name="description" rows="10" id="inputMessage"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputFile" class= "col-sm-1 control-label">Картинка:</label>
        <div class="col-sm-offset-0 col-sm-1">
            <input type="file" id="exampleInputFile">
        </div>
    </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-1 col-sm-4">
            <button type="submit" name="buton" class="btn btn-primary">Добавить</button>
        </div>
    </div>
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




