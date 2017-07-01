$(document).ready(function(){
	$('#showlogin').click(function(){
		/*El método slideToggle () alterna entre slideUp () y slideDown () para los elementos seleccionados.
        Este método comprueba los elementos seleccionados para la visibilidad. slideDown () se ejecuta si un elemento está oculto. slideUp () se ejecuta si un elemento es visible - 
        Esto crea un efecto de palanca.
        $(selector).slideToggle(speed,easing,callback)
        Parameter 	Description
speed 	Optional. Specifies the speed of the slide effect. Default value is 400 milliseconds

Possible values:

    milliseconds
    "slow"
    "fast"

easing 	Optional. Specifies the speed of the element in different points of the animation. Default value is "swing"

Possible values:

    "swing" - moves slower at the beginning/end, but faster in the middle
    "linear" - moves in a constant speed

Tip: More easing functions are available in external plugins
callback 	Optional. A function to be executed after the slideToggle() method is completed
		*/
		$('#loginpanel').slideToggle('slow',function(){
			$('#down').toggle();
			$('#up').toggle();

		});

	});
});
