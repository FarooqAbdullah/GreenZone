jQuery(document).ready(
	function($) {
		$('._theme_options').find('form').find('input[type=submit]').click(
			function(event) {
				var $valueToSave = $(this).parents('form').attr('id');
				$valueToSave = $valueToSave.replace('greenzone_metabox_' , '');
				sessionStorage.setItem('queryString', $valueToSave);
			}
		);
		
		$(function(){
			if(sessionStorage.getItem('queryString')) {
				
				var $savedValue = sessionStorage.getItem('queryString');
				var $targetTab;
				var $targetContent;
				if($savedValue == 'footer') {
					$targetTab = $('._theme_otion_tabs').find('li:last-child');
				}
				else if($savedValue == 'header') {
					$targetTab = $('._theme_otion_tabs').find('li:nth-child(2)');
				}
				else {
					$targetTab = $('._theme_otion_tabs').find('li:first-child');
				}
				
				// Target Tab
				$targetTab.addClass('active');
				$targetTab.siblings().removeClass('active');
				
				// Target Content
				$targetContent = $('._theme_options').find('#'+$savedValue);
				$targetContent.addClass('active');
				$targetContent.siblings().removeClass('active');
				
				sessionStorage.removeItem('queryString');
			}
			else {
				
				// Target Tab 
				var $targetTab = $('._theme_otion_tabs').find('li:first-child');
				$targetTab.addClass('active');
				$targetTab.siblings().removeClass('active');
				
				// Target Content
				var $targetContent = $('._theme_options > div#general');
				$targetContent.addClass('active');
				$targetContent.siblings().removeClass('active');
			}
			
			$('#wpwrap').css({'min-height':($(window).height() - 33)+'px'});
			
		}());
	}
);