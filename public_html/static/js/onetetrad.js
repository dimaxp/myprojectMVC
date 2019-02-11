(function () {
    'use strict';





    <!-- функция отправки формы заметки и формирование div -->

    function sendonZapistetr(event) {
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

                let newsDiv = document.createElement('div');
                newsDiv.classList.add('row');
                newsDiv.classList.add('text-center');


                let new2Div = document.createElement('div');
                new2Div.classList.add('block_zapis_tetrad');
                new2Div.classList.add('col-md-8');
                new2Div.classList.add('skroy');

                let a_del_zam = document.createElement('a');
                a_del_zam.classList.add('fa');
                a_del_zam.classList.add('fa-times');
                a_del_zam.classList.add('bezperezagruza');
                a_del_zam.classList.add('delet_zametka_t');
                a_del_zam.href = '/tetrad/onezapisdel/'+xhrZam.responseText;


                let new3Div = document.createElement('div');
                new3Div.classList.add('samtexttetr');
                new3Div.insertAdjacentHTML('beforeEnd', text_zametka);


                let bloki = document.getElementById('bloki');

                bloki.appendChild(newsDiv);
                newsDiv.appendChild(new2Div);
                new2Div.appendChild(a_del_zam);
                new2Div.appendChild(new3Div);


               /* let blockright = document.getElementsByClassName('right');
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
*/













            }
        };
    }






    function addFormTetradzapisListener() {
    let nashaformzadach = document.getElementById('add_zapis_tetrad');
    nashaformzadach.addEventListener('submit', sendonZapistetr);
}


    addFormTetradzapisListener();


}());