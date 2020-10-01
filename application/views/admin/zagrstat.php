
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                        <form action="/admin/zagruz" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Название</label>
                                <input class="form-control" type="text" name="title" >
                            </div>

                            <div class="form-group">
                                <label>Текст</label>
                                <textarea class="form-control" rows="3" name="text" ></textarea>
                            </div>
                            <div class="form-group">
                                <label>Изображение</label>
                                <input class="form-control" type="file" name="img" >
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div><h2><a href="/admin" style="text-decoration: none">Назад</a></h2></div>
    </div>
</div>
<script src="/public/scripts/form.js"></script>