<?php
	//CREATION DE COOKIES
	setcookie('login', $_SESSION['user_statut'], time() + 365*24*3600, null, null, false, true);
?>