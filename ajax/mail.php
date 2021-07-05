<?php
                   //принимаем данные и отправляем на почту

        

        $email = $_POST['email'];       //извлекаем данные из пост передачи
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";                              //заносим в переменную кодировку и шифруем тему письма тоисть конструкция для передачи темы письма

        $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";                   //откуда и кому пересылаем и задаем формат данных

        $success = mail("uservice848@gmail.com",$subject,$message,$headers);               //функция отправки данных на почту результат ее выполнения записываем в переменную записываем в нее тру или фолз и данные куда передаем
        echo $success;


?>