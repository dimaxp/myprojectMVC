(function () {
    'use strict';


    function addClassListener() {

    let classname = document.getElementsByClassName("bezperezagruza");
    let ZabiraemSsil = function(event) {
        event.preventDefault();
        let attribute = this.getAttribute("href");
        let predok = this.closest(".skroy");


        let xhr2 = new XMLHttpRequest();
        xhr2.open("GET", attribute, true);

        xhr2.send(null);

        xhr2.onload = function (oEvent) {
            if (xhr2.status == 200) {
                console.log(xhr2.responseText);
                predok.classList.add('nenado');
            }
        };

    };



    for (let i = 0; i < classname.length; i++) {
        classname[i].addEventListener('click', ZabiraemSsil);
    }


}



    addClassListener();

}());