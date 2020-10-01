
<div class="sss">
    <div class="container">
        <h1>История ваших заказов</h1>
        <div> <?php
//echo "<pre>";
//var_dump($name);

            foreach ($name[1] as $key=>$vol) {?>
                <div><h6> <?= $name[0][$key]['data']; ?></h6></div>

                <?php
                foreach ($vol as $k=>$v){?>
            <div> <?= $v['name']." количество : " .$v['kol']."шт. на сумму: ". $v['summa']. " руб."; ?></div>
                <?php } ?>
                <div> <?= "Сумма по заказу: " . $name[0][$key]['itog'] . "руб.";?></div>
            <?php if($name[0][$key]['obr'] == 1){?>
                <div><h6>Заказ не обработан</h6></div><br>
                <?php } else {?>
                <div><h6>Обработан</h6></div><br>
                <?php }

            } ?>



        </div>
    </div>
    <h2><a  href="/polzavotel/lichka/" style="text-decoration: none">Вернуться в личный кабинет</a></h2><br><br>
</div>
