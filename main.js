/**
 * Created by Ivan on 20/10/2017.
 */

//se especifica la cantidad
var cantidad = 1;

//En ésta variable se agregan los nombres de las variables que devuelven los datos en cada tarjeta
var respuestasTarjetas = [];

//Mensaje final al completar la encuesta
var mensajeFinal = '<p> Completaste la encuesta, presiona "Finalizado" para guardar los datos y comenzar otra vez.</p>';


var tarjetasVisibles = cantidad;

//variable con el resultado
var finalResult = [];

var continuar = false;

//carga
$(function(){

    //extend de animatecc
    $.fn.extend({
        animateCss: function (animationName) {
            var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            this.addClass('animated ' + animationName).one(animationEnd, function() {
                $(this).removeClass('animated ' + animationName);
            });
            return this;
        }
    });

    //bucle que carga las tarjetas
    for (var i = cantidad ; i >= 1 ; i --){

        llenarHTML(i);
    }
});

//función que carga las tarjetas 1 a 1
function llenarHTML(index){

    //rotación de las tarjetas
    var rotation = 5;
    var randomRotate = 0;//Math.floor(Math.random()*10) - rotation;

    //marco principal con boton siguiente y comenzar de nuevo
    var htmlFrame =
        '<div style="visibility: hidden ;transform:rotate('+ randomRotate +'deg)" class="row tarjeta" id="tarjeta'+ index +'">' +
            '<div class="tContainer'+ index+'">' +
            '</div>' +
            '<br>'+
            '<div class="col-xs-6 col-lg-6 col-md-6 col-sm-6">' +
                '<div class="btn btn-lg btn-block btn-default restart" ">Empezar de nuevo</div>' +
            '</div>' +
            '<div class="col-xs-6 col-lg-6 col-md-6 col-sm-6">' +
                '<div class="btn btn-lg btn-block btn-success" id="btnSiguiente'+ index +'">Siguiente</div>'+
            '</div>'+
        '</div>';

    $(".preguntas").append(htmlFrame);

    var html;

    async.series(
        [
            //carga por ajax
            function(callback){

                $.post("tarjeta"+ index +".html", function(result){

                    html = result;
                    callback();
                });


            },
            //carga en el contenedor
            function(callback){

                $(".tContainer"+ index).append(html);

                callback();
            },
            //hace visible a la tarjeta
            function(callback){

                $("#tarjeta"+index).css("visibility","visible");

                callback();
            },
            //animación de la tarjeta
            function(callback){

                $("#tarjeta"+index).animateCss("fadeInLeftBig");

                callback();
            }

        ]
    );

    //evento de botón empezar de nuevo
    $(".restart").click(function(){

        window.location.reload();
    });


    //evento del botón siguiente
    $("#btnSiguiente"+index).click(function(){

        async.series(
            [
                function(callback){

                    $( document ).trigger( "tarjeta"+ index );

                    callback();
                },
                function(callback){

                    if(continuar){

                        //escondo la tarjeta
                        $("#tarjeta"+index)

                            .animateCSS("fadeOutLeftBig",function(){

                                tarjetasVisibles -- ;

                                //comprobación de finalizar encuesta
                                if(tarjetasVisibles == 0){
                                    finalizarEncuesta();
                                }
                                //console.dir(respuestasTarjetas.respuesta1);
                                $(this).hide();
                            });

                    }

                    callback();
                }
            ]
        );
    });
}

function finalizarEncuesta(){

    var html =
        '<div class="finalizado tarjeta">'+
            '<h4>Encuesta Completada!</h4>'+
                mensajeFinal +
            '<div class="col-xs-4 col-lg-4 col-md-4 col-sm-4">' +
                '<button class="btn btn-lg btn-block btn-info" id="exportar">Exportar</button>'+
            '</div>' +
            '<div class="col-xs-4 col-lg-4 col-md-4 col-sm-4">' +
                '<div class="btn btn-lg btn-block btn-default restart" ">No guardar</div>' +
            '</div>' +
            '<div class="col-xs-4 col-lg-4 col-md-4 col-sm-4">' +
                '<button class="btn btn-lg btn-block btn-danger" id="finalizar">Finalizado</button>'+
            '</div>' +

        '</div>';

    $(".preguntas").append(html);
    $(".finalizado").animateCss("fadeInUp");

    $("#finalizar").click(function(){

        saveToDb(respuestasTarjetas.respuesta1)
    });

    //evento de botón empezar de nuevo
    $(".restart").click(function(){

        window.location.reload();
    });

    //evento del botón exportar
    $("#exportar").click(function(){

        $.ajax({
            type: "POST",
            async: true,
            url: "excelExport/export.php",
            success: function (response) {

                console.dir(response);


            },
            error: function (e) {


                console.dir(e)


            }
        });
    });
}

function saveToDb(data){

    //console.dir(data)

    $("#finalizar").attr('disabled','true');

    $.ajax({
        type: "POST",
        async: true,
        url: "db/save.php",
        data: data,
        dataType: "json",
        success: function (response) {

            console.dir(response);
            alert("Se guardó correctamente");
            window.location.reload();

        },
        error: function (e) {
            alert( "error al enviar solicitud, reintente enseguida");
            $("#finalizar").attr('disabled','false');


        }
    });
}
