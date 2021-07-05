<?php
require_once "../includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Курсач</title>


    <!-- Bootstrap Grid -->


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Custom -->

    <link rel="stylesheet" type="text/css" href="/media/css/main.css">
    <link rel="stylesheet" type="text/css" href="/media/css/animation.css">

    <link rel="stylesheet" type="text/css" href="/media/genshadow/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/media/genshadow/generatorsshadow.css">



</head>





<body>
    <?php include "../includes/header.php"; ?>



    <div class="container">
        <div class="row justify-content-center">
            <nav class="nav">
                <li class="nav-item">
                    <a href="border-radius-generator.php" class="nav-link arrow">&larr;</a>
                    <span>Border-radius</span>
                </li>
                <li class="nav-item">
                    <a href="box-shadow-generator.php" class="nav-link arrow">&rarr;</a>
                    <span>Box-shadow</span>
                </li>
            </nav>
        </div>
    </div>



    <h1 class="top__info__meta">Text shadow generator</h1>


    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">Настройки:</div>
                    <div class="card-body">
                        <label for="font_size">Размер шрифта</label>
                        <input class="custom-range" id="font_size" type="range" min="8" max="40" step="1" value="40">
                        <label for="offset_x">Смещение по оси X</label>
                        <input class="custom-range" id="offset_x" type="range" min="-15" max=" 15" step="1" value="4">
                        <label for="offset_y">Смещение по оси Y</label>
                        <input class="custom-range" id="offset_y" type="range" min="-15" max=" 15" step="1" value="-1">
                        <label for="blur">Размытие</label>
                        <input class="custom-range" id="blur" type="range" min="0" max=" 15" step="1" value="0">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header bg-danger">Цвет:</div>
                    <div class="card-body">
                        <input type="color" value="#ff0000">
                        <label for="opacity">Прозрачность</label>
                        <input class="custom-range" id="opacity" type="range" min="0" max="1" step="0.01" value="1">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card">
                    <div class="card-header bg-warning">Рузультат:</div>
                    <div class="card-body">
                        <label for="resultHex">Цвет в HEX</label>
                        <textarea id="resultHex" rows="4" readonly></textarea><br>
                        <label for="resultRgba">Цвет в RGBA</label>
                        <textarea id="resultRgba" rows="3" readonly></textarea><br>



                    </div>
                </div>
            </div>
        </div>
    </div>










    <script src="/media/genshadow/jquery-3.6.0.js"></script>




    <script script src="/media/genshadow/js/text-shadow-generator.js">
    </script>



    <?php include "../includes/footer.php"; ?>






</body>


</html>