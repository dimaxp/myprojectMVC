<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="static/css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="http://cdn.quilljs.com/1.3.0/quill.min.js"></script>
    <link href="http://cdn.quilljs.com/1.3.0/quill.snow.css" rel="stylesheet">

</head>

<body>

<nav class="menu">
    <ul>
        <li>
            <a href="/">Главная</a>
        </li>
        <li>
            <a href="/articles">Статьи</a>
        </li>
        <li>
            <a href="/goods">Товары</a>
        </li>
        <li>
            <a href="#search">Поиск</a>
        </li>
        <li>
            <a href="#authModal">Войти</a>
        </li>
        <li>
            <a href="#regModal">Регистрация</a>
        </li>
    </ul>
</nav>



<div><?php include_once $view; ?></div>

<div><?php include_once $view_zametka; ?></div>


</body>
<script  src="/static/js/sendForm.js"></script>
</html>
