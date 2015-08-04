<div class="col-sm-10" style="background-color: white; height: 80%">
	<?php
	if(isset($_SESSION['co']) && $_SESSION['co'] == 0)
		echo "Vous êtes bien deconnectez";
	else
		echo "Déconnexion raté";
	?>
</div>