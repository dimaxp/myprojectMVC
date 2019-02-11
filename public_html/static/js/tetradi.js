(function () {
    'use strict';





    function sendTetrad() {


        event.preventDefault();



        let text_tetrad = document.getElementById('tetrad').value;

        if (text_tetrad == '') {
            return;
        }


        let form_data = new FormData(this);


        let xhr = new XMLHttpRequest();
        xhr.open("POST", this.action, true);
        xhr.send(form_data);

        xhr.onload = function (oEvent) {
            if (xhr.status == 200) {
                document.getElementById('tetrad').value = '';

                let tetrads = document.getElementById('paneltetradey');
                let newa = document.createElement('a');
               newa.classList.add('tetrad_one');
                newa.href = '/tetrad/view/'+xhr.responseText;


                let titlezadacha = document.createTextNode(text_tetrad);
               newa.appendChild(titlezadacha);


                tetrads.appendChild(newa);



            }
        };












    }








    function addFormZametakListener() {
        let nashaformzadach = document.getElementById('add_new_tetrad');
        nashaformzadach.addEventListener('submit', sendTetrad);
    }


    addFormZametakListener();









}());