<?php

function display_logo_category(){
	$logo = et_get_option( 'extra_logo' ); // this is your uploaded logo in the Extra epanel. You should upload a default logo
	$logo_cat_1 = 'logo-one.png'; // paste the full URL or relative URL of your first logo. DO Maintain the syntax.
	$logo_cat_2 = 'logo-two.png';  // as above
	$logo_cat_3 = 'logo-three.png'; // as above
	$logo_cat_4 = 'logo-four.png'; // as above
 
	if(is_category('CAT_ONE')){ // replace CAT_ONE with your own category slug. Do the same for others too.
		echo '<img id="logo" src="'.$logo_cat_1.'">';
	}
	elseif(is_category('CAT_TWO')){
		echo '<img id="logo" src="'.$logo_cat_2.'">';
	}
	elseif(is_category('CAT_THREE')){
		echo '<img id="logo" src="'.$logo_cat_3.'">';
	}
	elseif(is_category('CAT_FOUR')){
		echo '<img id="logo" src="'.$logo_cat_4.'">';
	}
	else{
		echo '<img id="logo" src="'.$logo.'">';
	}
}
add_action('et_header_output', 'display_logo_category');
