jQuery(document).ready(function() {
    
    "use strict";

    $('.asientos').change(function() {
        var asiento = $(this).val();
        console.log(asiento);
    if($(this).is(':checked')) {
        $(this).parent().addClass("bg-warning");
    } else {
        $(this).parent().removeClass("bg-warning");  
    }
});

        /*                  UI's
    -----------------------------------------------------------------------------------*/
    $('.tablaBusqueda').DataTable({"language": {"url": "js/DataTables/Spanish.json"}});

    $(".calendario").datepicker({
            dateFormat: 'dd-mm-yy',  
            changeMonth: true, changeYear: true, autoSize: true
        }).focus(function() {
            $(this).attr("placeholder","Enter->Actual");
        }).blur(function(){
            $(this).attr("placeholder","");
        });

});