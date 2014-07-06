<?php head();?>
<div id="content_admin">
    <form enctype="multipart/form-data" method="POST" >
        <table border="1">
            <tr>
                <td> Описание: </td><td><input type="text" name="description" ></td>
            </tr>
            <tr>
                <td> Изображение: </td><td><input name=upfile type= file  ></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" name="buton" value=" Загрузить "</td>
            </tr>
         </table>
    </form>
</div>
<?php foot();?>