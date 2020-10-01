
    <div class="container">
        <h1>Все заказы</h1>

        <?php
//var_dump($name);
       foreach ($name as $key=>$vol):
            echo '<br>';
           echo $name[$key][0]['data']." ".$name[$key][0]['name'] ;
           //var_dump($name);
        foreach ($vol as $v) {
            //var_dump($v);
        }

                //echo $vol[$key]['data']. ' '. $vol[$key]['name'].'<br>';
            ?>
        <div>
            <?php foreach ($vol as $ke=>$vo){
          echo $vo['mame_z'].'<br>';
                if($vo['obr']==1){
                    $a = "Не обработан";
                }else {
                    $a = "Обработан";
                }
        }?>
        </div>
        <?php

           echo '<h6>'. $a. '</h6>';
           //echo $name[$key][0]['id_zak']
           ?>
           <div class="col-md-1" style=" text-align: center"><button  type="button" id="b" class="btn btn-primary" style="size: 10%; margin: 0; padding: 0;"   data-zak='<?php echo $name[$key][0]['id_zak'] ?>' >Удалить</button>
              </div>
       <?php
        endforeach;

        ?>

        </div>
    </div>
    <br>
    <h6><a  href="/admin" style="text-decoration: none">Назад</a></h6><br>
    <script src="/public/scripts/js2.js"></script>

