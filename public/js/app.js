$(document).ready(function(){
    $("#modal").click(function(){
        $('.ui.modal').modal('show');
    });

    $('.select.dropdown')
        .dropdown()
    ;

    $("#btn-hasard").click(function(){
        $( "#dimmer-hasard" ).addClass( "active" );
    });
});