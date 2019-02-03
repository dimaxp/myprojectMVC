(function () {
    'use strict';



    function addClassListener() {

        let classname = document.getElementsByClassName("bezperezagruza");

        let ZabiraemSsil = function(event) {
            event.preventDefault();
            let attribute = this.getAttribute("href");
            let xhr = new XMLHttpRequest();
            xhr.open("GET", attribute);
            xhr.send(null);

        };



        for (let i = 0; i < classname.length; i++) {
            classname[i].addEventListener('click', ZabiraemSsil);
        }


    }

    addClassListener();



}());