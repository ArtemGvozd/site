<?php head(); ?>
<div id="content_admin">
    <a href="index.php?r=my_page_create"><pre> Добавление администратора </pre></a>
<?php if ($result) : ?>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Login</td>
        <td>Password</td>
        <td>Name</td>
        <td> Измененить / Удалить</td>
    </tr>
<?php foreach ($result as $item) : ?>
<tr>
    <td><?php echo $item['id']; ?></td>
    <td><?php echo $item['login']; ?></td>
    <td><?php echo $item['pasword']; ?></td>
    <td><?php echo $item['name']; ?></td>
    <td><a href="index.php?r=my_page_update&id=<?php echo $item['id']; ?>"> Изменить </a> / 
        <a href="index.php?r=my_page_delete&id=<?php echo $item['id']; ?>"> Удалить </a></td>
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
