<div class="container-fluid">
    <div class="row verhpage">
        <div class="col-md-2 col-sm-12"><img class="rounded mx-auto d-block" alt="logo" src="images/logo.png"></div>

        <nav class="col-md-10 col-sm-12 text-right">
            <ul class="vnmenu">
                <li><a class="btn btn-success" href="about.html">Выход</a></li>
                <li><a class="btn btn-secondary" href="index.html">Настройки</a></li>
            </ul>
        </nav>
    </div>




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
                    <div class="data col-md-2 col-3">31.07.2018</div>
                    <div class="zadacha_one  col-md-8 col-7"> <? echo $zadacha['zadacha'] ?></div>
                    <div class="gotovo col-2 text-right"><a href="/zadacha/gotovo/<? echo $zadacha['id'] ?>" class="bezperezagruza fa fa-check-circle" aria-hidden="true"></a></div>
                </div>
            <? endforeach ?>



        </div>
        <!--конец левого большого блока-->




        <!--начало правого большого блока-->

        <div class="right col-lg-4 col-md-8 offset-xl-2 offset-md-2 offset-lg-1">
            <form name="add_zametka" action="/panel/addzametka">
                <div class="form-group row justify-content-center text-center">
                    <legend>Форма для добавления заметки</legend>
                    <br><br>
                    <textarea class="col-md-10"  name="zametka_name" id="zametka_name" placeholder="Введите Вашу заметку" minlength="1" maxlength="2000" required></textarea>
                </div>
                <div class="form-group row justify-content-center">
                    <button class="btn btn-success" type="submit">Добавить заметку</button>
                </div>
            </form>








            <? foreach ($zametki as $key => $zametka  ): ?>
            <div class="row justify-content-center skroy">
                <div class="col-md-10 block_zapis_zametki">
                    <div class="delet_zametka text-right"><i class="fa fa-times" aria-hidden="true"></i></div>
                    <p><? echo $zametka['text_zametka'] ?></p>
                </div>
            </div>
            <? endforeach ?>





        </div>


        <!--конец правого большого блока-->



















    </div>

</div>
