<html>
    <head>
        <title>Admin</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <script src="../assets/3p/jquery-2.1.1.js"></script>
        <script src="../assets/3p/bootstrap/js/bootstrap.min.js"></script>
        <link href="../assets/3p/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Admin</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="<?php if (Registry::getValue('action') == 'news_list') : ?>active<?php endif; ?>">
                            <a href="index.php?r=news_list">Новости</a>
                        </li>
                        <li class="<?php if (Registry::getValue('action') == 'admins') : ?>active<?php endif; ?>">
                            <a href="index.php?r=admins">Администрирование</a>
                        </li>
                        <li class="<?php if (Registry::getValue('action') == 'products_list') : ?>active<?php endif; ?>">
                        <a href="index.php?r=products_list">Продукты</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">User<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.php?r=my_page">Моя страница</a></li>
                                <li><a href="default.php">Выход</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
