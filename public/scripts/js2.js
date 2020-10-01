$(document).ready(function () {
    var idzak;
$('button').click(function() {

    idzak = $(this).attr('data-zak');
    console.log(idzak);
    $.post('/admin/delete/', {idzak: idzak},function (){
        location.href = '/admin/zakazes/';

});
});
});