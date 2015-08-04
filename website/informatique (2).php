<!doctype html>
<html>
<head>
	<?php 
	$informatique->viewPage("header_view");
	?>
	<link rel="stylesheet" href="views/css/style-home.css" />
	</head>
<body>
	<?php 
	$informatique->viewPage("navbar");
	?>
	<div class="icon-bloc">
		<div class="icons-bloc-into">
			<a href="index.php?action=cours&amp;id=SMIwtZhHQt"><img src="views/img/icon_it.png" alt="icon-informatique" class="icons-courses" /></a>
			<p>Apprendre le langage HTML</p>
		</div>
		<div class="icons-bloc-into">
			<a href="index.php?action=cours&amp;id=MjKo7aq7qQ"><img src="views/img/icon_it.png" alt="icon-informatique" class="icons-courses" /></a>
			<p>Algorithmes de tri</p>
		</div>
	</div>
	<script src="views/js/jquery.js"></script>
	<script src="views/bootstrap/js/bootstrap.js"></script>
</body>
</html>