
// выставляем секунды
var sec=00;
// выставляем минуты
var min=01;

function refresh()
{
    sec--;
    if(sec==-01){sec=59; min=min-1;}
    else{min=min;}
    if(sec<=9){sec="0" + sec;}
    time=(min<=9 ? "0"+min : min) + ":" + sec;
    if(document.getElementById){timer.innerHTML=time;}
    inter=setTimeout("refresh()", 1000);
    // действие, если таймер 00:00
    if(min=='00' && sec=='00'){
        sec="00";
        clearInterval(inter);
        /* выводим сообщение в элемент с id="tut", например <div id="tut"></div> */

        //timer.innerHTML="Время вышло!";
        $.post('/polzavotel/deleteSES/');

        /* либо модальное окно */
        //alert('Таймер завершил свою работу!');

        /* либо переход на какой-то адрес */
        //window.location='http://www.net-f.ru/';

        /* либо любой другой Ваш код */
    }
}

