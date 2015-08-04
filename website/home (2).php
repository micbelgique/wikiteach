<!doctype html>
<html>
<head>
	<?php 
	$home->viewPage("header_view");
	?>
	<link rel="stylesheet" href="views/css/style-home.css" />
	</head>
<body>
	<?php 
	$home->viewPage("navbar");
	?>
	<div class="icon-bloc">
		<div class="icons-bloc-into">
			<a href="#"><img src="views/img/icon_math.png" alt="icon-math" class="icons-courses" /></a>
			<p>Mathématiques</p>
		</div>
		<div class="icons-bloc-into">
			<a href="#"><img src="views/img/icon_francais.png" alt="icon-svt" class="icons-courses" /></a>
			<p>Français</p>
		</div>
		<div class="icons-bloc-into">
			<a href="#"><img src="views/img/icon_phy-chim.png" alt="icon-physique-chimie" class="icons-courses" /></a>
			<p>Physique-Chimie</p>
		</div>
		<div class="icons-bloc-into">
			<a href="#"><img src="views/img/icon_svt.png" alt="icon-svt" class="icons-courses" /></a>
			<p>Biologie</p>
		</div>
		<div class="icons-bloc-into">
			<a href="__DIR__/../informatique"><img src="views/img/icon_it.png" alt="icon-it" class="icons-courses" /></a>
			<p>Informatique</p>
		</div>
		<div class="icons-bloc-into">
			<a href="#"><img src="views/img/icon_geo.png" alt="icon-geo" class="icons-courses" /></a>
			<p>Géographie</p>
		</div>
		<div class="icons-bloc-into">
			<a href="#"><img src="views/img/icon_history.png" alt="icon-geo" class="icons-courses" /></a>
			<p>Histoire</p>
		</div>
		<div class="icons-bloc-into">
			<a href="#"><img src="views/img/icon_langues.png" alt="icon-svt" class="icons-courses" /></a>
			<p>Langues</p>
		</div>
	</div>
	<script src="views/js/jquery.js"></script>
	<script src="views/bootstrap/js/bootstrap.js"></script>
</body>
</html>