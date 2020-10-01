<style>.sss {
        background-image: url('/public/images/about-bg.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }</style>
<div class="sss">
<div class="container">
    <div class="row">
        <!--создали некий ряд-->
        <div class="col-md-4" ></div>
        <!--создали колонку(столбцы) с ширеной 4 ячейки  -->
        <div class="col-md-4 "  ><div class="card card-login mx-auto mt-5">
                <div class="card-header">Пожалуйста зарегистрируйтесь</div>
                <div class="card-body" >
                    <form action="/polzavotel/zareg" method="post">
                        <div class="form-group">
                            <label>Имя</label>
                            <input class="form-control" type="text" name="name" required >
                        </div>
                        <div class="form-group">
                            <label>Телефон</label>
                            <input class="form-control" type="tel" name="tel" required >
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" required >
                        </div>
                        <div class="form-group">
                            <label>Логин</label>
                            <input class="form-control" type="text" name="login" required >
                        </div>
                        <div class="form-group">
                            <label>Пароль</label>
                            <input class="form-control" type="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">зарегится</button>
                    </form>
                    <div >
                    <a href="/" style="text-decoration: none ">на главную</a>
                    </div>
                </div>
            </div></div>
        <div class="col-md-4" ></div>
    </div>
</div>
</div>
<script src="/public/scripts/form.js"></script>