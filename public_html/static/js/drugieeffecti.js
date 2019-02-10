(function () {
    'use strict';



    function otkroiZamtki() {

        this.classList.add('nona');

        let formachka = document.getElementById('add_zametka');
        let b_zakrit = document.getElementById('zakrit_zametka_button');
        formachka.classList.remove('nona');
        b_zakrit.classList.remove('nona');

    }



    function zakritZamtki() {

        this.classList.add('nona');

        let formachka = document.getElementById('add_zametka');
        let b_otkrit = document.getElementById('new_zametka_button');
        formachka.classList.add('nona');
        b_otkrit.classList.remove('nona');

    }








    function addRaskritZametkiListener() {
        let knopka_zametok = document.getElementById('new_zametka_button');
        knopka_zametok.addEventListener('click', otkroiZamtki);
    }


    function addZakritZametkiListener() {
        let knopka_zakrit_zametok = document.getElementById('zakrit_zametka_button');
        knopka_zakrit_zametok.addEventListener('click', zakritZamtki);
    }




    addRaskritZametkiListener();
    addZakritZametkiListener();

}());