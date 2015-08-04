<nav class="navbar navbar-default" style="border: 0px solid transparent; border-radius: 0px; background-image:-moz-linear-gradient(left, #2870CE, white);">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" style='color: white; font-family: Arial Black,Arial Bold,Gadget,sans-serif; font-size:50px'><b>VIA2S</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" style="color: #224072;"><b>Nous contacter</b></a></li>
		<?php
		if(isset($_SESSION['co']) && ($_SESSION['co'] == 1))
		{
			?>
			<li><a href="deconnexion.php" style="color: #224072;"><b>Déconnexion</b></a></li>
			<?php
		}
		else
		{
			?>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #224072;"><b>Vôtre compte </b><span class="caret"></span></a>
				<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px; top: 100%;">
					<form method="post" action="connexion.php" accept-charset="UTF-8">
						<input style="margin-bottom: 15px;" type="text" placeholder="Email" id="user_mail" name="user_mail">
						<input style="margin-bottom: 15px;" type="password" placeholder="Mot de passe" id="user_mdp" name="user_mdp">
						<input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
						<label class="string optional" for="user_remember_me"> Se souvenir</label>
						<input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
						<label style="text-align:center;margin-top:5px">Pas de compte?</label>
						<input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Demande d'adhésion">
					</form>
				</div>
			</li>
			<?php
		}
		?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>