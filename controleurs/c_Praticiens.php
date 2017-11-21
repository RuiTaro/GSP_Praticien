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

					$idPraticien=$_POST['idPraticien'];
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
					
					 
	case 'modifier' : // on appelle la même vue dans le cas d'un ajout ou d'une modification
					// la distinction se fera sur le paramètre de l'id de l'artiste (si c'est un ajout il n'y
					// a pas d'id puisqu'il est auto incrémenté et qu'il n'est donc pas connu avant l'ajout !
					include("vues/v_formPraticien.php");
					break;
					
	case 'ajouter' :
					include("vues/v_formPraticien.php");
					break;
					
	case 'VerifForm' :	
					if(!empty($_POST['idPraticien'])) // s'il s'agit d'une modification
					{
						// a compléter Artist::modifierArtiste($_POST['idArtiste'],$_POST['nomArtiste']);
						header("refresh: 0;url=index.php?uc=Praticien&action=all");
					}
					else // s'il s'agit d'un ajout
					{
						$ajout= Praticien::ajouterPraticien($_POST['nomPraticien']);
						header("refresh: 0;url=index.php?uc=Praticien&action=all");
					}
					break;
					
	case 'supprimer' :
					$sup= Praticien::supprimerPraticien($_REQUEST['numPrat']);
					header("refresh: 0;url=index.php?uc=Praticien&action=all");
					break;

	case 'Spécialité' :
					include("controleurs/c_Specialites.php");
					break;



	default: echo "rien";
} 
?>
