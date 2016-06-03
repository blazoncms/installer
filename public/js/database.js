jQuery(function(){
    jQuery('select[name="db_type"]').on('change', function() {
        typeOnChange();
    });

    jQuery('select[name="db_oracle_type"]').on('change', function() {
        toggleOracleInputs();
    });

    typeOnChange();

});


function typeOnChange() {
    var selectedType = jQuery('select[name="db_type"]').val();
    var fields = {
        "PDOMySql" : {
            'db_host' : '127.0.0.1',
            'db_port' : 3306,
            'db_name' : '',
            'db_charset' : 'UTF8',
            'db_user' : '',
            'db_password' : ''
        },
        "PDOPgSql" : {
            'db_host' : '127.0.0.1',
            'db_port' : 5432,
            'db_name' : '',
            'db_charset' : 'UTF8',
            'db_user' : '',
            'db_password' : '',
            'db_sslmode' : 'prefer'
        },
        "PDOSqlite" : {
            'db_user' : '',
            'db_password' : '',
            'db_path' : ''
        },
        "oci8" : {
            'db_oracle_type' : 'basic',
            'db_charset' : 'UTF8',
            'db_user' : '',
            'db_password' : '',
            'db_port' : 1521,
        }
    };

    jQuery("table.db_setup tr").not('.db_type').hide();

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

    toggleOracleInputs();
}

function toggleOracleInputs()
{
    var selectedType = jQuery('select[name="db_type"]').val();

    if (selectedType != 'oci8') {
        return;
    }

    var connectionType = jQuery('select[name="db_oracle_type"]').val();

    if (connectionType == 'tns') {
        jQuery('.db_host').hide();
        jQuery('.db_port').hide();
        jQuery('.db_service_name').hide();
        jQuery('.db_service').hide();
        jQuery('.db_net_service_name').show();
    } else {
        jQuery('.db_host').show();
        jQuery('.db_port').show();
        jQuery('.db_service_name').show();
        jQuery('.db_service').show();
        jQuery('.db_net_service_name').hide();
    }
}
