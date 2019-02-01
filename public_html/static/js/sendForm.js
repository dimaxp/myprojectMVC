jQuery(document).ready(function () {
    'use strict';

    jQuery('form').submit(
        function (event) {
            event.preventDefault();
            let kuda = jQuery(this).attr('action');
            let form_data = new FormData(this);
            jQuery.ajax({
                url: kuda,
                type: 'post',
                data: form_data,
                processData: false,
                contentType: false,
                success: function (response) {
                    console.log(response);
                },
                error: function (err) {
                    console.log("err", err);
                }
            });
        }
    );