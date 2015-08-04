<?php
if(isset($_SESSION['user_id']))
{
?>
	<div class="col-sm-10" style="background-color: white; height: 80%">
		<div class="container">
			<h2 class="text_title" style="margin-left:35%">LISTE DEVIS</h2>
			<?php
				$bdd = bdd_Connexion();
				$liste_devis = $bdd->prepare("SELECT * FROM modele_profil WHERE id_client ='" . $_SESSION['user_id'] . "' OR id_commercial ='" . $_SESSION['user_id'] . "'");
			?>
		</div>
	</div>
<?php
}
else
	include('body_connexion_require.php');
?>