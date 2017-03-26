jQuery(function(){
    jQuery('select[name="remote"]').on('change', function() {
        typeOnChange();
    });

    typeOnChange();

});


function typeOnChange() {
    var selectedType = jQuery('select[name="remote"]').val();
    var fields = {
        "local" : {
            'path' : '',
            'url' : '',
            'tmb_path' : ''
        },
        "ftp" : {
            'host' : '',
            'user' : '',
            'password' : '',
            'path' : '',
            'url' : '',
            'mode' : 'passive',
            'port' : 21,
            'tmb_path' : ''
        }
    };

    jQuery("table.content_table tr").not('.remote').hide();

    if (fields[selectedType] !== undefined) {
        jQuery.each(fields[selectedType], function(field, defaultValue) {
            var inputRow = jQuery("."+field);

            var val = inputRow.find("input").val();

            if (!val) {
                inputRow.find("input").val(defaultValue);
            }

            inputRow.show();
        })
    }
}
