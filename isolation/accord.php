<?php
require_once "../includes/config.php";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/media/css/main.css">
    <link rel="stylesheet" type="text/css" href="/media/css/animation.css">
    <link rel="stylesheet" type="text/css" href="/media/genshadow/bootstrap.min.css">
    <link rel="stylesheet" href="build/css/style.min.css">
    <title>Accordeon</title>
</head>

<body>
    <div id="wrapper">

        <?php include "../includes/header.php"; ?>

        <div id="content">
            <div class="container">
                <div class="row">
                    <section class="content__left col-md-12">
                        <div class="block">


                            <div class="accordeon">
                                <div class="card">
                                    <div class="card__header">
                                        <div class="card__title">
                                            <i class="fas fa-address-card"></i> Визитка
                                        </div>
                                        <div class="card__button">
                                            <i class="fas fa-angle-down"></i>
                                            <i class="fas fa-angle-up"></i>
                                        </div>
                                    </div>
                                    <div class="card__body">
                                        <img src="image/dodelat.jpg" alt="" class="card__img">
                                        <div class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis optio sunt, dignissimos suscipit reiciendis asperiores, inventore possimus cum, architecto sit? Ratione laboriosam quis placeat natus? Nemo
                                            atque repudiandae culpa enim sint. Facere, inventore. Voluptas dignissimos magnam pariatur ad fuga, quis, ratione deserunt quam ipsam ipsa saepe rem asperiores fugiat.</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                </div>



                </section>

            </div>
        </div>
    </div>



    <div id="wrapper">



        <div id="content">
            <div class="container">
                <div class="row">
                    <section class="content__left col-md-12">
                        <div class="block">


                            <div class="accordeon">
                                <div class="card">
                                    <div class="card__header">
                                        <div class="card__title">
                                            <i class="fas fa-book"></i> Логотип
                                        </div>
                                        <div class="card__button">
                                            <i class="fas fa-angle-down"></i>
                                            <i class="fas fa-angle-up"></i>
                                        </div>
                                    </div>
                                    <div class="card__body">
                                        <img src="image/logotypes.jpg" alt="" class="card__img">
                                        <div class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis optio sunt, dignissimos suscipit reiciendis asperiores, inventore possimus cum, architecto sit? Ratione laboriosam quis placeat natus? Nemo atque repudiandae culpa
                                            enim sint. Facere, inventore. Voluptas dignissimos magnam pariatur ad fuga, quis, ratione deserunt quam ipsam ipsa saepe rem asperiores fugiat.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>



                </section>

            </div>
        </div>
    </div>


    <script src="https://kit.fontawesome.com/d317c76b34.js" crossorigin="anonymous"></script>

    
    <script src="jquery-3.6.0.js"></script>

    <script src="build/js/main.min.js"></script>

    <?php include "../includes/footer.php"; ?>
</body>

</html>