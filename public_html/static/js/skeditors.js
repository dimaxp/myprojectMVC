CKEDITOR.replace( 'editor' );
CKEDITOR.instances['editor'].on('change', function() { CKEDITOR.instances['editor'].updateElement() });

$(function() {
        $('#editor').ckeditor({
            enterMode : CKEDITOR.ENTER_BR,
            shiftEnterMode: CKEDITOR.ENTER_P
        });
    });
