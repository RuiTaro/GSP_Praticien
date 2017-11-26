<?php
		
	if (!empty( $_SESSION['connexion'])) // si quelqu'un est connecté
		{ 
				include 'vues/v_headerTab.php';
				include 'controleurs/c_Praticiens.php';
				include 'controleurs/c_Specialite.php';
				include 'controleurs/c_TypePraticiens.php';
				include 'vues/v_footerTab.php';
				
	 	} 
	else
		{
			include 'vues/v_connexion.php';
		}

?>