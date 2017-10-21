/**
 * Created by Ivan on 20/10/2017.
 */
var htmlTarjeta =

    '<div class="tarjeta">'+
    '<div class="row">'+
    '<div class="col-md-10">'+
    '<p class="pregunta"></p>'+
    '</div>'+
    '<div class="col-md-2">'+
    '<div class="btnSwitch">' +
    '</div>'+
    '</div>'+
    '</div>'+
    '</div>';


var respuestas = [];


$(function(){



    $.post("pregunta0.html", function(result){

        $(".preguntas").append(result);
    })


});



