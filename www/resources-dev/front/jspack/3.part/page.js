"use strict";

(function($) {

	$(document).on("appinitOnce", function() {
	});

	$(document).on("appinit", function() {
		$('.main-section').each(function(){
			var $mainSection = $(this);
			var $list = $('>.list', $mainSection);
			var $li = $('>li', $list);
			$li.on('click','a', function(e){
				e.preventDefault();
				console.log($(this));
			});
		});


	});

})(jQuery);