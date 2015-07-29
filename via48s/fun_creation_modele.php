<?php
	$bdd = bdd_connexion();
	$Yaka = Yaka_connexion();
	//CASE UNIQUE

	//Nom de produit
	if((isset($_POST['descrip'])) && ($_POST['descrip'] != ''))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE description LIKE :descrip');
		$recherche->execute(array(':descrip' => $_POST['descrip'] . '%'));
	}
	//Reference
	if((isset($_POST['reference_part_number'])) && ($_POST['reference_part_number'] != ''))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE reference_part_number LIKE :reference_part_number');
		$recherche->execute(array(':reference_part_number' => $_POST['reference_part_number'] . '%'));
	}
	//Reference interne
	if((isset($_POST['reference'])) &&($_POST['reference'] != ''))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE reference LIKE :reference');
		$recherche->execute(array(':reference' => $_POST['reference'] . '%'));
	}
	//Famille
	if((isset($_POST['famille'])) &&($_POST['famille'] != ''))
	{
		$recherchefam = $Yaka->prepare('SELECT * FROM famille WHERE description LIKE :famille');
		$recherchefam->execute(array(':famille' => $_POST['famille'] . '%'));
		$rox = $recherchefam->fetch();
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE id_famille LIKE :id_famille');
		$recherche->execute(array(':id_famille' => $rox['id'] . '%'));
	}
	//Niveau
	if((isset($_POST['niveau'])) &&($_POST['niveau'] != ''))
	{
		$rechercheniv = $Yaka->prepare('SELECT * FROM sous_famille WHERE description LIKE :niveau');
		$rechercheniv->execute(array(':niveau' => $_POST['niveau'] . '%'));
		$roy = $rechercheniv->fetch();
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE id_sous_famille LIKE :id_sous_famille');
		$recherche->execute(array(':id_sous_famille' => $roy['id'] . '%'));
	}

	//CASE DOUBLE
	//Nom de produit && Reference
	if(((isset($_POST['descrip'])) && ($_POST['descrip'] != '')) && (((isset($_POST['reference_part_number'])) && ($_POST['reference_part_number'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE description LIKE :descrip OR reference_part_number LIKE :reference_part_number');
		$recherche->execute(array(':descrip' => $_POST['descrip'] . '%',
									':reference_part_number' => $_POST['reference_part_number'] . '%'));
	}
	//Nom de produit && Reference interne
	if(((isset($_POST['descrip'])) && ($_POST['descrip'] != '')) && (((isset($_POST['reference'])) && ($_POST['reference'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE description LIKE :descrip OR reference LIKE :reference');
		$recherche->execute(array(':descrip' => $_POST['descrip'] . '%',
									':reference' => $_POST['reference'] . '%'));
	}
	//Nom de produit && Famille
	if(((isset($_POST['descrip'])) && ($_POST['descrip'] != '')) && (((isset($_POST['famille'])) && ($_POST['famille'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE description LIKE :descrip');
		$recherchefam = $Yaka->prepare('SELECT * FROM famille WHERE description LIKE :famille');
		$recherchefam->execute(array(':famille' => $_POST['famille'] . '%'));
		$recherche->execute(array(':descrip' => $_POST['descrip'] . '%'));
	}
	//Nom de produit && Niveau
	if(((isset($_POST['descrip'])) && ($_POST['descrip'] != '')) && (((isset($_POST['niveau'])) && ($_POST['niveau'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE description LIKE :descrip');
		$rechercheniv = $Yaka->prepare('SELECT * FROM sous_famille WHERE niveau LIKE :niveau');
		$rechercheniv->execute(array(':niveau' => $_POST['niveau'] . '%'));
		$recherche->execute(array(':descrip' => $_POST['descrip'] . '%'));
	}
	//Reference && Reference interne
	if(((isset($_POST['reference_part_number'])) && ($_POST['reference_part_number'] != '')) && (((isset($_POST['reference'])) && ($_POST['reference'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE reference_part_number LIKE :reference_part_number OR reference LIKE :reference');
		$recherche->execute(array(':reference_part_number' => $_POST['reference_part_number'] . '%',
									':reference' => $_POST['reference'] . '%'));
	}//Reference && Famille
	if(((isset($_POST['reference_part_number'])) && ($_POST['reference_part_number'] != '')) && (((isset($_POST['famille'])) && ($_POST['famille'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE reference_part_number LIKE :reference_part_number');
		$recherchefam = $Yaka->prepare('SELECT * FROM famille WHERE description LIKE :famille');
		$recherchefam->execute(array(':famille' => $_POST['famille'] . '%'));
		$recherche->execute(array(':reference_part_number' => $_POST['reference_part_number'] . '%'));
	}
	//Reference && Niveau
	if(((isset($_POST['reference_part_number'])) && ($_POST['reference_part_number'] != '')) && (((isset($_POST['niveau'])) && ($_POST['niveau'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE reference_part_number LIKE :reference_part_number');
		$rechercheniv = $Yaka->prepare('SELECT * FROM sous_famille WHERE niveau LIKE :niveau');
		$rechercheniv->execute(array(':niveau' => $_POST['niveau'] . '%'));
		$recherche->execute(array(':reference_part_number' => $_POST['reference_part_number'] . '%'));
	}
	//Reference interne && Famille
	if(((isset($_POST['reference'])) && ($_POST['reference'] != '')) && (((isset($_POST['famille'])) && ($_POST['famille'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE reference LIKE :reference');
		$recherchefam = $Yaka->prepare('SELECT * FROM famille WHERE description LIKE :famille');
		$recherchefam->execute(array(':famille' => $_POST['famille'] . '%'));
		$recherche->execute(array(':reference' => $_POST['reference'] . '%'));
	}
	//Reference itnerne && Niveau
	if(((isset($_POST['reference'])) && ($_POST['reference'] != '')) && (((isset($_POST['niveau'])) && ($_POST['niveau'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE reference LIKE :reference');
		$rechercheniv = $Yaka->prepare('SELECT * FROM sous_famille WHERE niveau LIKE :niveau');
		$rechercheniv->execute(array(':niveau' => $_POST['niveau'] . '%'));
		$recherche->execute(array(':reference' => $_POST['reference'] . '%'));
	}
	//Famille && Niveau
	if(((isset($_POST['famille'])) && ($_POST['famille'] != '')) && (((isset($_POST['niveau'])) && ($_POST['niveau'] != ''))))
	{
		$recherchefam = $Yaka->prepare('SELECT * FROM famille WHERE description LIKE :famille');
		$recherchefam->execute(array(':famille' => $_POST['famille'] . '%'));
		$rechercheniv = $Yaka->prepare('SELECT * FROM sous_famille WHERE niveau LIKE :niveau');
		$rechercheniv->execute(array(':niveau' => $_POST['niveau'] . '%'));
	}
	
	//CASE 3
	//Nom de produit && Reference && Reference interne
	if(((isset($_POST['descrip'])) && ($_POST['descrip'] != '')) && (((isset($_POST['reference_part_number'])) && ($_POST['reference_part_number'] != ''))) && (((isset($_POST['reference'])) && ($_POST['reference'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE description LIKE :descrip OR reference LIKE :reference OR reference_part_number LIKE :reference_part_number ');
		$recherche->execute(array(':descrip' => $_POST['descrip'] . '%',
									':reference_part_number' => $_POST['reference_part_number'] . '%',
									':reference' => $_POST['reference'] . '%'));
	}
	//Nom de produit && Reference && Famille
	if(((isset($_POST['descrip'])) && ($_POST['descrip'] != '')) && (((isset($_POST['reference_part_number'])) && ($_POST['reference_part_number'] != ''))) && (((isset($_POST['famille'])) && ($_POST['famille'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE description LIKE :descrip OR reference_part_number LIKE :reference_part_number');
		$recherchefam = $Yaka->prepare('SELECT * FROM famille WHERE description LIKE :famille');
		$recherchefam->execute(array(':famille' => $_POST['famille'] . '%'));
		$recherche->execute(array(':descrip' => $_POST['descrip'] . '%',
									':reference_part_number' => $_POST['reference_part_number'] . '%'));
	}
	//Nom de produit && Reference && Niveau
	if(((isset($_POST['descrip'])) && ($_POST['descrip'] != '')) && (((isset($_POST['reference_part_number'])) && ($_POST['reference_part_number'] != ''))) && (((isset($_POST['niveau'])) && ($_POST['niveau'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE description LIKE :descrip OR reference LIKE :reference');
		$rechercheniv = $Yaka->prepare('SELECT * FROM sous_famille WHERE niveau LIKE :niveau');
		$rechercheniv->execute(array(':niveau' => $_POST['niveau'] . '%'));
		$recherche->execute(array(':descrip' => $_POST['descrip'] . '%',
									':reference_part_number' => $_POST['reference_part_number'] . '%'));
	}
	//Nom de produit && Reference interne && Famille
	if(((isset($_POST['descrip'])) && ($_POST['descrip'] != '')) && (((isset($_POST['reference'])) && ($_POST['reference'] != ''))) && (((isset($_POST['famille'])) && ($_POST['famille'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE description LIKE :descrip OR reference LIKE :reference');
		$recherchefam = $Yaka->prepare('SELECT * FROM famille WHERE description LIKE :famille');
		$recherchefam->execute(array(':famille' => $_POST['famille'] . '%'));
		$recherche->execute(array(':descrip' => $_POST['descrip'] . '%',
									':reference' => $_POST['reference'] . '%'));
	}
	//Nom de produit && Reference interne && Niveau
	if(((isset($_POST['descrip'])) && ($_POST['descrip'] != '')) && (((isset($_POST['reference'])) && ($_POST['reference'] != ''))) && (((isset($_POST['niveau'])) && ($_POST['niveau'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE description LIKE :descrip OR reference LIKE :reference');
		$rechercheniv = $Yaka->prepare('SELECT * FROM sous_famille WHERE niveau LIKE :niveau');
		$rechercheniv->execute(array(':niveau' => $_POST['niveau'] . '%'));
		$recherche->execute(array(':descrip' => $_POST['descrip'] . '%',
									':reference' => $_POST['reference'] . '%'));
	}
	//Nom de produit && Famille && Niveau
	if(((isset($_POST['descrip'])) && ($_POST['descrip'] != '')) && (((isset($_POST['famille'])) && ($_POST['famille'] != ''))) && (((isset($_POST['niveau'])) && ($_POST['niveau'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE description LIKE :descrip');
		$recherchefam = $Yaka->prepare('SELECT * FROM famille WHERE description LIKE :famille');
		$rechercheniv = $Yaka->prepare('SELECT * FROM sous_famille WHERE niveau LIKE :niveau');
		$rechercheniv->execute(array(':niveau' => $_POST['niveau'] . '%'));
		$recherchefam->execute(array(':famille' => $_POST['famille'] . '%'));
		$recherche->execute(array(':descrip' => $_POST['descrip'] . '%'));
	}
	//Reference && Reference interne && Famille
	if(((isset($_POST['reference_part_number'])) && ($_POST['reference_part_number'] != '')) && (((isset($_POST['reference'])) && ($_POST['reference'] != ''))) && (((isset($_POST['famille'])) && ($_POST['famille'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE reference_part_number LIKE :reference_part_number OR reference LIKE :reference');
		$recherchefam = $Yaka->prepare('SELECT * FROM famille WHERE description LIKE :famille');
		$recherchefam->execute(array(':famille' => $_POST['famille'] . '%'));
		$recherche->execute(array(':reference_part_number' => $_POST['reference_part_number'] . '%',
									':reference' => $_POST['reference'] . '%'));
	}
	//Reference && Reference interne && Niveau
	if(((isset($_POST['reference_part_number'])) && ($_POST['reference_part_number'] != '')) && (((isset($_POST['reference'])) && ($_POST['reference'] != ''))) && (((isset($_POST['niveau'])) && ($_POST['niveau'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE reference_part_number LIKE :reference_part_number OR reference LIKE :reference');
		$rechercheniv = $Yaka->prepare('SELECT * FROM sous_famille WHERE niveau LIKE :niveau');
		$rechercheniv->execute(array(':niveau' => $_POST['niveau'] . '%'));
		$recherche->execute(array(':reference_part_number' => $_POST['reference_part_number'] . '%',
									':reference' => $_POST['reference'] . '%'));
	}
	//Reference interne && Famille && Niveau
	if(((isset($_POST['reference'])) && ($_POST['reference'] != '')) && (((isset($_POST['famille'])) && ($_POST['famille'] != ''))) && (((isset($_POST['niveau'])) && ($_POST['niveau'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE reference LIKE :reference');
		$rechercheniv = $Yaka->prepare('SELECT * FROM sous_famille WHERE niveau LIKE :niveau');
		$recherchefam = $Yaka->prepare('SELECT * FROM famille WHERE description LIKE :famille');
		$recherchefam->execute(array(':famille' => $_POST['famille'] . '%'));
		$rechercheniv->execute(array(':niveau' => $_POST['niveau'] . '%'));
		$recherche->execute(array(':reference' => $_POST['reference'] . '%'));
	}
	
	//CASE 4
	//Nom du produit && Reference && Reference interne && Famille
	if(((isset($_POST['descrip'])) && ($_POST['descrip'] != '')) && (((isset($_POST['reference_part_number'])) && ($_POST['reference_part_number'] != ''))) && (((isset($_POST['reference'])) && ($_POST['reference'] != ''))) && (((isset($_POST['famille'])) && ($_POST['famille'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE description LIKE :descrip OR reference_part_number LIKE :reference_part_number OR reference LIKE :reference');
		$recherchefam = $Yaka->prepare('SELECT * FROM famille WHERE description LIKE :famille');
		$recherchefam->execute(array(':famille' => $_POST['famille'] . '%'));
		$recherche->execute(array(':descrip' => $_POST['descrip'] . '%',
									':reference_part_number' => $_POST['reference_part_number'] . '%',
									':reference' => $_POST['reference'] . '%'));
	}
	//Nom du produit && Reference && Reference interne && Niveau
	if(((isset($_POST['descrip'])) && ($_POST['descrip'] != '')) && (((isset($_POST['reference_part_number'])) && ($_POST['reference_part_number'] != ''))) && (((isset($_POST['reference'])) && ($_POST['reference'] != ''))) && (((isset($_POST['niveau'])) && ($_POST['niveau'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE description LIKE :descrip OR reference_part_number LIKE :reference_part_number OR reference LIKE :reference');
		$rechercheniv = $Yaka->prepare('SELECT * FROM sous_famille WHERE niveau LIKE :niveau');
		$rechercheniv->execute(array(':niveau' => $_POST['niveau'] . '%'));
		$recherche->execute(array(':descrip' => $_POST['descrip'] . '%',
									':reference_part_number' => $_POST['reference_part_number'] . '%',
									':reference' => $_POST['reference'] . '%'));
	}
	//Reference && Reference interne && Famille && Niveau
	if(((isset($_POST['famille'])) && ($_POST['famille'] != '')) && (((isset($_POST['reference_part_number'])) && ($_POST['reference_part_number'] != ''))) && (((isset($_POST['reference'])) && ($_POST['reference'] != ''))) && (((isset($_POST['niveau'])) && ($_POST['niveau'] != ''))))
	{
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE reference_part_number LIKE :reference_part_number OR reference LIKE :reference');
		$recherchefam = $Yaka->prepare('SELECT * FROM famille WHERE description LIKE :famille');
		$rechercheniv = $Yaka->prepare('SELECT * FROM sous_famille WHERE niveau LIKE :niveau');
		$rechercheniv->execute(array(':niveau' => $_POST['niveau'] . '%'));
		$recherchefam->execute(array(':famille' => $_POST['famille'] . '%'));
		$recherche->execute(array(':reference_part_number' => $_POST['reference_part_number'] . '%',
									':reference' => $_POST['reference'] . '%'));
	}
?>