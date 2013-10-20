<div class="container">
	<h1 class="text-center"><b>É</b>cole du <b>C</b>hat <b>L</b>ibre - <b>V</b>als d'<b>Y</b>erres et de <b>S</b>eine</h1>
	<h2 class="text-center"><b>P</b>lateforme d'<b>A</b>ccompagnement des <b>CHA</b>ts</h2>
</div>

<div class="container text-center">
	<?php echo $this->element('cat', array('img'=>'laptop')); ?>
</div>

<div class="container">
	<form class="form-signin" method="post">
		<h2 class="form-signin-heading text-center">Identifiez-vous:</h2>
		<input name="data[User][username]" type="text" class="form-control" placeholder="Identifiant" autofocus>
		<input name="data[User][password]" type="password" class="form-control" placeholder="Mot de passe">
		<label class="checkbox">
		  <input name="data[remember_me]" type="checkbox" value="1"> Se connecter automatiquement
		</label>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
	</form>
</div><!-- /#content .container -->


