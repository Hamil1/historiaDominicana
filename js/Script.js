/* 
 Project: HistoriaDominicana
 File: Script 
 Created by Hamil on May 5, 2018 - 10:13:27 AM. 
 */


$(document).ready(function(){
    console.log("El documento 'Script' de Historia Dominicana está listo.");
    
    var titulo = $('article h2.magic'),
    parrafo = $('div.desarrolloArticulo.magic'),
    efecto = new TimelineLite();
    
    efecto.from(titulo, 0.5, {x: -300, autoAlpha: 0, ease: Power1.easeOut, delay: 0.3})
            .from(parrafo, 0.3, {y: -50, autoAlpha: 0, ease:Power1.easeOut, delay: 0.2});
    
    var controller = new ScrollMagic.Controller(); //Controlador de Scroll Magic

    var scene = new ScrollMagic.Scene({ //Haciendo la escena
      triggerElement: '.magic',
      triggerHook: 0.3
    })
    .setClassToggle('.magic','show')
    .addIndicators({
        name: 'fade scene',
        colorTrigger: 'black',
        indent: 200,
        colorStart: '#75C695'
    })
    .addTo(controller);


});