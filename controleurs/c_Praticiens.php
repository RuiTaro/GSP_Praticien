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

	default:echo "rien";
	}
	?>
