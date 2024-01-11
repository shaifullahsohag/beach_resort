/*
My Custom JS
=============
Author:  Md.Shaifulla Sohag
Project: Beach Resort
*/

(function($) {

	// Code for Scroll To Top Plugin

	// Cache DOM
	$scroll_top_img = $( "#scroll_top" );

	$scroll_top_img.click( function() {

		$( " html, body " ).animate({

			"scrollTop" : 0,

		}, 200 );

	});

	// Code for twitter Bootstrap Tooltip

	$( " #pinterest, #facebook, #twitter, #google_plus " ).tooltip({

		"placement" : "left",

	});

	$( " #scroll_top " ).tooltip({

		"placement" : "top",
		
	});


})(jQuery);