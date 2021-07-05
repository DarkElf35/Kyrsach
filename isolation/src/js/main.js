//JQuery < Document > ready(handler, ($: JQueryStatic) => void): JQuery < Document >
jQuery('document').ready(function() { //проверка на загрузку документа

    $('.card__header').click(function() { //отслеживаем клик по заголовку застайлил на курсор поинтер
        $(this).next().slideToggle(500); //след текуш элемент выбираем его тоисть сама трансформация акордеона
        if ($(this).find('.card__button .fa-angle-down').css('display') == 'none') { //через ветвление ищем эелемнты указанные и скрываем или показываем стрелки на акордеоне тоесть меняем стрелки
            $(this).find('.card__button .fa-angle-down').css('display', 'block');
            $(this).find('.card__button .fa-angle-up').css('display', 'none');

        } else {
            $(this).find('.card__button .fa-angle-down').css('display', 'none');
            $(this).find('.card__button .fa-angle-up').css('display', 'block');
        }
    })

});