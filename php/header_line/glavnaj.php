<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="assets/3p/jquery-2.1.1.js"></script>
    <script src="assets/3p/bootstrap/js/bootstrap.min.js"></script>
    <link href="assets/3p/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="gallery/nife.jpg" alt="">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="gallery/t23.jpg" alt="">
            <div class="carousel-caption">
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
</body>
</html>