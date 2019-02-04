


(function () {
    'use strict';







    function sendZadacha(event) {
        event.preventDefault();



        let text_zadacha = document.getElementById('zadacha').value;



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

                newDiv.appendChild(sozddata);



                left.appendChild(newDiv);







            }




        };






    }



    function addFormListener() {
       let nashaformzadach = document.getElementById('add_zadacha_f');
        nashaformzadach.addEventListener('submit', sendZadacha);

    }

    addFormListener();

}());