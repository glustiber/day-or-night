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

		#p1 {
			border:5px dotted;
			padding:1em;
			width:75%;
			color:<?=$text_color?>;
		}

		#p2 {
			color:<?=$text_color?>;
		}
	</style>

	<script src = "/javascript/javascript.js" type="text/javascript">

	</script>

</head>

<body>
	<p id="p1">
		The time is <?=$time?>. <br>
		The background color is <?=disp_bg_color($background_color)?>. <br>
		The text color is <?=disp_text_color($text_color)?>.
	</p>
	<p id="p2"><a href="#" onclick="toggledesc()">Toggle Text</a></p>
	<p id="p2"><a href="#" onclick="centerText('center')">Align Center</a></p>
</body>

</html>