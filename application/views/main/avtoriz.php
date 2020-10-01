


    <header class="masthead" style="background-image: url('/public/images/about-bg.jpg')">


                    <div class="page-heading">
                        <div class="container" >




                            <div class="row ">
                                <!--создали некий ряд-->
                                <div class="col-md-4" ></div>
                                <!--создали колонку(столбцы) с ширеной 4 ячейки  -->
                                <div class="col-md-4" ><div class="card card-login mx-auto mt-5">
                                        <div class="card-header" style="color: black" >Вход в панель Клиента</div>
                                        <div class="card-body" >
                                            <form action="/polzavotel/vhod" method="post">
                                                <div class="form-group" >
                                                    <label style="color: black">Логин</label>
                                                    <input class="form-control" type="text" name="login" required >
                                                </div>
                                                <div class="form-group" >
                                                    <label style="color: black">Пароль</label>
                                                    <input class="form-control" type="password" name="password" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block">Вход</button>
                                            </form>
                                            <div><a href="/" style="text-decoration: none">на главную</a></div>
                                            <div><a href="/main/registr/" style="text-decoration: none">зарегистрироваться</a></div>

                                        </div>
                                    </div></div>
                                <div class="col-md-4" ></div>
                            </div>



                    </div>
                </div>

    </header>






<script src="/public/scripts/form.js"></script>