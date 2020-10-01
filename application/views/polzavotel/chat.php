<!DOCTYPE html>
<html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial;
            font-size: 20px;
            font-style: italic;
            font-weight: bold;
        }
        input[type=text]{
            width:300px;
            height: 50px;
        }
        #qqq{
            width: 350px;
            height: 250px;
            border: 1px solid;
            overflow: auto;// прокрутка
        }
    </style>

    <!--<meta http-equiv="Refresh" content="1"/>-->

</head>


<body>
<div id="qqq"></div>
<br>
<form  action="polzavotel/chat_dobav" method='post'>
    <input type ="text" name="text" value=""><br>
    <input type='submit' value='Ответить' class='button'>
</form>

<br>

<a href="/polzavotel/lichka">НАЗАД</a>
<br>


<?php
/*include "connect.php";
    $stat=mysqli_query($coneection, "SELECT * FROM `chat`ORDER BY`id_chat` DESC");


while($st = mysqli_fetch_assoc($stat)){

    $id=$st['id_user'];
     $ww=mysqli_query($coneection, "SELECT * FROM `user` WHERE `id` = '$id'");
     $w = mysqli_fetch_assoc($ww);

    echo $w['login']."=>";
    echo $st['text']."<br>";
}*/
?>

<script type="text/javascript" src="../../../public/scripts/form1.js"></script>
</body>
</html>