<?php
if(isset($_POST['oui']) && ($_POST['oui'] != ''))
{
	//echo 'sdioghosdihgopsrh';
	$_POST['oui'] = '';
	$_POST['edit_modeles_name'] = $_POST['edit_modele_name'];
	$_POST['modeles_name'] = $_POST['modele_name'];
	include('part_creation_modele_devis_3.php');
}
else
{
	if(isset($_POST['noni']) && ($_POST['noni'] != ''))
	{
		//echo 'sdioghosdihgopsrh';
		$_POST['non'] = '';
		$_POST['edit_modele_name'] = $_POST['edit_modele_name'];
		$_POST['modele_name'] = $_POST['modele_name'];
		include('part_creation_modele_devis_3.php');
	}
	else
	{
		$_SESSION['modele_name'] ='';
		$_POST['edit_modele_name'] ='';
	?>
		<div id="content">
			<div id="content_item">
				<center><h1>CREATION DE MODELES</h1></center>
				<br/>
				<br/>
				<center>
					<form method="post" action="creation_modele_devis_2.php">
						<br>
						<table>
							<tr>
								<td style="text-align:right; font-weight: bold;">
									Nom du modele :
								</td>
								<td>
									<input type="text" name="modele_name" id="modele_name" />
								</td>
							</tr>
							<tr>
								<td style="text-align:center; font-weight: bold;">
									<input id="submit" type="submit" value="Continuer" name="next">
								</td>
							</tr>
						</table>
					</form>
				</center>
			</div>
		</div>
<?php
	}
}
?>