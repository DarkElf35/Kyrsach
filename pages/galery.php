<?php
require_once "../includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Курсач</title>


    <!-- Bootstrap Grid -->
    <link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="/media/css/main.css">
    <link rel="stylesheet" type="text/css" href="/media/css/animation.css">
    <link rel="stylesheet" type="text/css" href="/media/css/galery.css">
    <style>
        body {
            background: url('/media/imagesgalera/back.png');
        }
    </style>
</head>

<body>

    <div id="wrapper">

        <?php include "../includes/header.php"; ?>

        <div id="content">
            <div class="container">
                <div class="row">
                    <section class="content__left col-md-12">
                        <div class="block">

                            <h3>Красивая галерея на JS</h3>
                            <div class="block__content">


                                <div class="full-text">
                                    <div onMouseOver="btn_show()" onMouseOut="btn_noshow()" class="wrapper">
                                        <script type="text/javascript">
                                            //Массив, в котором содержатся ссылки на изображения
                                            var imageArray = [
                                                "/media/imagesgalera/0001.jpg",
                                                "/media/imagesgalera/0002.jpg",
                                                "/media/imagesgalera/0003.jpg",
                                                "/media/imagesgalera/0004.jpg",
                                                "/media/imagesgalera/0005.jpg",
                                                "/media/imagesgalera/0006.jpg",
                                                "/media/imagesgalera/0007.jpg",
                                                "/media/imagesgalera/0008.jpg",
                                                "/media/imagesgalera/0009.jpg",
                                                "/media/imagesgalera/0010.jpg",
                                                "/media/imagesgalera/0011.jpg",
                                                "/media/imagesgalera/0012.jpg",
                                                "/media/imagesgalera/0013.jpg",
                                                "/media/imagesgalera/0014.jpg",
                                                "/media/imagesgalera/0015.jpg",
                                                "/media/imagesgalera/0016.jpg",
                                                "/media/imagesgalera/0017.jpg",
                                                "/media/imagesgalera/0018.jpg",
                                                "/media/imagesgalera/0019.jpg",
                                                "/media/imagesgalera/0020.jpg",
                                            ];
                                            window.number = '0';      //номер текущего слайда
                                            //Привязываем количество картинок к размеру массива
                                            var imageCount = imageArray.length;

                                            function image(num) {
                                                //Если выбрана следующая картинка
                                                if (num == 1) {
                                                    //Если это последняя картинка, то не увеличиваем счетчик number
                                                    if (number < imageCount - 1) {
                                                        number++;
                                                        document.getElementById('images').src = imageArray[number];
                                                        document.getElementById('num_img').innerHTML = number + 1 + '/' + imageCount;
                                                    }
                                                } else { //Если выбрана предыдущая картинка					
                                                    //Если это первая картинка, то не уменьшаем счетчик number
                                                    if (number > 0) {
                                                        number--;
                                                        document.getElementById('images').src = imageArray[number];
                                                        document.getElementById('num_img').innerHTML = number + 1 + '/' + imageCount;
                                                    }
                                                }
                                            }
                                            //Функция для показа стрелочек
                                            function btn_show() {
                                                if (number != 0) document.getElementById('left').style.display = 'block';
                                                if (number != imageCount - 1) document.getElementById('right').style.display = 'block';
                                            }
                                            //Функция, которая прекращает показ стрелочек
                                            function btn_noshow() {
                                                document.getElementById('left').style.display = 'none';
                                                document.getElementById('right').style.display = 'none';
                                            }
                                            //Выводим картинки
                                            document.write('<img id="images" src="' + imageArray[0] + '">');
                                        </script>
                                        <!-- Стрелочка влево -->
                                        <div id="left" onclick="image(0)" class="left_right"><img src="/media/imagesgalera/left.png"></div>
                                        <!-- Стрелочка вправо -->
                                        <div id="right" onclick="image(1)" class="left_right" style="margin-left: 1200px; position: absolute; display: none;"><img src=" /media/imagesgalera/right.png"></div>
                                    </div>
                                    <center>
                                        <p style="font-size: 18px;color: #333;font-weight: bold;" id="num_img"></p>
                                    </center>
                                    <center><span class="myButton" onclick="image(0)">&lt;</span> <span class="myButton" onclick="image(1)">&gt;</span></center>
                                </div>
                            </div>
                        </div>



                    </section>

                </div>
            </div>
        </div>

        <?php include "../includes/footer.php"; ?>


    </div>

</body>
<footer>
    <style>
        footer {
            background: url('/media/imagesgalera/back.png');
        }
    </style>
</footer>

</html>