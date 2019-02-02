(function () {
    'use strict';

    function sendForm(event) {
        event.preventDefault();

        let form_data = new FormData(this);
        console.log(form_data);

        let xhr = new XMLHttpRequest();
        xhr.open("POST", this.action, true);
        xhr.send(form_data);

        xhr.onload = function (oEvent) {
            if (xhr.status == 200) {
                console.log(xhr.responseText);

                responseHandler(xhr.responseText);




            }
        };
    }

    function responseHandler(response) {
        if (response === "USER_ADDED") {
            window.location.href = "/panel";
        } else if (response === "USER_AUTH"){
            window.location.href = "/panel";
        } else {
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