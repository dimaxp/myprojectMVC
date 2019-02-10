

<div class="container-fluid text-center">
    <div class="container">
<div class="row">

    <div class="col-md-6 settingsbody text-left">
        <h2>Настройки</h2>

        <form class="setting_form" action="/settings/savemail" method="post">
            <br>
            Изменить адрес электронной почты<br> <br>
            <input type="text" name="mail" id="mail"  value="<? echo $accaunt_info['email']; ?>" placeholder="адрес эл. почты">

            <br>

            <br>
            <div id="succes_mail_changed" class="alert alert-success nona">Ваша почта успешно изменена!</div>
            <br>
            <button class="btn btn-success" type="submit">сохранить</button>





        </form>



        <form class="setting_form" action="/settings/changepass" method="post">
            <br>
            <br>
            <br>
            Изменить пароль
            <br><br>
            <input type="password" name="oldpass" value="" placeholder="настоящий пароль"><br> <br>


            <div id="error_change_old_pass" class="alert alert-warning nona">Нет, у Вас не такой пароль</div>
            <br>

            <input type="password" name="newpass1" id="newpass1" value="" placeholder="новый пароль"><br> <br>

            <input type="password" name="newpass2" id="newpass2" value="" placeholder="повторите новый пароль"><br>
            <br>
            <div id="error_dva_nesovpad" class="alert alert-warning nona">Новые пароли не совпадают!</div>
            <div id="succes_pass_changed" class="alert alert-success nona">Ваш пароль успешно изменен!</div>
            <br>
<button class="btn btn-success" type="submit">сохранить</button>





        </form>



    </div>

</div>
    </div>
</div>


<script  src="/static/js/sendForm.js"></script>