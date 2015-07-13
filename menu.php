<div id="menu-principal" style="height:16px;">
	<div id="menu">
			<ul>
				<li  onmouseover="afficherSousMenu('sousmenu-accueil');">
					<a class="static dynamic-children menu-item" accesskey="1" href="index.php">
						<span class="additional-background">
							<span class="menu-item-text">Accueil</span>
						</span>
					</a>
				</li>
			<li  onmouseover="afficherSousMenu('sousmenu-groupe');">
				<a class="static dynamic-children menu-item" accesskey="1"  href="groupe.php">
					<span class="additional-background">
						<span class="menu-item-text">Groupe</span>
					</span>
				</a>
				</li>
			<li onmouseover="afficherSousMenu('sousmenu-contact');">
				<a class="static dynamic-children menu-item" accesskey="1" href="form_ajout_contact.php">
					<span class="additional-background">
						<span class="menu-item-text">Contact</span>
					</span>
				</a>
			</li>
			<?php
				if((isset($_SESSION['user_statut'])) &&
					($_SESSION['user_statut'] == 'commercial') ||
					($_SESSION['user_statut'] == 'administrateur') ||
					($_SESSION['user_statut'] == 'super-administrateur'))
				{
			?>
				<li  onmouseover="afficherSousMenu('sousmenu-accueil');">
					<a class="static dynamic-children menu-item" accesskey="1" href="admin.php">
						<span class="additional-background">
							<span class="menu-item-text">Administration</span>
						</span>
					</a>
				</li>
			<?php
				}
			?>
		   </ul>
	</div>
</div>