<?php
// ПЕРЕЧЕСЛЯЮ ссылки с присвоением ID
$menu = array(
    array(
        "link" => "О нас",
        "href" => "index.php?id=glavnaj",
        'children' => array(
            array(
                "link" => "Контакты",
                "href" => "index.php?id=contacts"),
            array("link" => "Галерея", "href" => "index.php?id=galery"),
            array("link" => "Обратная связь", "href" => "index.php?id=obratnaj"),
        )
    )
);
for ($i = 0; $i < count($menu); $i++) {
    echo "<dt><a href='" . $menu[$i]['href'] . "'>" . $menu[$i]['link'] . "</a></dt>";
    for ($j = 0; $j < count($menu[$i]['children']); $j++) {
        echo "<dd><a href='" . $menu[$i]['children'][$j]['href'] . "'>" . $menu[$i]['children'][$j]['link'] . "</a></dd>";
    }
}