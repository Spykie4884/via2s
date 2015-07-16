<div id="menu_vertical">
	<ul>
		<?php
			include('vmenu_admin.php');
		?>
	</ul>
</div>
<br/>
<br/>
<h1><center>	AJOUT DE DOCUMENTS </center></h1>
<br/>
<br/>
<br/>
<form method="POST" action="sql_ajout_doc.php"  enctype="multipart/form-data" name="form1">
	<input type="hidden" name="MAX_FILE_SIZE" value="10000000">
		<center>
			<table >
				<tr>
					<td style="float:right;">
						<font face="Verdana" size="2">Référence du document :</font>
					</td>
					<td>
						<input type="text" name="reference" size="41" value="">
					</td>
				</tr>
				<tr>
					<td style="float:right;">
						<font face="Verdana" size="2">Catégorie du document : </font>
					</td>
					<td>
						<input type="text" name="categorie" size="41" value="">
					</td>
				</tr>
				<tr>
					<td style="float:right;">
						<font face="Verdana" size="2">Nom du document :</font>
					</td>
					<td>
						<input type="text" name="nom" size="41" value="">
					</td>
				</tr>
				<tr>
					<td style="float:right;">
						<font face="Verdana" size="2">Photo illustrative :</font>
					</td>
					<td>
						<input type="file" name="photo" size="26">
					</td>
				</tr>
				<tr>
					<td style="float:right;">
						<font face="Verdana" size="2">Fichier joint :</font>
					</td>
					<td>
						<input type="file" name="fichier" size="26">
					</td>
				</tr>
			</table>
		</center>
		<div align="center">
			<br/>
			<font face="Verdana" size="2">Type de document: </font>
			<font face="Verdana" size="2"></font>
			<br/>
			<br/>
			<table width="338" bordercolor="#6699FF" border="1" cellpadding="1" cellspacing="1">
				<tr>
					<td class="checker">
						<label>
							<input type="radio" name="droit" value="FPVS">
							Fiche produit  "Vidéo-surveillance"  (FPVS)
						</label>
						<br/>
						<label>
							<input type="radio" name="droit" value="FPAI">
							Fiche produit  "Anti-intrusion"  (FPAI)
						</label>
						<br/>
						<label>
							<input type="radio" name="droit" value="FPCA">
							Fiche produit    "Contrôle d'accès"  (FPCA)
						</label>
						<br/>
						<label>
							<input type="radio" name="droit" value="FPSV">
							Fiche produit  "Supervision"  (FPSV)
						</label>
						<br/>
						<label>
							<input type="radio" name="droit" value="GA">
							Guide administrateur  (GA)
						</label>
						<br/>
						<label>
							<input type="radio" name="droit" value="GU">
							Guide d'utilisation  (GU)
						</label>
						<br/>
						<label>
							<input type="radio" name="droit" value="GO">
							Guide opérateur  (GO)
						</label>
						<br/>
						<label>
							<input type="radio" name="droit" value="DPST">
							Dossier plan standard  (DPST)
						</label>
						<br/>
						<label>
						<input type="radio" name="droit" value="DPSP">
							Dossier plan spécifique  (DPSP)
						</label>
					</td>
				</tr>
			</table>
		</div>
		<font face="Verdana" size="2"> </font>
		<br/>
		<div align="center">
			<font face="Verdana" size="2">Droits d'Acces : </font>
			<font face="Verdana" size="2"></font>
			<br/>
			<table width="338" bordercolor="#6699FF" border="1" cellpadding="1" cellspacing="1">
				<tr>
					<td class="checker">
						<label>
							<input type="checkbox" name="acces2" value="commercial">
							Commercial
						</label>
						<br/>
						<label>
							<input type="checkbox" name="acces2" value="commercial">
							Visiteur
						</label>
						<br/>
					</td>
				</tr>
			</table>
		</div>
	</p>
	<div align="center"><br>
		<input type="submit" value="Ajouter">
	</div>
</form>