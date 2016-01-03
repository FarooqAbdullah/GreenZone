jQuery(document).ready(
	function($) {
		$('#carousel-example-generic').carousel();
		
		$('a._sewarch_form_respo').click(
			function(event) {
				event.preventDefault();
				$(this).hide();
				$(this).siblings('._form_overlay').addClass('respo');
				$(this).siblings('.form-inline').slideDown();
			}
		);
		
		$('._cross_form  p > span').click(
			function(event) {
				event.preventDefault();
				var $this = $('a._sewarch_form_respo');
				$this.show();
				$this.siblings('._form_overlay').removeClass('respo');
				$this.siblings('.form-inline').slideUp();
			}
		);
		
		$('input.datepicker').Zebra_DatePicker();
		

		$('div.dropdown').find('ul.dropdown-menu li._calender_wrapper').click(
			function(event){
				event.stopPropagation();
			}
		);
		
		$('div.dropdown').find('ul.dropdown-menu li._not_calender').click(
			function(event){
				event.stopPropagation();
				var $dropdown_value = $(this).find('._date_dropdown_').text();
				$('div.dropdown').find('#dropdownMenu1').html($dropdown_value + '<span class="caret"></span>');
				$(this).parents('ul.dropdown-menu').parents('div.dropdown').removeClass('open');
				$(this).parents('div.dropdown').find('button').attr('aria-expanded',false);
			}
		);
		
		$('._modal').find('#login').find('.modal-body').find('._have_an_account').find('._sign_up').click(
			function(event){
				$(this).parents('#login').find('button.close').click();
			}
		);
		
		$('._modal').find('button.close').click(
			function(event){
				$('body').css({'padding':'0px'});
			}
		);
		
		$('._modal').find('#register').find('.modal-body').find('._alredy_member').find('._sign_in_').click(
			function(event){
				$(this).parents('#register').find('button.close').click();
			}
		);
	}
);