(function () {
    'use strict';

    function sendForm(event) {
        event.preventDefault();


        <!-- сбрасываем все ошибки -->
        let classname = document.getElementsByClassName("alert");
        for (let i = 0; i < classname.length; i++) {
            classname[i].classList.add('nona');
        }
        <!-- конец сбрасываем все ошибки -->





        let form_data = new FormData(this);
        console.log(form_data);

        let xhr = new XMLHttpRequest();
        xhr.open("POST", this.action, true);
        xhr.send(form_data);

        xhr.onload = function (oEvent) {
            if (xhr.status == 200) {


                responseHandler(xhr.responseText);




            }
        };
    }

    function responseHandler(response) {
        if (response === "USER_ADDED") {
            window.location.href = "/panel";
        } else if (response === "USER_AUTH"){
            window.location.href = "/panel";
        }

        else if (response === "USER_EXISTS"){

            let err1 = document.getElementById('error_register_login_allready');
            err1.classList.remove('nona');

        }

        else if (response === "MAIL_EXISTS"){

            let err1 = document.getElementById('error_register_mail_allready');
            err1.classList.remove('nona');

        }




        else if (response === "LOGIN_ERROR"){

            let err1 = document.getElementById('error_login_netu');
            err1.classList.remove('nona');

        }

        else if (response === "PWD_ERROR"){

            let err1 = document.getElementById('error_auth_pass');
            err1.classList.remove('nona');

        }

        else if (response === "DB_ERROR"){
            console.log("ошибка при добавлении в базу");
        }

        else if (response === "DB_ERROR"){
            console.log("ошибка при добавлении в базу");
        }

        else if (response === "PWD_NE_RAVEN"){


            let err1 = document.getElementById('error_dva_nesovpad');
            err1.classList.remove('nona');

        }    else if (response === "OLDPWD_i_NEWPWD_ERROR"){

            let err1 = document.getElementById('error_change_old_pass');
            err1.classList.remove('nona');


        }

        else if (response === "PASS_NE_POMENYAL"){
            console.log("чет не сменился пароль");
        }


        else if (response === "PASS_SMENIL"){


            let err1 = document.getElementById('succes_pass_changed');
            err1.classList.remove('nona');

        }



        else if (response === "MAIL_CHANGE"){
            let err1 = document.getElementById('succes_mail_changed');
            err1.classList.remove('nona');




        }   else if (response === "MAIL_PROBLEMA"){
            console.log("проблема с изменением почты");
        }







        else {
            console.log("вывод ошибки данных");
        }
    }

    function addFormListener() {
        for (let i = 0; i < document.forms.length; i++) {
            document.forms[i].addEventListener('submit', sendForm);
        }
    }

    addFormListener();

}());