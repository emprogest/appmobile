//
//   Programa: Higiene y Seguridad . Sector Río de la Plata
//   Subprog.: main1.js
//   Fecha   : 04-03-2015
//   Autor   : Jorge Daniel Galati . Legajo 53734/E91881
//   Nota    : manejo del las opciones del submenú del index1.html
//

$(document).ready(main);
 
var contador = 1;
 
function main () {
	$('.menu_bar').click(function(){
		if (contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});
 
	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});
}