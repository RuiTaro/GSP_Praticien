<?php
$action = $_REQUEST['action']; //récupération de l'action
//echo "action:".$action;
switch($action)
{ 
	case 'all': //pour afficher tous les specialites
		{
			$lesSpecialites=Specialite::getAllS(); //on fait appel  à la méthode d'accès aux données de la classe Specialite
			include("vues/v_specialite.php");//puis on affiche la vue qui utilise les données
			break;
		} 
    
    case 'rechercheSpec': 
					include("vues/v_rechercheSpecialite.php");
					break;
					
	case 'result':

					$Spe_Code=$_POST['Spe_Code'];
					$lesSpecialites=Specialite::findByNameS($_POST['Spe_Libelle']);
					if (!empty($lesSpecialites)) 
		        	{
		        		include("vues/v_specialite.php");
		            	
		        	}
				
					else 
					{
						header("refresh: 0;url=index.php?uc=GestionPraticiens&action=rechercheSpecialite");
					}
					break;

    case 'modifierS' : 
					include("vues/v_formSpeciaite.php");
					break;
					
	case 'ajouterS' :
					include("vues/v_formSpeciaite.php");
					break;

	case 'FormS' :	
					if(!empty($_POST['Spe_Code'])) // s'il s'agit d'une modification
					{
						Specialite::modifierSpecialite($_POST['Spe_Code'],$_POST['Spe_Libelle']);
						header("refresh: 0;url=index.php?uc=GestionPraticiens&action=all");
					}
					else // s'il s'agit d'un ajout
					{
						Specialite::ajouterSpecialite($_POST['Spe_Libelle']);
						header("refresh: 0;url=index.php?uc=GestionPraticiens&action=all");
					}
					break;

	case 'supprimerS' :
					$lesSpecialites=$_POST['supp_S'];
					foreach($lesSpecialites as $specialite) 
					{
						Specialite::supprimerSpecialite($specialite);
					}
					
					header("refresh: 0;url=index.php?uc=GestionPraticiens&action=allS");
					break;


	case 'praticien': //on vient de choisir un praticien on est repassé par index
		{
		//on fait appel à la méthode getSpec de Praticien avec le numéro de Praticien
		
		$Praticien=Praticien::findById($_REQUEST['numPrat']); // recherche le Praticien
		$lesSpecialites=$Praticien->getSpec();
		include("/vues/v_specialitesPourPraticien.php");//puis on affiche la vue qui utilise les données
		break;
		} 
	
	default:echo "rien";
	}
	?>