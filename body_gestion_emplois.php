<?php
if(isset($_SESSION['user_statut']) && $_SESSION['user_statut'] == 'super-administrateur')
{
?>
	<div class="" style="margin-left:30%">
		<div class="col-sm-8">
			<div class="container">
				<h2 class="text_title" style="margin-left:35%">GESTION EMPLOIS</h2>
				
			</div>
		</div>
	</div>
<?php
}
else
{
	//echo "Vous n'êtes pas autorisé à accéder à cette page";
	include('body_index.php');
}