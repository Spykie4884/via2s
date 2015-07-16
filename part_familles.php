<div id="menu_vertical">
	<ul>
		<?php
			include('fun_creation_contact.php');
			include('vmenu_admin.php');
		?>
	</ul>
</div>
<div id="content">
	<div id="content_item">
		<center><h1>Familles</h1></center>
		<br/>
		<br/>
		<center>
			<?php
				$Yaka = Yaka_connexion();
				$fami = $Yaka->prepare('SELECT description FROM famille');
				$fami->execute(array(''));
				while($ret = $fami->fetch())
				{
					echo '<option value="description">' . $ret['description'] . '</option>';
				}
			?>
		</center>
	</div>
</div>