
$(function (){ 

	/** 
	 * Action qui permet de masquer ou afficher le sous-menu (cas tablette et mobile)
	 */
	$('.affiche_sous_menu').click(function(){

		if ($('#sous-menu').hasClass('masquer')){			
			$('#sous-menu').slideDown();
			$('#sous-menu').removeClass('masquer');
		}else{
			$('#sous-menu').slideUp('slow');
			$('#sous-menu').addClass('masquer');
		}
		
	});

	/**  
	 * Action qui permet de déplacer automatiquement sur la page en fonction qui click dans le menu (comme une ancre)
	 */
	$('ul.nav li a, ul#sous-menu li a').click(function(event){

		if (!$(this).parents('li:first').hasClass('affiche_sous_menu')){
			event.preventDefault();
			var cible = $(this).parents('li:first').data('cible');

			$(this).parents('ul:first').find('li a').each(function(){
				$(this).removeClass('active');
			});
			
			$(this).parents('ul#sous-menu:first').slideUp('slow');
			$(this).parents('ul#sous-menu:first').addClass('masquer');

			$('html,body').animate({scrollTop: $('#'+cible).offset().top}, 'slow');
		}

	});
});