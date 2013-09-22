<!DOCTYPE HTML>
<html>

<head>

	<meta charset="UTF-8">

	<title>Day or Night?</title>

	<?php
		require_once('logic.php');
	?>

	<style type = 'text/css'>
		body {
			background-color:<?=$background_color?>;
			color:<?=$text_color?>;
		}
	</style>

</head>

<body>
	<p>
		The time is <?=$time?>. <br>
		The background color is <?=disp_bg_color($background_color)?>. <br>
		The text color is <?=disp_text_color($text_color)?>.
	</p>
</body>

</html>