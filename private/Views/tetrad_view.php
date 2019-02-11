<style>
    #cke_editor {width: 730px;}

</style>





<div class="container-fluid text-center">
    <div class="container">
        <div class="row">


            <div class="col-md-8 mauto">
                <div class="row">
            <div class="col-md-6 name_tet text-left"><h2><? echo $samatetrad['title']; ?></h2></div>
            <div class="col-md-6 del_tet text-right">
                <a href="/tetrad/del/<? echo $samatetrad['id']; ?>">Удалить тетрадь</a>

            </div>

            </div>
            </div>

        </div>

            <div class="row">
            <form name="add_zapis_tetrad" id="add_zapis_tetrad" method="post"  action="/tetrad/onezapisadd">
                <div class="form-group row justify-content-center text-center">


                    <input type="text" name="tetrad_id" value="<? echo $samatetrad['id']; ?>" hidden>

                    <br><br>
                    <textarea id="editor" class="col-md-12"  name="tetrad_desc_one" id="tetrad_desc_one" placeholder="Введите Вашу заметку" minlength="1" maxlength="2000" required></textarea>
                </div>
                <div class="form-group row justify-content-center">
                    <button class="btn btn-success" type="submit">Добавить запись</button>
                </div>
            </form>
        </div>
        <br>
        <br>
<div class="clear"></div>

<div id="bloki">

            <? foreach ($tetrad_desc as $key => $tetrad_desc_one  ): ?>
            <div class="row text-center">
            <div class="block_zapis_tetrad col-md-8 skroy">


                    <a href="/tetrad/onezapisdel/<? echo $tetrad_desc_one['id'] ?>" class="bezperezagruza fa fa-times  delet_zametka_t" aria-hidden="true"></a>


                <div class="samtexttetr">
                    <? echo $tetrad_desc_one['text'] ?>
                </div>
            </div>
            </div>
                <br>
                <br>
            <? endforeach ?>

</div>








    </div>
</div>



<script  src="/static/js/onetetrad.js"></script>