<!doctype html>
<html>
<head>
	<?php 
	$login->viewPage("header_view");
	?>
	<link rel="stylesheet" href="views/css/style-login.css" />
	</head>
<body>
	<div id="bloc-connect">
		<img src="views/img/logo.png" alt="logo" class="logo" />
		<?php 
		if($login->errorLog)
		{	
			?>
			<div class="alert alert-danger">
				<p class="text-align">Identifiants incorrects.</p>
			</div>
			<?php 
		}
		?>
		<form method="post" action="#">
			<input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur" />
			<input type="password" class="form-control" name="password" placeholder="Mot de passe" />
			<input type="submit" class="submit_connect blue" value="Se connecter" name="submit_login" />
		</form>
		<hr />
		<button class="submit_connect green height_big" id="create_account">Créer un compte</button>
	</div>
	<div id="bloc-register">
		<img src="views/img/logo.png" alt="logo" class="logo" />
		<form method="post" action="#">
			<input type="email" class="form-control" name="email" placeholder="Adresse email" />
			<input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur" />
			<input type="password" class="form-control" name="password" placeholder="Mot de passe" />
			<input type="password" class="form-control" name="password" placeholder="Confirmation de mot de passe" />
			<select class="form-control" name="">
				<option value="">Étudiant</option>
				<option value="">Représentant d’établissement</option>
				<option value="">Enseignant / Rédacteur</option>
				<option value="">Parent d’élève</option>
			</select>
			<input type="submit" class="submit_connect blue" value="S'inscrire" name="submit_login" />
		</form>
		<hr />
		<button class="submit_connect green height_big" id="login_btn">Se connecter</button>
	</div><br /><br />
	<script src="views/js/jquery.js"></script>
	<script src="views/js/main.js"></script>
</body>
</html>