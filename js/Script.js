/* 
 Project: HistoriaDominicana
 File: Script 
 Created by Hamil on May 5, 2018 - 10:13:27 AM. 
 */


$(document).ready(function(){
    console.log("El documento 'Script' de Historia Dominicana está listo.");
    
    var controller = new ScrollMagic.Controller(); //Controlador de Scroll Magic
    
    $('div.magic').each(function(){
        var scene = new ScrollMagic.Scene({ //Haciendo la escena
            triggerElement: this,
            triggerHook: 0
        }).setVelocity($(this).closest('article'),{opacity: 0}, {duration: 400})//Libreria de animación
        .addIndicators()
        .addTo(controller);
    });
    
});