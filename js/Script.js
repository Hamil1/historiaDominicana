/* 
 Project: HistoriaDominicana
 File: Script 
 Created by Hamil on May 5, 2018 - 10:13:27 AM. 
 */


$(document).ready(function(){
    console.log("El documento 'Script' de Historia Dominicana está listo.");
    
    var titulo = $('article h2'),
    parrafo = $('div.desarrolloArticulo'),
    efecto = new TimelineLite();
    
    efecto.from(titulo, 0.3, {x: -500, autoAlpha: 0, ease:Power1.easeOut, delay: 0.3})
            .from(parrafo, 0.3, {y: -50, autoAlpha: 0, ease:Power1.easeOut, delay: 0.2});
    
//    var controller = new ScrollMagic.Controller(); //Controlador de Scroll Magic
//    $('article').each(function(){
//        var tween = TweenMax.from($(this), 0.6,{y: -15, autoAlpha: 0, ease:Power1.easeOut, delay:0.7});
//        
//        var scene = new ScrollMagic.Scene({
//            triggerElement: this
//        })
//                .setTween(tween)
//                .addTo(controller);
//    });
//    var scene = new ScrollMagic.Scene({ //Haciendo la escena
//      triggerElement: 'article'
//    })
//    .setClassToggle('article','show')
//    .addTo(controller);


});