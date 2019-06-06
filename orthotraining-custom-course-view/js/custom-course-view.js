(function( $ ) {
	'use strict';
     console.log('Module 1 date - ', moduleDates.module_1_date);
	console.log('Module 2 date - ', moduleDates.module_2_date);
	console.log('Module 3 date - ', moduleDates.module_3_date);
	console.log('Module 4 date - ', moduleDates.module_4_date);
	console.log('Module 5 date - ', moduleDates.module_5_date);
	console.log('Module 6 date - ', moduleDates.module_6_date);
	console.log('Module 7 date - ', moduleDates.module_7_date);
	console.log('Module 8 date - ', moduleDates.module_8_date);
	$('.post-2385').hide();
	$('.post-2383').hide();
	$('.post-2377').hide();
	$('.post-2375').hide();
	$('.post-2373').hide();
	$('.post-2371').hide();
	$('.post-2369').hide();
	$('.post-2343').hide();

	if(moduleDates.module_1_date) {
		$('.post-2343').show();
	}
		if(moduleDates.module_2_date) {
		$('.post-2369').show();
	}
		if(moduleDates.module_3_date) {
		$('.post-2371').show();
	} 	if(moduleDates.module_4_date) {
		$('.post-2373').show();
	}
		if(moduleDates.module_5_date) {
		$('.post-2375').show();
	}
		if(moduleDates.module_6_date) {
		$('.post-2377').show();
	}
		if(moduleDates.module_7_date) {
		$('.post-2383').show();
	}
		if(moduleDates.module_8_date) {
		$('.post-2385').show();
	}

})( jQuery );
