<?php head(); ?>
<div class="panel panel-default">
    <div class="panel-body">
<a href="index.php?r=my_page_create">Добавление администратора</a>
    </div>
<?php if ($result) : ?>
    <table class="table table-hover">
    <tr>
        <td class="info"><b>ID</b></td>
        <td class="info"><b>Login</b></td>
        <td class="info"><b>Password</b></td>
        <td class="info"><b>Name</b></td>
        <td class="info"><b>Изменение / Удаление</b></td>
    </tr>
<?php foreach ($result as $item) : ?>
<tr>
    <td><?php echo $item['id']; ?></td>
    <td><?php echo $item['login']; ?></td>
    <td><?php echo $item['pasword']; ?></td>
    <td><?php echo $item['name']; ?></td>
    <td><button type="button" class="btn btn-default"><a href="index.php?r=my_page_update&id=<?php echo $item['id']; ?>"> Изменить </a></button>
        <button type="button" class="btn btn-default"><a href="index.php?r=my_page_delete&id=<?php echo $item['id']; ?>"> Удалить </a></button></td>

</tr>
<?php endforeach; ?>
</table>
    <?php
    echo "<center>";
    foreach ($pages as $q) {
        if($page==$q) {
            echo "<b>";
        }
        print '<a href="index.php?r=admins&page='.$q.'">' . $q . " | ". "</a>"; 
        if($page==$q) {
            echo "</b>";
        }
    }
    echo "</center>";
    ?>
</div>
<?php endif;?>
<?php foot(); ?>
