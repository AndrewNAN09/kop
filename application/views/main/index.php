


<div class="page-content">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <!--fixed-top(botton) привязываем вверх или вниз, sticky-top привязывает к верху но делает отступ тесту чтобы не загораживать-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--кнопка сенгвич-->

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <!--justify-content-end (center, start) все меню в конец цент в начало-->
            <ul class="navbar-nav">

                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Для клиентов
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/main/avtoriz">Войти</a>
                        <a class="dropdown-item" href="/main/registr">Зарегится</a>

                    </div>
                </li>

            </ul>
            <span class="navbar-text">Служба поддержки): 89276810874</span>

        </div>
    </nav>


<header class="masthead" style="background-image: url('/public/images/about-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading" style="padding:25px 0 25px">
                    <div class="container" >




                        <?php foreach ($name as $val): ?>
                            <div  style=" box-shadow: 0 0 8px 8px white inset; opacity: 0.6; min-height: 400px; background-image: url('/public/materials/<?php echo $val['id']; ?>.jpg'); background-repeat: no-repeat; background-size: cover;  border-radius: 70px;">

                                <div class="post-preview" style="padding:50px 0 50px">

                                    <h2 class="post-title"><?php echo $val['title']; ?></h2>
                                    <p><?php echo htmlspecialchars($val['text'], ENT_QUOTES); ?></p>


                                </div>
                            </div>

                        <?php endforeach; ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

