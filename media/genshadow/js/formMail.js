$("#sendMail").on("click", function() { //выбираем по айди и задаем обработчик событий 
    var email = $("#email").val().trim(); //получаем значения из полей и удаляем пробелы
    var name = $("#name").val().trim();
    var phone = $("#phone").val().trim();
    var message = $("#message").val().trim();

    if (email == "") //если данные на вводе пустые 
    {
        $("#errorMess").text("Введите email"); //обработка ошибок
        return false; //выход из ветвления и не будет обработки
    } else if (name == "") {
        $("#errorMess").text("Введите имя");
        return false;
    } else if (phone == "") {
        $("#errorMess").text("Введите телефон");
        return false;
    } else if (message.length < 6) {
        $("#errorMess").text("Введите сообщение не менее 6 символов");
        return false;
    }

    $("#errorMess").text(""); //очистка сообщений от ошибки


    $.ajax({ //прописываем аякс технологию
        url: '../ajax/mail.php', //куда передаем данные и получаем ответ
        type: 'POST', //метод передачи
        cache: false, //кэширования не надо
        data: { 'name': name, 'email': email, 'phone': phone, 'message': message }, //передача данных через обьект в указанный выше файл
        dataType: 'html', //тип передаваемых данных для 100 процентной передачи вместо плэйнтекст
        beforeSend: function() { //вызов функции до срабатывания
            $("#sendMail").prop("disabled", true); //делаем неактивной сэнд мэил для плохо интернета чтобы не настакали вызовв отправки (кнопка неактивна - prop)
        },
        success: function(data) //когда уже получили какие то данные тоисть будет вызвана функция когда получим какие то данные
            {
                if (!data) //уведомления в сплывающем окне через ветвление
                    alert("Были ошибки или неполадки, сообщение не отправлено!");
                //иначе очищаем форму
                else
                    $("#mailForm").trigger("reset"); //очищаем с помощью метода триггер


                $("#sendMail").prop("disabled", false); //когда все обработано кнопка становится активной 
            }


    });

});