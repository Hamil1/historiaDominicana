jQuery(document).ready(function($){
	var $form_modal = $('.cd-user-modal'),
		$form_login = $('.cd-user-modal').find('#cd-login'),
		$form_signup = $('.cd-user-modal').find('#cd-signup'),
		$form_forgot_password = $('.cd-user-modal').find('#cd-reset-password'),
		$form_modal_tab = $('.cd-switcher'),
		$tab_login = $('.cd-switcher').children('li').eq(0).children('a'),
		$tab_signup = $('.cd-switcher').children('li').eq(1).children('a'),
		$forgot_password_link = $('.cd-user-modal').find('#cd-login').find('.cd-form-bottom-message a'),
		$back_to_login_link = $('.cd-user-modal').find('#cd-reset-password').find('.cd-form-bottom-message a'),
		$main_nav = $('button#agregarArticulo');

	//open modal
	$('button#agregarArticulo').on('click', function(event){
		setTimeout(function(){
			$('.cd-user-modal').addClass('is-visible');
			login_selected();
		}, 100);
		
	});

	//close modal
	$('.cd-user-modal').on('click', function(event){
		if( $(event.target).is($('.cd-user-modal')) || $(event.target).is('.cd-close-form') ) {
			$('.cd-user-modal').removeClass('is-visible');
		}	
	});
	//close modal when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$('.cd-user-modal').removeClass('is-visible');
	    }
    });

	//switch from a tab to another
	$('.cd-switcher').on('click', function(event) {
		event.preventDefault();
		( $(event.target).is( $('.cd-switcher').children('li').eq(0).children('a') ) ) ? login_selected() : signup_selected();
	});

	//hide or show password
	$('.hide-password').on('click', function(){
		var $this= $(this),
			$password_field = $this.siblings('input');
		
		( 'password' == $password_field.attr('type') ) ? $password_field.attr('type', 'text') : $password_field.attr('type', 'password');
		( 'Mostrar' == $this.text() ) ? $this.text('Ocultar') : $this.text('Mostrar');
		//focus and move cursor to the end of input field
		$password_field.putCursorAtEnd();
	});

	//show forgot-password form 
	$('.cd-user-modal div#cd-login').find('.cd-form-bottom-message a').on('click', function(event){
		event.preventDefault();
		forgot_password_selected();
	});

	//back to login from the forgot-password form
	$('.cd-user-modal div#cd-reset-password').find('.cd-form-bottom-message a').on('click', function(event){
		event.preventDefault();
		login_selected();
	});

	function login_selected(){
		$('.cd-user-modal').find('#cd-login').addClass('is-selected');
		$('.cd-user-modal').find('#cd-signup').removeClass('is-selected');
		$('.cd-user-modal').find('#cd-reset-password').removeClass('is-selected');
		$('.cd-switcher').children('li').eq(0).children('a').addClass('selected');
		$('.cd-switcher').children('li').eq(1).children('a').removeClass('selected');
	}

	function signup_selected(){
		console.log("Esta entrando signup");
		$('.cd-user-modal').find('#cd-login').removeClass('is-selected');
		$('.cd-user-modal').find('#cd-signup').addClass('is-selected');
		$('.cd-user-modal').find('#cd-reset-password').removeClass('is-selected');
		$('.cd-switcher').children('li').eq(0).children('a').removeClass('selected');
		$('.cd-switcher').children('li').eq(1).children('a').addClass('selected');
	}

	function forgot_password_selected(){
		$('.cd-user-modal').find('#cd-login').removeClass('is-selected');
		$('.cd-user-modal').find('#cd-signup').removeClass('is-selected');
		$('.cd-user-modal').find('#cd-reset-password').addClass('is-selected');
	}

	//REMOVE THIS - it's just to show error messages (Hecho por Victor Diaz)
	$('.cd-user-modal').find('input[type="submit"]').on('click', function(event){
		event.preventDefault();
		var formulario = $(this).attr('formulario'),
		form = $('.cd-user-modal').find('#' + formulario),
		input = form.find('input.validation'),
		boolean = true;

		$(input).each(function(){
			$(this).removeClass('has-error').next('span').removeClass('is-visible');
		});
		
		$(input).each(function(){
			if($(this).val().length == 0){
				$(this).toggleClass('has-error').next('span').toggleClass('is-visible');
				boolean = false;
			}
		});
		if(boolean){
			$('.cd-user-modal').removeClass('is-visible');
			if($(this).attr("message")){
				alertify.success($(this).attr('message'));
			}
		}
	});
	
	// $form_signup.find('input[type="submit"]').on('click', function(event){
	// 	event.preventDefault();
	// 	var input = $form_signup.find('input.validation');

	// 	$(input).each(function(){
	// 		$(this).removeClass('has-error').next('span').removeClass('is-visible');
	// 	});
		
	// 	$(input).each(function(){
	// 		if($(this).val().length == 0){
	// 			$(this).toggleClass('has-error').next('span').toggleClass('is-visible');
	// 		}
	// 	});
	// });

	//IE9 placeholder fallback
	//credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html
	if(!Modernizr.input.placeholder){
		$('[placeholder]').focus(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
				input.val('');
		  	}
		}).blur(function() {
		 	var input = $(this);
		  	if (input.val() == '' || input.val() == input.attr('placeholder')) {
				input.val(input.attr('placeholder'));
		  	}
		}).blur();
		$('[placeholder]').parents('form').submit(function() {
		  	$(this).find('[placeholder]').each(function() {
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
			 		input.val('');
				}
		  	})
		});
	}

});


//credits https://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
jQuery.fn.putCursorAtEnd = function() {
	return this.each(function() {
    	// If this function exists...
    	if (this.setSelectionRange) {
      		// ... then use it (Doesn't work in IE)
      		// Double the length because Opera is inconsistent about whether a carriage return is one character or two. Sigh.
      		var len = $(this).val().length * 2;
      		this.setSelectionRange(len, len);
    	} else {
    		// ... otherwise replace the contents with itself
    		// (Doesn't work in Google Chrome)
      		$(this).val($(this).val());
    	}
	});
};