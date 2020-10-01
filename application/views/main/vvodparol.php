<style>.sss {
        background-image: url('/public/images/about-bg.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }</style>
<script src="/public/scripts/js1.js"></script>
<div class="sss">
    <div class="container ">
        <div class="row ">
            <!--создали некий ряд-->
            <div class="col-md-4" ></div>
            <!--создали колонку(столбцы) с ширеной 4 ячейки  -->
            <div class="col-md-4" ><div class="card card-login mx-auto mt-5">

                    <div class="card-header" >Вам на почту отправили пароль для подтверждения ваших данных</div>
                    <div class="card-body" >
                        <form action="/polzavotel/prover" method="post">
                            <div class="form-group">
                                <?php if($_SESSION['a']!=[]){
                                if($_SESSION['b']==2){  ?>
                                    <label>"Пароль не верный!"<span id="timer"></span></label>
                                    <?php
                                }else{?>
                                    <label>Введите пароль в течении: <span id="timer"></span></label>
                                <?php
                                }}else{?>
                                    <label>Время ввода истекло!!!</label>
                                    <?php
                                }
                                ?>

                                <input class="form-control" type="text" name="parol" required >
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Отправить</button>
                        </form>
                        <a href="/main/registr" style="text-decoration: none">на станицу регистрации</a>
                        <a href="/polzavotel/zareg" style="text-decoration: none">повторно отправить пароль</a>
                    </div>


                </div></div>

            <div class="col-md-4" ></div>
        </div>
    </div>
</div>
