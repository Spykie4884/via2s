<script type="text/javascript">
	function object(a)
	{
		if (a == "NEW")
		{
			var removelist=document.getElementById('list1');
			removelist.style.display="none";
			var displaytxtbox=document.getElementById('txtbox1');
			displaytxtbox.style.display="";
		}
		else
			$_POST["obj"]=document.getElementById('list1').text;
	}
</script>
<div id="content">
	<div id="content_item">
		<form method=POST action =form_ajout_contact.php>
			<input type=hidden name=subject value="Mail provenant du site VIA2S">
			<table>
				<tr><td colspan=2 align="center"><h1>CONTACT</h1><br/></td></tr>
				<tr><td>Nom</td><td><input class="contact" type="text" name="nom" value=""style="width: 100%;" /></td></tr>
				<tr><td>Email</td><td><input class="contact" type="text" name="email" value="" style="width: 100%;" /></td></tr>
				<tr><td>Société </td><td><input class="contact" type="text" name="soc"value="" style="width: 100%;" /></td></tr>
					<tr><td>Objet</td><td>
						<input class="contact" id="txtbox1" type="text" name="obj" style="width: 100%; display: none" />
						<select name="choose_obj" id="list1" onChange="object(this.form.choose_obj.value);return true;" style="width: 100%;">
						<option value="Demande de devis" >Demande de devis </option>
						<option value="Demande de support technique">Demande de support technique</option>
						<option value="Demande d'information">Demande d'information</option>
						<option value="NEW">Autres</option>
					</td>
				</tr>
				<tr><td>Message</td><td><textarea class="contact textarea" rows="8" cols="50" name="message"></textarea></td></tr>
				<tr><td></td><td align="center"><input class="submit" type="submit"  value="Envoyer"  style="height: 25px; width: 100px" /></td></tr>
			</table>
		</form>
	</div>
</div>