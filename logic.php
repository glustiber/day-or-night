<?php

	date_default_timezone_set('America/Chicago');
	
	$time = date("G");

	if($time >= 6 && $time <= 20) {
		$background_color = '#43c4ef';
		$text_color = "#000000";
	}
	else {
		$background_color = '#000000';
		$text_color = '#FFFFFF';
	}

	function disp_bg_color($background_color) {
		if($background_color == '#43c4ef') {
			return 'light blue';
		}
		else if($background_color == '#000000') {
			return 'black';
		}
	}

	function disp_text_color($text_color) {
		if($text_color == '#000000') {
			return 'black';
		}
		else if($text_color == '#FFFFFF') {
			return 'white';
		}
	}

?>