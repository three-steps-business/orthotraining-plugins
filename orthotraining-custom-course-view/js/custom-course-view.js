(function( $ ) {
	'use strict';
	console.log('Module 1 date - ', moduleDates.module_1_date);
	console.log('Module 2 date - ', moduleDates.module_2_1_date);
	console.log('Module 2 date - ', moduleDates.module_2_2_date);
	console.log('Module 3 date - ', moduleDates.module_3_date);
	console.log('Module 4 date - ', moduleDates.module_4_date);
	console.log('Module 5 date - ', moduleDates.module_5_date);
	console.log('Module 6 date - ', moduleDates.module_6_date);
	console.log('Module 7 date - ', moduleDates.module_7_date);
	console.log('Module 8 date - ', moduleDates.module_8_date);
	console.log('Module 9 date - ', moduleDates.module_9_date);
	console.log('Smilefast PRO date - ', moduleDates.smilefast_pro_date);
	console.log('PgD - ', moduleDates.post_grad_test);

	var module_1_div = $("h2:contains('M1: Diagnosis & Treatment Planning')").parent().parent().parent();
	var module_2_1_div = $("h2:contains('M2-1: Conventional Straight Wire Mechanics')").parent().parent().parent();
	var module_2_2_div = $("h2:contains('M2-2: Conventional Straight Wire Mechanics')").parent().parent().parent();
	var module_3_div = $("h2:contains('Early Treatment')").parent().parent().parent();
	var module_4_div = $("h2:contains('Aligner Therapy')").parent().parent().parent();
	var module_5_div = $("h2:contains('Aesthetic and Accelerated Orthodontics')").parent().parent().parent();
	var module_6_div = $("h2:contains('Advanced Bio-mechanics')").parent().parent().parent();
	var module_7_div = $("h2:contains('Management of CL 3 Malocclusions')").parent().parent().parent();
	var module_8_div = $("h2:contains('IDT and Difficult Orthodontic Problems')").parent().parent().parent();
	var module_9_div = $("h2:contains('PPS Module – Practice Team Training')").parent().parent().parent();
// 	var smilefast_pro_div = $("h2:contains('Smilefast PRO')").parent().parent().parent();

	var module_1_pgd_div = $("h2:contains('M1: Postgraduate Test')").parent().parent().parent();
	var module_2_1_pgd_div = $("h2:contains('M2-1: Postgraduate Test')").parent().parent().parent();
	var module_2_2_pgd_div = $("h2:contains('M2-2: Postgraduate Test')").parent().parent().parent();
	var module_3_pgd_div = $("h2:contains('M3: Postgraduate Test')").parent().parent().parent();
	var module_4_pgd_div = $("h2:contains('M4: Postgraduate Test')").parent().parent().parent();
	var module_5_pgd_div = $("h2:contains('M5: Postgraduate Test')").parent().parent().parent();
	var module_6_pgd_div = $("h2:contains('M6: Postgraduate Test')").parent().parent().parent();
	var module_7_pgd_div = $("h2:contains('M7: Postgraduate Test')").parent().parent().parent();
	var module_8_pgd_div = $("h2:contains('M8: Postgraduate Test')").parent().parent().parent();
	var module_9_pgd_div = $("h2:contains('M9: Postgraduate Test')").parent().parent().parent();

	module_1_div.hide();
	module_2_1_div.hide();
	module_2_2_div.hide();
	module_3_div.hide();
	module_4_div.hide();
	module_5_div.hide();
	module_6_div.hide();
	module_7_div.hide();
	module_8_div.hide();
	module_9_div.hide();
// 	smilefast_pro_div.hide();

	module_1_pgd_div.hide();
	module_2_1_pgd_div.hide();
	module_2_2_pgd_div.hide();
	module_3_pgd_div.hide();
	module_4_pgd_div.hide();
	module_5_pgd_div.hide();
	module_6_pgd_div.hide();
	module_7_pgd_div.hide();
	module_8_pgd_div.hide();
	module_9_pgd_div.hide();

	$('#bb-course-list-grid-filters').hide();

// 	if( strtotime('-42 day', strtotime('09/11/2019')) < strtotime('now') ) {
// 	  echo 'show';
// 	} else {
// 	  echo 'hide';
// 	}
	if(moduleDates.module_1_date) {
		module_1_div.show();
		if(moduleDates.post_grad_test) {
			module_1_pgd_div.show();
		}
	}
	if(moduleDates.module_2_1_date) {
		module_2_1_div.show();
		if(moduleDates.post_grad_test) {
			module_2_1_pgd_div.show();
		}
	}
	if(moduleDates.module_2_2_date) {
		module_2_2_div.show();
		if(moduleDates.post_grad_test) {
			module_2_2_pgd_div.show();
		}
	}
	if(moduleDates.module_3_date) {
		module_3_div.show();
		if(moduleDates.post_grad_test) {
			module_3_pgd_div.show();
		}
	}
	if(moduleDates.module_4_date) {
		module_4_div.show();
		if(moduleDates.post_grad_test) {
			module_4_pgd_div.show();
		}
	}
	if(moduleDates.module_5_date) {
		module_5_div.show();
		if(moduleDates.post_grad_test) {
			module_5_pgd_div.show();
		}
	}
	if(moduleDates.module_6_date) {
		module_6_div.show();
		if(moduleDates.post_grad_test) {
			module_6_pgd_div.show();
		}
	}
	if(moduleDates.module_7_date) {
		module_7_div.show();
		if(moduleDates.post_grad_test) {
			module_7_pgd_div.show();
		}
	}
	if(moduleDates.module_8_date) {
		module_8_div.show();
		if(moduleDates.post_grad_test) {
			module_8_pgd_div.show();
		}
	}
	if(moduleDates.module_9_date) {
		module_9_div.show();
		if(moduleDates.post_grad_test) {
			module_9_pgd_div.show();
		}
	}
// 		if(moduleDates.smilefast_pro_date) {
// 		smilefast_pro_div.show();
// 	}

})( jQuery );
