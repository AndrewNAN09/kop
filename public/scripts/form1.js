$(document).ready(function () {//выполнять данную функцию после загрузкми всего документа


    $('form').submit(function (event) {//находим тег форм (все) и при нажатии на садмит выполнять функцию

        event.preventDefault();//данная функция отменяет отправку формы в браузере

        //alert($(this).attr('action'));//выводит именно этот (this) актион у которго был нажат сабмит


        $.ajax({
            type: "POST",//показываем метод отправки
            url: "http://kopeika.ru/polzavotel/chat_dobav",//показываем куда был отправлен запрос
            data: new FormData(this), //показываем данные формы которая была нажата отправлена
            contentType: false, //не будем передовать ни какие заголовки о контенте
            cache: false,//отключим кеширование
            processData: false,//чтобы наши данные не приобразовывались в строку

            //success: function (chat_dobav) {//когда форма отправлена и получен обратный ответ мы выведим

            //}

        });

        $(this).closest('form').get(0).reset();//очищаем форму
    });

});

        function taim() {


        $.ajax({
            type: "POST",//показываем метод отправки
            url: "http://kopeika.ru/polzavotel/chat1",//показываем куда был отправлен запрос
            //data: new FormData(this), //показываем данные формы которая была нажата отправлена
            //contentType: false, //не будем передовать ни какие заголовки о контенте
            //cache: false,//отключим кеширование
            //processData: false,//чтобы наши данные не приобразовывались в строку

            success: function (data) {//когда форма отправлена и получен обратный ответ мы выведим
                var q = document.getElementById("qqq");
                var w = q.innerHTML;
                //console.log(data);
                q.innerHTML = data;


            }

        });
    }

$(document).ready(function () {//выполнять данную функцию после загрузкми всего документа
    taim();
    setInterval('taim()', 3000);



});
