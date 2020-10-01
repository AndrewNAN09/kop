
$(document).ready(function(){
 
var id;
var poz;
var name;
var idk;
var idkk;
var kolk;
var summak;

    $('button').click(function() {
        idkk= $(this).attr('data-idkk');
        if(idkk !== undefined){
            $.post('/polzavotel/ajax/', {idkk: idkk},function (){
                location.href = '/polzavotel/korzena/';
            });

        }else {
            id = $(this).attr('data-id');
            poz = $(this).attr('data-poz');
            name = $(this).attr('data-name');
            idk = $(this).attr('data-idk');
            //var namek=   $(this).attr('data-namek');
            kolk = $(this).attr('data-kolk');
            summak = $(this).attr('data-summak');


            console.log(name);
            console.log("!!!" + idkk);


            /*var acce = document.getElementById("rrr");//создаем переменную access с в неё кладем то что получаем по средствам  метода document.getElementById("code1") - (обращяемся к объекту document с методом(функцией) getElementById - эта функция возвращает данные с id code9) ТОЕСТЬ ПОЛУЧАЕМ Параграф №1
            var cod = acce.innerHTML;//обратились к переменной access с помощью метода .innerHTML который считывает свойства(содержимое) переменной  и кладем в переменную code
            console.log(acce.innerHTML);
            acce.innerHTML = name;*/
            $("p#rrr").html(name);
        }
    });





    
var aba;
var a;


$('input[name="name1"]').keyup(function(){
     aba= $(this).val();
    console.log(aba);
    console.log(summak);
    if(summak !== undefined){
        a=aba*summak/kolk;
        console.log(a);
    }else {
        a = aba * poz;
        console.log(a);
    }



    var access = document.getElementById("sss");//создаем переменную access с в неё кладем то что получаем по средствам  метода document.getElementById("code1") - (обращяемся к объекту document с методом(функцией) getElementById - эта функция возвращает данные с id code9) ТОЕСТЬ ПОЛУЧАЕМ Параграф №1
    var code = access.innerHTML;//обратились к переменной access с помощью метода .innerHTML который считывает свойства(содержимое) переменной  и кладем в переменную code
    
    access.innerHTML = "Выбрано товара на сумму:" + a;
console.log(access.innerHTML);
});



$("#a222").click(function() {

    $.post('/polzavotel/ajax/', {id: id, kol: aba, summa: a, name: name},function (){
        location.href = '/polzavotel/assortiment/';
        });//передача данных в урл olzavotel/korzena и уходим на/polzavotel/korzena/
    //location.href = '/polzavotel/korzena/';
    //location.href = '/polzavotel/korzena/?id='+id+'&kol='+aba+'&summa='+a+'&name='+name;
});
    $("#a22").click(function() {

        $.post('/polzavotel/ajax/', {idk: idk, kol: aba, summa: a, name: name},function (){
            location.href = '/polzavotel/korzena/';
        });//передача данных в урл olzavotel/korzena и уходим на/polzavotel/korzena/
        //location.href = '/polzavotel/korzena/';
        //location.href = '/polzavotel/korzena/?id='+id+'&kol='+aba+'&summa='+a+'&name='+name;
    });

    });






