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
                    <a href="text-shadow-generator.php" class="nav-link arrow">&larr;</a>
                    <span>Text-shadow</span>
                </li>
                <li class="nav-item">
                    <a href="border-radius-generator.php" class="nav-link arrow">&rarr;</a>
                    <span>Border-radius</span>
                </li>
            </nav>
        </div>
    </div>
    <h1 class="title">box-shadow generator</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-6">
                <div class="card">
                    <div class="card-header bg-secondary">Настройки:</div>
                    <div class="card-body">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="inset">
                            <label class="custom-control-label" for="inset">Тень внутри элемента?</label>
                        </div>
                        <hr>
                        <label for="offset_x">Смещение по оси x</label>
                        <input class="custom-range" id="offset_x" type="range" min="-25" max="25" step="1" value="0">
                        <label for="offset_y">Смещение по оси y</label>
                        <input class="custom-range" id="offset_y" type="range" min="-25" max="25" step="1" value="0">
                        <label for="blur">Размытие</label>
                        <input class="custom-range" id="blur" type="range" min="0" max="25" step="1" value="8">
                        <label for="size">Растяжение</label>
                        <input class="custom-range" id="size" type="range" min="-20" max="20" step="1" value="6">
                        <hr>
                        <input type="color" value="#000000">
                        <label for="opacity">Прозрачность</label>
                        <input class="custom-range" id="opacity" type="range" min="0" max="1" step="0.01" value="0.5">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="card">
                    <div class="card-header bg-info">Результат:</div>
                    <div class="card-body">
                        <div class="result-box"></div>
                        <label for="resultRgba">Код CSS</label>
                        <textarea id="resultRgba" rows="3" readonly></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>








    <script src="/media/genshadow/jquery-3.6.0.js"></script>
    <script src="/media/genshadow/js/box-shadow-generator.js"></script>


    <?php include "../includes/footer.php"; ?>






</body>


</html>