<div class="tab">
    <button class="tablinks" onclick="openTab(event, 'AddArticle')">Добавить статью</button>
    <button class="tablinks" onclick="openTab(event, 'AddGood')">Добавить товар</button>
    <button class="tablinks" onclick="openTab(event, 'Account')">Аккаунт</button>
</div>

<div id="AddArticle" class="tabcontent">
    <h3>Добавить статью</h3>
    <p>Заполните форму для добавления статьи</p>
    <form action="/article/add" method="post">
        <div>
            <label for="country"></label>
            <select>
                <option>Countries</option>
            </select>
        </div>
    </form>
    <div id="text-editor"></div>
    <button id="add_article" type="button">Добавить</button>
</div>

<div id="AddGood" class="tabcontent">
    <h3>Добавить товар</h3>
    <p>Форма для добавления товара</p>
</div>

<div id="Account" class="tabcontent">
    <h3>Личный кабинет</h3>
    <p>Информаия о пользователе</p>
</div>



<script src="/static/js/tabs.js"></script>
