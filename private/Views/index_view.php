


<? if ($_COOKIE['auth'] == 'true'): ?>


    <div class="col-md-3 col-12 text-right">
        <a href="/panel" class="knopka btn btn-warning">Перейти в панель</a>
    </div>


<? else: ?>


<div class="col-md-3 col-12 text-right">
    <a href="#popvhod" class="knopka btn btn-success">Вход</a>
    <a href="#popreg" class="knopka btn btn-warning">Регистрация</a>
</div>

<? endif; ?>



</div>





<div class="row">
    <div class="col-md-9 col-10 offset-1 content">
        <h1>Главная страница дипломного проекта ИТМО</h1>
        <br>
        <p>Это главная страница моего дипломного проекта для <strong>ИТМО.</strong></p>

        <p>Более подробно о моем проекте вы можете узнать на странице <a href="about.html">О проекте</a></p>


        <p>Еще несколько форм я разместил на странице <a href="page.html">Пример</a></p>

    </div>
</div>

<div class="row">
    <div class="col-md-9 col-10 offset-1 content">
        <h2>Последние новости проекта:</h2>

        <ol>
            <li>Главная страница отверстана сеткой</li>
            <li>К кнопкам вход и регистрация навешаны выпадающие окна</li>
            <li>В меню добавлено подменю</li>
            <li>Я попытался отверстать страницы сразу на bootstrap 4. Во время верстки у меня возникло несколько вопросов)</li>
        </ol>
    </div>
</div>




</div>


<div id="popvhod" class="popvhod col-md-3 col-12">

    <a href="#" class="close"><i class="fa fa-times close" aria-hidden="true"></i></a>
    <div class="clear"></div>
    <form name="login" action="/account/auth">
        <div>
            <label for="login">
                <input minlength="3" id="login" name="login" autofocus required placeholder="Введите Ваш логин" type="text"></label>
        </div>
        <br>
        <div id="error_login_netu" class="alert alert-warning nona">У нас нет такого пользователя!</div>
        <br>
        <div>
            <label for="passw">
                <input minlength="3" id="passw" name="pwd" required placeholder="Введите Ваш пароль" type="password"></label>
        </div>
        <br>
<div id="error_auth_pass" class="alert alert-warning nona">Вы ввели неверный пароль!</div>
        <br>

        <button class="btn btn-success" type="submit">Войти</button>
    </form>
</div>




<div id="popreg" class="popreg col-md-3 col-12">
    <a href="#" class="close"><i class="fa fa-times close" aria-hidden="true"></i></a>
    <div class="clear"></div>
    <form name="register" action="/account/registration">
        <div>
            <label for="login_reg">
                <input minlength="3" id="login_reg" name="login"  required placeholder="Введите Ваш логин" type="text"></label>
        </div>

        <br>
        <div id="error_register_login_allready" class="alert alert-warning nona">Такой пользователь уже зарегистрирован!</div>

        <br>
        <div>
            <label for="mail_reg">
                <input minlength="3" id="mail_reg" name="email"  required placeholder="Введите Вашу почту" type="email" pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})"></label>
        </div>
        <br>
        <div  id="error_register_mail_allready" class="alert alert-warning nona">Такая почта у нас уже есть!</div>

        <br>
        <div>
            <label for="passw_reg">
                <input minlength="3" id="passw_reg" name="pwd" required placeholder="Введите Ваш пароль" type="password"></label>
        </div>

      <!--  <br>
        <div>
            <label for="passw_reg">
                <input id="passw_reg" name="passw_reg" required placeholder="Повторите пароль" type="password"></label>
        </div><br> -->
        <button class="btn btn-success" type="submit">Зарегистрироваться</button>
    </form>
</div>


<!--
<form name="passfog" action="#">

    <fieldset>
        <legend>Форма восстановления пароля</legend>
        <div>
            <label for="mail_vost">
                <input id="mail_vost" name="mail_vost"  placeholder="Введите Вашу почту" type="email"></label>
        </div><br>
        <button type="submit">Восстановить пароль</button>
    </fieldset>


</form>
-->