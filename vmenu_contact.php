<div id="menu_vertical">
	<ul>
		<?php
			if($page!="contact")
				echo '<li><a href="form_ajout_contact.php">Contact</a></li>';
			else
				echo '<li>Contact ></li>';
			if($page!="inscrip")
				echo '<li><a href="demande_adhesion.php">Demande d\'adhésion</a></li>';
			else
				echo '<li>Demande d\'adhésion ></li>';
			if($page!="plan")
				echo '<li><a href="plan_acces.php">Plan d\'acc&egrave;s</a></li>';
			else
				echo '<li>Plan d\'acc&egrave;s ></li>';
		?>
	</ul>
</div>