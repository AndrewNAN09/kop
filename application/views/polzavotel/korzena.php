<style>.sss {
        background-image: url('/public/images/about-bg.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }</style>
<h1><?php echo $title?></h1>
<div class="sss">
    <div class="container " >
    <div class="container ">
        <?php $a=0; foreach ($name as $key => $val) {
                        ?>
            <?php  $a += $val['summa'];?>


              <div class="row">
            <!--создали некий ряд-->
            <div class="col-md-10" style="background-color:#ff9999"><?php echo $val['name'] ." количество: ".$val['kol']."шт сумма: ".$val['summa']. " руб."; ?></div>
        <!--создали колонку(столбцы) с ширеной 4 ячейки  -->

        <div class="col-md-1" style=" text-align: center"><button  type="button" id="b" class="btn btn-primary" style="size: 10%; margin: 0; padding: 0;"   data-idkk='<?php echo $val['id']; ?>' >Удалить</button>
              </div>
        <div class="col-md-1" style=" text-align: center">
                <button  type="button" id="a" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="size: 10%; margin: 0; padding: 0;"   data-idk='<?php echo $val['id']; ?>', data-name='<?php echo $val['name']; ?>', data-kolk='<?php echo $val['kol']; ?>' , data-summak='<?php echo $val['summa']; ?>'  >Изменить</button>

            <div class="modal fade" id="exampleModal">
                <div class="modal-dialog modal-sm" role="document" >
                    <!--modal-lg увеличивает sm уменьшает-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <p id="rrr" lass="modal-title"><p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                        </div>
                        <div class="modal-body" >
                            <div id="sss">Выбирите количество</div>
                            <form action="c.php" method="get" >
                                <input name="name1" type="text">


                                <input type="button" id="a22"  value="изменить">
                            </form>

                        </div>


                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>

    </div>

       <?php
        } ?><br>
        <div><h6><?php echo "В корзине товара на сумму: " . $a . " руб.";?></h6></div>
    </div><br><br><br>

        <a  href="/polzavotel/assortiment/" style="text-decoration: none; color: wheat"><h5>Вернуться к ассортименту</h5></a><br>
    <a  href="/polzavotel/zakaz/" style="text-decoration: none; color: wheat"><h5>Заказать</h5></a><br>
        <a  href="/polzavotel/lichka/" style="text-decoration: none;color: wheat"><h5>Вернуться в личный кабинет</h5></a><br>
    </div>
</div>
