<?php
$action = $_REQUEST['action']; //récupération de l'action
//echo "action:".$action;
switch($action)
{ 
	case 'all': //pour afficher tous les specialites
		{
			$lesSpecialites=Specialite::getAll(); //on fait appel  à la méthode d'accès aux données de la classe Specialite
			include("vues/v_albums.php");//puis on affiche la vue qui utilise les données
			break;
		}
    
    case 'rechercheSpec': 
					include("vues/v_rechercheSpecialite.php");
					break;
					
	case 'result':

					$idSpec=$_POST['idSpec'];
					$lesSpecialites=Specialite::findByName($_POST['nomSpec']);
					if (!empty($lesSpecialites)) 
		        	{
		        		include("vues/v_specialite.php");
		            	
		        	}
				
					else 
					{
						header("refresh: 0;url=index.php?uc=specialite&action=rechercheSpecialite");
					}
					break;

	case 'praticien': //on vient de choisir un praticien on est repassé par index
		{
		//on fait appel à la méthode getSpec de Praticien avec le numéro de Praticien
		
		$Praticien=Praticien::findById($_REQUEST['numPrat']); // recherche le Praticien
		$lesPraticiens=$Praticien->getSpec();
		include("/vues/v_specialitesPourPraticien.php");//puis on affiche la vue qui utilise les données
		break;
		} 
	
	default:echo "rien";
	}
	?>
