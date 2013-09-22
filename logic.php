<?php

	date_default_timezone_set('America/Chicago');
	
	$time = date("h:i a");

	if(strtotime($time) >= strtotime('06:00 am') && strtotime($time) <= strtotime('08:00 pm')) {
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