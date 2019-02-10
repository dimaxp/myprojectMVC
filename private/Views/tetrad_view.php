

<div class="container-fluid text-center">
    <div class="container">
        <div class="row">



            <form name="add_zapis_tetrad" id="add_zapis_tetrad"  action="/tetrad/addonezapis">
                <div class="form-group row justify-content-center text-center">
                    <legend>Добавить запись</legend>
                    <br><br>
                    <textarea id="editor" class="col-md-12"  name="tetrad_desc_one" id="tetrad_desc_one" placeholder="Введите Вашу заметку" minlength="1" maxlength="2000" required></textarea>
                </div>
                <div class="form-group row justify-content-center">
                    <button class="btn btn-success" type="submit">Добавить запись</button>
                </div>
            </form>







        </div>
    </div>
</div>


<script  src="/static/js/sendForm.js"></script>