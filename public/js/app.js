$(document).ready(function(){

    $("#modal").click(function(){
        $('#modal-add').modal('show');
    });

    $("#link_list").click(function(){
        $('#modal-detail').modal('show');
    });


    $('.select.dropdown')
        .dropdown()
    ;

    $("#btn-hasard").click(function(){
        $( "#dimmer-hasard" ).addClass( "active" );
    });

    $('.message .close').on('click', function() {
        $(this).closest('.message').fadeOut();
    });


    //form submit
    $("#submit-form").click(function() {
        console.debug('form submit');
        var $form = $("#form-ressource");
        // console.debug($form);
        var name = $("#name").val();
        var link = $("#link").val();
        var description = $("textarea#description").val();
        var Categories_id = $("#category").val();
        var dataString = 'name=' + name + '&link=' + link + '&description=' + description + '&Categories_id=' + Categories_id;

          if (name == '' || link == '' || description == '' || Categories_id == 0) {
             //alert("Please Fill All Fields");
              $('#message').addClass('ui negative message')
              $("#message").html('Tous les champs sont obligatoires');
          }
         else {
             console.debug("ajax sumitting begin");
             $.ajax({
                 type: "POST",
                 url: $form.attr('action'),
                 data: dataString,
                 cache: false,
                 success: function (data, statusText, xhr) {
                     if (xhr.status === 200){
                         $('.ui.modal').modal('hide');
                         //$('#message-succes').addClass('ui success message')
                         //$("#message-succes").html('Youpiiiiiiiiiiiiiiiiiiiiii, votre ressource à été ajouté avec succès');
                         $('#modal-succes').modal('show');
                     }
                     console.log(xhr);
                     //alert(result);
                 }
             });
         }
        return false;
    });
});