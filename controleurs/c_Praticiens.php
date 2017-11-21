<?php
$action = $_REQUEST['action']; //récupération de l'action
//echo "action:".$action;
switch($action)
{ 
	case 'all': //pour afficher tous les praticiens
		{
			$lesPraticiens=Praticien::getAll(); //on fait appel  à la méthode d'accès aux données de la classe Praticien
			include("vues/v_praticien.php");//puis on affiche la vue qui utilise les données
			break;
		} 

	case 'recherchePrat' :
					include("vues/v_recherchePraticien.php");
					break;

	case 'resultat':

					$Pra_Num=$_POST['Pra_Num'];
					$lesPraticiens=Praticien::findByName($_POST['nomPraticien']);
					if (!empty($lesPraticiens)) 
		        	{
		  
		            	include("vues/v_praticien.php");
		        	}
				
					else 
					{
						header("refresh: 0;url=index.php?uc=Praticiens&action=recherchePrat");
					}
					break;		
					
					 
	case 'modifier' : 
					include("vues/v_formPraticien.php");
					break;
					
	case 'ajouter' :
					include("vues/v_formPraticien.php");
					break;
					
	case 'VerifForm' :	
					if(!empty($_POST['Pra_Num'])) // s'il s'agit d'une modification
					{
						$modif= Praticien::modifierPraticien($_POST['Pra_Num'],$_POST['nomPraticien']);
						header("refresh: 0;url=index.php?uc=Praticien&action=all");
					}
					else // s'il s'agit d'un ajout
					{
						$ajout= Praticien::ajouterPraticien($_POST['nomPraticien']);
						header("refresh: 0;url=index.php?uc=Praticien&action=all");
					}
					break;
					
	case 'supprimer' :
					$sup= Praticien::supprimerPraticien($_REQUEST['Pra_Num']);
					header("refresh: 0;url=index.php?uc=Praticien&action=all");
					break;

	case 'Spécialité' : 
					include("controleurs/c_Specialites.php");
					break;



	default: echo "rien";
} 
?>
