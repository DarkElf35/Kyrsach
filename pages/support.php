<?php
require_once "../includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Курсач</title>

    <!-- <link rel="stylesheet" type="text/css" href="/media/genshadow/bootstrap.css">-->

    <!-- Bootstrap Grid -->
    <link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="/media/genshadow/hidden.css">
    <link rel="stylesheet" type="text/css" href="/media/css/main.css">
    <link rel="stylesheet" type="text/css" href="/media/css/animation.css">

</head>

<body>

    <div id="wrapper">

        <?php include "../includes/header.php"; ?>

        <div id="content">
            <div class="container">
                <div class="row">
                    <section class="content__left col-xl-4 col-md-12">
                        <div class="block">


                            <div class="block__content">
                                <p style="text-align: center;">
                                    <img src="/media/images/techpodderzka.png">
                                </p>
                                <div class="full-text">
                                    <h1>Привет!!!</h1>

                                    <p>Сдесь вы можете задать вопрос разработчику этого сайта </p>


                                </div>
                            </div>
                        </div>



                    </section>

                    <div id="content">
                        <div class="container">
                            <div class="row text-center">
                                <section class="content__left col-xl-4 col-md-12">

                                    <div class=" col-md-3 ">
                                        <div class="circle">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <p class="support__text" style="text-align: center;">The Russian Federation,<br>The city of Vologda</p>
                                    </div>

                                    <div class="col-md-2 col-md-offset-2">
                                        <div class="circle">
                                            <i class="fas fa-phone fa-rotate-90"></i>
                                        </div>
                                        <p class="support__text" style="text-align: center;">+79115047712<br>89115047712</p>
                                    </div>

                                    <div class="col-md-2 col-md-offset-2">
                                        <div class="circle">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <p class="support__text" style="text-align: center;">uservice848@gmail.com<br>Dimitri.26@yandex.ru</p>

                                    </div>




                                </section>

                                <style>
                                    .fa-map-marker-alt,
                                    .fa-phone,
                                    .fa-envelope {
                                        font-size: 62px;
                                        color: white;
                                    }

                                    .circle {
                                        background: #3949ab;
                                        width: 100px;
                                        height: 100px;
                                        border-radius: 50%;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        margin: 35px auto 35px;
                                    }

                                    .support__text {
                                        margin: 0 0 35px 0;
                                    }
                                </style>
                                <div id="content">
                                    <div class="container">
                                        <div class="row">
                                            <section class="content__left col-xl-4 col-md-12">

                                                <div id="comment-add-form" class="block">
                                                    <h3>Задать вопрос на почту</h3>
                                                    <div class="block__content">
                                                        <form class="form" method="POST" action="sandmail.php">      <!-- если что сменить экшен на текущую страницу и интегрировать сюда слоника -->          
                                                            <!-- ссылка на скрипт -->


                                                            <div class="form__group">
                                                                <div class="row">
                                                                    <div class="col-md-3">


                                                                        <select class="form__quest" name="questions">
                                                                            <option disable select>Тема письма</option> <!-- сам заголовок выбран по умолчанию-->
                                                                            <option value="1">Вопрос по дизайну</option> <!-- для отслеживания опшинов -->
                                                                            <option value="2">Технический вопрос</option>
                                                                            <option value="3">Личный вопрос</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="email" class="form__control" name="email" placeholder="Введите ваш email" maxlength="50"  value="<?php echo $_POST['email']; ?>">
                                                                    </div>
                                                                    <div class="col-md-3 ">
                                                                        <p style="text-align: center;">
                                                                            <img src="capcha2.jpg" alt="">
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="number" class="form__control" name="capcha" placeholder="Введите капчу" maxlength="3"  value="<?php echo $_POST['capcha']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form__group group__mess">
                                                                <textarea name="message" class="form__control" placeholder="Новое сообщение ..." maxlength="150" required ><?php echo $_POST['message']; ?></textarea>
                                                            </div>
                                                            <div class="form__group">
                                                                <input type="submit" class="form__control" name="do_post" value="Отправить письмо">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>

                                </div>






                            </div>

                            <?php include "../includes/footer.php"; ?>
                            <script src="https://kit.fontawesome.com/d317c76b34.js" crossorigin="anonymous"></script>

</body>

</html>