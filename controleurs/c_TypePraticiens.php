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
	case 'modifier' : 
					include("vues/v_formTypePraticien.php");
					break;
					
	case 'ajouter' :
					include("vues/v_formTypePraticien.php");
					break;

	case 'VerifForm' :	
					if(!empty($_POST['Typ_Code'])) // s'il s'agit d'une modification
					{
						TypePraticien::modifierTypePraticiens($_POST['Typ_Code'],$_POST['Typ_Libelle']);
						header("refresh: 0;url=index.php?uc=GestionPraticiens&action=all");
					}
					else // s'il s'agit d'un ajout
					{
						TypePraticien::ajouterTypePraticiens($_POST['Typ_Libelle']);
						header("refresh: 0;url=index.php?uc=GestionPraticiens&action=all");
					}
					break;
	case 'supprimerTP':
		$lesTypePraticiens=$_POST['supp_TP'];
		foreach($lesTypePraticiens as $TPraticien) 
		{
			Praticien::supprimerPraticien($TPraticien);
		}
		
		header("refresh: 0;url=index.php?uc=GestionPraticiens&action=all"); //a modifier pour mieux voir directement le résultat
		break;
	
	default:echo "rien";
	}
	?>
