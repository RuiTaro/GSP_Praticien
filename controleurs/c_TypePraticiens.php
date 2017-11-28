<?php
$action = $_REQUEST['action']; //récupération de l'action
//echo "action:".$action;
switch($action)
{ 
	case 'all': //pour afficher tous les specialites
		{
			$lesTypePraticiens=TypePraticien::getAllTP(); //on fait appel  à la méthode d'accès aux données de la classe TypePraticien
			include("vues/v_TypePraticien.php");//puis on affiche la vue qui utilise les données
			break;
		}
    
    case 'rechercheTypePrat': 
					include("vues/v_rechercheSpecialite.php");
					break;
					
	case 'result':

					$idSpec=$_POST['idSpec'];
					$lesSpecialites=TypePraticien::findByName($_POST['nomSpec']);
					if (!empty($lesSpecialites)) 
		        	{
		        		include("vues/v_TypePraticien.php");
		            	
		        	}
				
					else 
					{
						header("refresh: 0;url=index.php?uc=specialite&action=rechercheSpecialite");
					}
					break;
	
	default:echo "rien";
	}
	?>
