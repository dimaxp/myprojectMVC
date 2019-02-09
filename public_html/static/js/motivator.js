
(function () {
    'use strict';







function slider() {

    let slides = document.querySelectorAll('#slides .slide');
    var currentSlide = 0;
    var slideInterval = setInterval(nextSlide,5000);

    function nextSlide() {
        slides[currentSlide].className = 'slide';
        currentSlide = (currentSlide+1)%slides.length;
        slides[currentSlide].className = 'slide showing';
    }
}





    <!-- функция отправки формы заметки и формирование div -->

    function sendFilemotiv(event) {
        event.preventDefault();

        let form_data = new FormData(this);

        let xhrZam = new XMLHttpRequest();
        xhrZam.open("POST", this.action, true);
        xhrZam.send(form_data);
        xhrZam.onload = function (oEvent) {
            if (xhrZam.status == 200) {

                document.getElementById('picapica').value = '';
                document.getElementById('gotovfile').classList.remove("nona");
                var arr = xhrZam.responseText.split(':');
                console.log(arr);

                let beremsamslider = document.getElementById('slides');



                let newsli = document.createElement('li');
                newsli.classList.add('slide');
                let newimg = document.createElement('img');
                let samassil = document.createElement('a');
                samassil.classList.add('udalitodinmotiv');
                let spanka = document.createElement('span');
                spanka.classList.add('fa');
                spanka.classList.add('fa-times-circle');


                let ssilnaudalenie = '/load/del/'+arr[0];
                let formiruemsrc = 'static/motiv/'+arr[1]+'.jpg';
                samassil.href = ssilnaudalenie;

                newimg.setAttribute('src',formiruemsrc);


                beremsamslider.appendChild(newsli);
                newsli.appendChild(samassil);
                samassil.appendChild(spanka);
                newsli.appendChild(newimg);

                samassil.addEventListener("click", action);
                function action (event) {
                    <!--Дублируем скрипт для скрытия элемента -->
                    event.preventDefault();
                    let attribute = this.getAttribute("href");
                    let par = this.parentElement;
                    let xhr2 = new XMLHttpRequest();
                    xhr2.open("GET", attribute, true);

                    xhr2.send(null);

                    xhr2.onload = function (oEvent) {
                        if (xhr2.status == 200) {





                            par.remove();
                        }
                    }

                }

























            }
        };
    }







    function delMotiv() {
        event.preventDefault();
        let attribute = this.getAttribute("href");
        let par = this.parentElement;
        let xhr2 = new XMLHttpRequest();
        xhr2.open("GET", attribute, true);

        xhr2.send(null);

        xhr2.onload = function (oEvent) {
            if (xhr2.status == 200) {





                par.remove();
            }
        }




    }





    function addFormFileListener() {
    let moyforfile = document.getElementById('tasamfile');

          moyforfile.addEventListener('submit', sendFilemotiv);

    }



    function delFormFileListener() {
        let classname = document.getElementsByClassName("udalitodinmotiv");
    for (let i = 0; i < classname.length; i++) {
        classname[i].addEventListener('click', delMotiv);
    }
    }



    function SliListener() {
        let classnamezak = document.getElementById("zak");
            classnamezak.addEventListener('click', slider);

    }




    SliListener()
    slider();
    addFormFileListener();
    delFormFileListener();


}());