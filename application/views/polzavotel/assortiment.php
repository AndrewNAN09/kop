
<style>.sss {
        background-image: url('/public/images/about-bg.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        }
</style>
<div class="sss">

        <h1><a  href="/polzavotel/lichka/" style="text-decoration: none">Вернуться в личный кабинет</a></h1>
    <h2><div><a href="/polzavotel/korzena" style="text-decoration: none">Ваша корзина<sub><?php echo $v;?> </sub></a></div></h2>
    <h2><div><a href="/polzavotel/assortiment" style="text-decoration: none">Показать весь ассортимент</a></div></h2>
    <div class="container " >

        <form action="/polzavotel/assortiment" method="post">
            <input type="text" minlength="4"name="poisk">
            <button type="submit" name="knop">Поиск</button>
        </form>
        <div class="clearfix">

                <ul class="pagination"  >

        <?php
        for($i = 1; $i <= $c; $i = $i + 1) {//объявили переменнйю ай, цикл выполняется пока ай<5, дальше выполним действие которое изменяет наш счетчик
        ?>

                    <div >
                    <li class="page-item"  >
        <a class="page-link" href='/polzavotel/assortiment/<?= $i; ?>'><?= $i; ?> </a>

                    </li>
                    </div>

            <?php
        }?>
                </ul>


</div>
        <div class="row">
            <!--создали некий ряд-->
            <div class="col-md-8" style="background-color:#ff9999; text-align: center"><h5>Наименование</h5></div>
            <!--создали колонку(столбцы) с ширеной 4 ячейки  -->

            <div class="col-md-2" style="background-color: #99CCFF; text-align: center"><h5>Стоимость</h5> </div>
            <div class="col-md-2" style="background-color: #99CCFF; text-align: center"><h5>В корзину</h5></div>
        </div>
        <?php
        foreach ($name as $key => $val){
        ?>

        <div class="row">
            <!--создали некий ряд-->
            <div class="col-md-8" style="background-color:#ff9999"><?php echo $val['name']?></div>
            <!--создали колонку(столбцы) с ширеной 4 ячейки  -->

            <div class="col-md-2" style="background-color: #99CCFF; text-align: center"><?php echo $val['poz'] . "руб"; ?> </div>
            <div class="col-md-2" style="background-color: #99CCFF; text-align: center"><div>
                    <button  type="button" id="a5" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="size: 10%"  data-id='<?php echo $val['id']; ?>' data-poz='<?php echo $val['poz']; ?>' data-name='<?php echo $val['name']; ?>' >В корзину</button>
                </div>
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


                                    <input type="button" id="a222"  value="в корзину">
                                </form>

                            </div>


                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>

        </div>
        <?php }
        ?>

    </div>
</div>