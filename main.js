/**
 * Created by Ivan on 20/10/2017.
 */

//esta variable especifica la cantidad de tarjetas que se van a mostrar

var cantidad = 2;

$(function(){

    $.fn.extend({
        animateCss: function (animationName) {
            var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            this.addClass('animated ' + animationName).one(animationEnd, function() {
                $(this).removeClass('animated ' + animationName);
            });
            return this;
        }
    });

    for (var i = cantidad ; i >= 1 ; i --){

        llenarHTML(i);
    }
});

function llenarHTML(index){

    var randomRotate = Math.floor(Math.random()*10) - 5;

    var htmlFrame =
        '<div style="visibility: hidden ;transform:rotate('+ randomRotate +'deg)" class="row tarjeta" id="tarjeta'+ index +'">' +
            '<div class="tContainer'+ index+'">' +
            '</div>' +
            '<br>'+
            '<div class="col-md-6 col-sm-6">' +
                '<div class="btn btn-lg btn-block btn-warning" id="btnAtras'+ index +'">Atrás</div>' +
            '</div>' +
            '<div class="col-md-6 col-sm-6">' +
                '<div class="btn btn-lg btn-block btn-success" id="btnSiguiente'+ index +'">Siguiente</div>'+
            '</div>'+
        '</div>';

    $(".preguntas").append(htmlFrame);

    var html;

    async.series(
        [
            function(callback){

                $.post("tarjeta"+ index +".html", function(result){

                    html = result;
                    callback();
                });


            },
            function(callback){

                $(".tContainer"+ index).append(html);

                callback();
            },
            function(callback){

                $("#tarjeta"+index).css("visibility","visible");

                callback();
            },
            function(callback){

                $("#tarjeta"+index).animateCss("fadeInUp");

                callback();
            }

        ]
    );



    $("#btnAtras"+index).click(function(){



    $("#tarjeta"+index)

        .animateCSS("fadeOutDown",function(){

            $(this).hide();
        });

        //$("#tarjeta"+index).remove();
    })




}
