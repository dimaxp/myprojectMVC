<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Дипломный проект - Пример</title>
    <meta name="description" content="На этой странице содержится пример страницы проекта">
    <meta name="keywords" content="Дипломная работа, пример, итомо, проект, git, html, php">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/static/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>





</head>
<body>
<div class="container-fluid">
    <div class="row verhpage">
        <div class="col-md-2 col-sm-12 mobillogo">
            <a class="btn btn-success diplomlogo" href="/panel">Дипломная работа</a>
        </div>

        <nav class="col-md-10 col-sm-12 text-right">
            <ul class="vnmenu">
                <li><a class="btn btn-success" href="/account/logout">Выход</a></li>
                <li><a class="btn btn-secondary" href="/settings">Настройки</a></li>
            </ul>
        </nav>
    </div>
<div class="samap"><?php include_once $view; ?></div>


</body>




<script  src="/static/js/skeditors.js"></script>

<script  src="/static/js/bezperezagruza.js"></script>
<!--<script>


    $('#motivatorModalzagruzka').on('shown.bs.modal', function () {
        $('#Formazag').trigger('focus')
    });
</script>-->

</html>