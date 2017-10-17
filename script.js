/**
 * Created by Ivan on 17/10/2017.
 */
$(function(){


    $('.selectpicker').selectpicker({
        style: 'btn-default',
        size: 4
    });

});


function enviarDatos() {
    $.ajax({
        type: "POST",
        async: true,
        url: "db/save.php",
        data: $("#frm_data").serialize(),
        dataType: "json",
        success: function (response) {

            var data = response;

            console.dir(response);

            if (data.estado == "true") {
                alert(data.mensaje);
                $('#frm_data')[0].reset();
                location.reload();
            }
        },
        error: function (e) {
            event.stopPropagation();
            alert("error al enviar solicitud, reintente");
        }
    });
}