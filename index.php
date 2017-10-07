<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!--    styles-->
    <link rel="stylesheet" href="js/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--    styles-->

    <title>Страна фей</title>
</head>
<body>

<img class="din_din" src="http://www.animated-gifs.eu/category_cartoons/cartoons-tinkerbell/0036.gif" alt="">




<!--Карусель-->
<div class="gallery">
    <?
    include('carusel.php');
    ?>
</div>
<!--Карусель-->


<!--Фильтры-->
<?
include('filters.php');
?>
<!--Фильтры-->

<div class="content">
    <?
    include('content.php')
    ?>
</div>


<!--scripts-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<!--scripts-->

</body>
</html>