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
    <link rel="stylesheet" type="text/css" href="/media/genshadow/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/media/css/main.css">
    <link rel="stylesheet" type="text/css" href="/media/css/animation.css">


</head>

<body>

    <div id="wrapper">

        <?php include "../includes/header.php"; ?>





        <div class="container">
            <h1>Обратная связь</h1>
            <form id="mailForm">

                <input type="email" id="email" name="email" placeholder="Email" class="form-control"><br>
                <input type="text" id="name" name="name" placeholder="Введите ваше имя" class="form-control"><br>
                <input type="phone" id="phone" name="phone" placeholder="Телефон" class="form-control"><br>
                <textarea name="message" id="message" placeholder="Email" class="form-control"></textarea><br>
                <button type="button" id="sendMail" class="btn btn-success">Отправить</button>
            </form>
            <div id="errorMess"></div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/media/genshadow/js/formMail.js"></script>



        <?php include "../includes/footer.php"; ?>


    </div>

</body>


</html>