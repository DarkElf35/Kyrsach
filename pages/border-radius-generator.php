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
                    <a href="box-shadow-generator.php" class="nav-link arrow">&larr;</a>
                    <span>Box-shadow</span>
                </li>
                <li class="nav-item">
                    <a href="text-shadow-generator.php" class="nav-link arrow">&rarr;</a>
                    <span>Text-shadow</span>
                </li>
            </nav>
        </div>
    </div>
    <h1 class="title">border-radius generator</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header bg-success">Настройки:</div>
                    <div class="card-body">
                        <table border='0' align='center'>
                            <tr>
                                <td width="50%">
                                    <label for="top_left">top-left</label>
                                    <input class="custom-range" id="top_left" type="range" min="0" max="75" step="1" value="75">
                                </td>
                                <td></td>
                                <td width="50%">
                                    <label for="top_right">top-right</label>
                                    <input class="custom-range" id="top_right" type="range" min="0" max="75" step="1" value="75">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="result-box"></div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="bottom_left">bottom-left</label>
                                    <input class="custom-range" id="bottom_left" type="range" min="0" max="75" step="1" value="0">
                                </td>
                                <td></td>
                                <td>
                                    <label for="bottom_right">bottom-right</label>
                                    <input class="custom-range" id="bottom_right" type="range" min="0" max="75" step="1" value="75">
                                </td>
                            </tr>
                        </table>

                        <label for="resultRgba">Код CSS</label>
                        <textarea id="resultRgba" rows="4" readonly></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <script src="/media/genshadow/jquery-3.6.0.js"></script>
    <script src="/media/genshadow/js/border-radius-generator.js"></script>



    <?php include "../includes/footer.php"; ?>






</body>


</html>