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











function sendZadacha(event) {
        event.preventDefault();



        let text_zadacha = document.getElementById('zadacha').value;

        if (text_zadacha == '') {
            return;
        }


        let form_data = new FormData(this);
        console.log(form_data);

        let xhr = new XMLHttpRequest();
        xhr.open("POST", this.action, true);
        xhr.send(form_data);

        xhr.onload = function (oEvent) {
            if (xhr.status == 200) {
document.getElementById('zadacha').value = '';

                console.log(xhr.responseText);
                console.log(text_zadacha);

                let today = new Date();
                let dd = today.getDate();
                let mm = today.getMonth() + 1; //January is 0!

                let yyyy = today.getFullYear();
                if (dd < 10) {
                    dd = '0' + dd;
                }
                if (mm < 10) {
                    mm = '0' + mm;
                }
               today = dd + '.' + mm + '.' + yyyy;


                console.log(today);




let block_left = document.getElementsByClassName('left');
                let newDiv = document.createElement('div');
                newDiv.classList.add('zadacha');
                newDiv.classList.add('row')
                newDiv.classList.add('skroy');


                let sozddata = document.createElement('div');
                sozddata.classList.add('data');
                sozddata.classList.add('col-md-2');
                sozddata.classList.add('col-3');



                let vstavldata = document.createTextNode(today);
                sozddata.appendChild(vstavldata);

                let sozdtext= document.createElement('div');

                sozdtext.classList.add('zadacha_one');
                sozdtext.classList.add('col-md-8');
                sozdtext.classList.add('col-7');
                let vstavltext= document.createTextNode(text_zadacha);
                sozdtext.appendChild(vstavltext);



                let sozdgot = document.createElement('div');
                sozdgot.classList.add('gotovo');
                sozdgot.classList.add('col-2');
                sozdgot.classList.add('text-right');
                let ashka = document.createElement('a');
                ashka.classList.add('bezperezagruza');
                ashka.classList.add('fa');
                ashka.classList.add('fa-check-circle');


                ashka.href = '/zadacha/gotovo/'+xhr.responseText;

                ashka.addEventListener("click", action);
                function action (event) {
<!--Дублируем скрипт для скрытия элемента -->
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

                }



                sozdgot.appendChild(ashka);





                newDiv.appendChild(sozddata);
                newDiv.appendChild(sozdtext);
                newDiv.appendChild(sozdgot);


                left.appendChild(newDiv);


            }
      };
 }
















<!-- функция отправки формы заметки и формирование div -->

    function sendZametka(event) {
        event.preventDefault();



        let text_zametka = document.getElementById('editor').value;

        let form_data = new FormData(this);

        let xhrZam = new XMLHttpRequest();
        xhrZam.open("POST", this.action, true);
        xhrZam.send(form_data);
        CKEDITOR.instances['editor'].setData('');
        xhrZam.onload = function (oEvent) {
            if (xhrZam.status == 200) {
                document.getElementById('editor').value = '';






                let blockright = document.getElementsByClassName('right');
                let newsDiv = document.createElement('div');
                newsDiv.classList.add('row');
                newsDiv.classList.add('justify-content-center');
                newsDiv.classList.add('skroy');


                let sozdblockzam = document.createElement('div');
                sozdblockzam.classList.add('col-md-10');
                sozdblockzam.classList.add('block_zapis_zametki');

                let del_zam = document.createElement('div');
                del_zam.classList.add('delet_zametka');
                del_zam.classList.add('text-right');

                let a_del_zam = document.createElement('a');
                a_del_zam.classList.add('fa');
                a_del_zam.classList.add('fa-times');
                a_del_zam.classList.add('bezperezagruza');


                a_del_zam.href = '/zametka/del/'+xhrZam.responseText;






                right.appendChild(newsDiv);

            newsDiv.appendChild(sozdblockzam);


             sozdblockzam.appendChild(del_zam);
             del_zam.appendChild(a_del_zam);



                sozdblockzam.insertAdjacentHTML('beforeEnd', text_zametka);




                a_del_zam.addEventListener("click", action);
                function action (event) {
                    <!--Дублируем скрипт для скрытия элемента -->
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

                }














            }
        };
    }





    function addFormListener() {
       let nashaformzadach = document.getElementById('add_zadacha_f');
        nashaformzadach.addEventListener('submit', sendZadacha);
    }





    function addFormZametakListener() {
        let nashaformzadach = document.getElementById('add_zametka');
        nashaformzadach.addEventListener('submit', sendZametka);
    }















    addFormListener();
    addClassListener();
    addFormZametakListener();




}());