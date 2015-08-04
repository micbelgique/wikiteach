<!doctype html>
<html>
<head>
	<?php 
	$cours->viewPage("header_view");
	?>
	<link rel="stylesheet" href="views/css/style-home.css" />
	</head>
<body>
	<?php 
	$cours->viewPage("navbar");
	?>
	<div class="bloc-course">
		<?php 
		for($i=0;$i<count($findCourse);$i++)
		{
			$objectCourse = $findCourse[$i];
			$txt = nl2br($objectCourse->get('description'));
			?>
			<h1><?= $objectCourse->get('titre'); ?></h1>
			<br/>
			<p><a class="btn btn-primary" href="#exercices">Parcourir le cours <span class="glyphicon glyphicon-arrow-down"></span></a></p>
			<hr />
			<h3 class="blue"><?= htmlspecialchars($objectCourse->get('matiere')); ?></h3>
			<?php 
			if($objectCourse->get('photo'))
			{
				?>
				<img src="views/img_courses/<?= htmlspecialchars($objectCourse->get('photo')); ?>" alt="img-course" class="img-course" />
				<?php 
			}
			?>
			<br />
			<p><?= $txt; ?></p>
			<?php 
		}
		?>
		<hr />
		<button data-toggle="modal" href="#infos" id="exercices" class="btn btn-primary">Faire les exercices</button>
<div class="modal" id="infos">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h4 class="modal-title">Vrai ou faux</h4>
      </div>
      <div class="modal-body">
      	<form method="post" action="#">
      		<div class="alert alert-success" id="box_green"><p class="text-align">Bravo, vous avez réussi l'exercice.</p></div>
      		<p>le HTML est un langage de programmation</p>
        	<input type="checkbox" name="vrai"> Vrai
     		<input type="checkbox" name="faux"> Faux
     		<br />
     		<br />
     		<p>le DOCTYPE HTML ne sert à rien</p>
     		<input type="checkbox" name="vrai"> Vrai
     		<input type="checkbox" name="faux"> Faux
     		<br />
     		<br />
     		<input type="submit" id="validate_game" value="Valider" class="btn btn-primary" />
     	</form>
      </div>
    </div>
  </div>
</div>
	</div>
	<br />
	<script src="views/js/jquery.js"></script>
	<script src="views/bootstrap/js/bootstrap.js"></script>
	<script src="views/js/courses.js"></script>
</body>
</html>