﻿<div id="menu_vertical">
	<ul>
		<?php
			include('fun_creation_contact.php');
			include('vmenu_admin.php');
		?>
	</ul>
</div>
<div id="content">
	<div id="content_item">
		<center><h1>Niveau</h1></center>
		<br/>
		<br/>
		<center>
			<?php
				$fami = $Yaka->prepare('SELECT description FROM sous_famille');
				$fami->execute(array(''));
				while($ret = $fami->fetch())
				{
					echo '<option value="description">' . $ret['description'] . '</option>';
				}
			?>
		</center>
	</div>
</div>