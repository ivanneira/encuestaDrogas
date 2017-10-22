/**
 * Created by Ivan on 20/10/2017.
 */

//esta variable especifica la cantidad de tarjetas que se van a mostrar, se edita según la necesidad
var cantidad = 2;

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
    var randomRotate = Math.floor(Math.random()*10) - rotation;

    //marco principal con boton siguiente y comenzar de nuevo
    var htmlFrame =
        '<div style="visibility: hidden ;transform:rotate('+ randomRotate +'deg)" class="row tarjeta" id="tarjeta'+ index +'">' +
            '<div class="tContainer'+ index+'">' +
            '</div>' +
            '<br>'+
            '<div class="col-md-6 col-sm-6">' +
                '<div class="btn btn-lg btn-block btn-default restart" ">Empezar de nuevo</div>' +
            '</div>' +
            '<div class="col-md-6 col-sm-6">' +
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

                $("#tarjeta"+index).animateCss("fadeInUp");

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

        //escondo la tarjeta
        $("#tarjeta"+index)


            .animateCSS("fadeOutDown",function(){

                $( document ).trigger( "tarjeta"+ index );
                console.dir(respuesta1);
                $(this).hide();
            });

    });




}
