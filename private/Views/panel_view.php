




    <div class="row razdeli">

        <div class="col-10">
            <div class="row">
                <div class="offset-md-1 col-1 text-center"><i class="ibig fas fa-briefcase"></i><span class="krug">5</span></div>
                <div class="col-1 text-center"><i class="ibig fas fa-bell"></i><span class="krug">11</span></div>
                <div class="col-1 text-center"> <i class="ibig fas fa-book-open"></i><span class="krug">12</span></div>
            </div>
        </div>

        <div class="col-2 text-center"><i class="ibig far fa-plus-square"></i></div>
    </div>


    <div class="row">
        <!--начало левого большого блока-->
        <div id="left" class="left col-lg-5 col-md-8 col-12  offset-lg-1 offset-md-2">

            <form class="" id="add_zadacha_f" name="add_zadacha" action="/panel/addzadacha">
                <div class="row">

                    <div class="col-md-8 col-12 paddnone">
                        <input class="" id="zadacha" autofocus autocomplete="off" name="zadacha" maxlength="200" minlength="1" required  placeholder="Введите задачу" type="text"></label>
                    </div>

                    <div class="offset-md-1 col-md-3  col-12 divknop paddnone">
                        <button class="btn btn-success gozadacha" type="submit">Добавить</button>
                    </div>

                </div>
            </form>



            <? foreach ($zadachi as $key => $zadacha  ): ?>
                <div class="row zadacha skroy">
                    <div class="data col-md-2 col-3"><? echo $zadacha['new_date'] ?></div>
                    <div class="zadacha_one  col-md-8 col-7"> <? echo $zadacha['zadacha'] ?></div>
                    <div class="gotovo col-2 text-right"><a href="/zadacha/gotovo/<? echo $zadacha['id'] ?>" class="bezperezagruza fa fa-check-circle" aria-hidden="true"></a></div>
                </div>
            <? endforeach ?>



        </div>
        <!--конец левого большого блока-->




        <!--начало правого большого блока-->

        <div id="right" class="right col-lg-4 col-md-8 offset-xl-2 offset-md-2 offset-lg-1">


<div id="motivator_right">

    <span class="text_none_sli">Ваш мотиватор :)</span>

            <ul id="slides">
                <? foreach ($motivators as $key => $motivator): ?>
                    <li class="slide showing">
                        <a class="udalitodinmotiv" href="/load/del/<? echo $motivator['id']?>">
                            <span class="fa fa-times-circle"></span>
                        </a>
                        <img src="<? echo $motivator['path']?>" />
                    </li>
                <? endforeach ?>
               <!-- <li class="slide showing">Slide 1</li>
                <li class="slide">Slide 2</li>
                <li class="slide">Slide 3</li>
                <li class="slide">Slide 4</li>
                <li class="slide">Slide 5</li>-->
            </ul>



            <a href="#" id="motivatorModalzagruzka" data-toggle="modal" data-target="#Formazag" class="text-center btn btn-warning">Загрузить изображение</a>


</div>

            <div class="clear"></div>














            <form name="add_zametka" id="add_zametka" action="/panel/addzametka">
                <div class="form-group row justify-content-center text-center">
                    <legend>Форма для добавления заметки</legend>
                    <br><br>
                    <textarea id="editor" class="col-md-12"  name="zametka_name" id="zametka_name" placeholder="Введите Вашу заметку" minlength="1" maxlength="2000" required></textarea>
                </div>
                <div class="form-group row justify-content-center">
                    <button class="btn btn-success" type="submit">Добавить заметку</button>
                </div>
            </form>








            <? foreach ($zametki as $key => $zametka  ): ?>
            <div class="row justify-content-center skroy">
                <div class="col-md-10 block_zapis_zametki">
                    <div class="delet_zametka text-right"><a href="/zametka/del/<? echo $zametka['id'] ?>" class="fa fa-times bezperezagruza" aria-hidden="true"></a></div>
                    <p><? echo $zametka['text_zametka'] ?></p>
                </div>
            </div>
            <? endforeach ?>





        </div>


        <!--конец правого большого блока-->



















    </div>

</div>









<!-- Модальное окно -->
<div class="modal" id="Formazag" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Загрузить файл</h5>
                <button id="zak" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">


                <div id="gotovfile" class="nona">

                    Ваше изображение добавлено!

                </div>
                <br> <br>

              <form id="tasamfile" enctype="multipart/form-data" action="/load/files" method="post">

                <input  id="picapica" name="picture" size="" type="file" accept="image/*"> <br>

                  <br>
                  <br>

                <input class="btn btn-success" type="submit" value="Загрузить мотиватор">
            </form>


                <br><br>
            </div>

        </div>
    </div>
</div>