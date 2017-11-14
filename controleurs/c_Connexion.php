<?php
$action = $_REQUEST['action']; //récupération de l'action
//echo "action:".$action;

switch($action)
{ 
	case 'verifConnexion': 
		$login=Utilisateur::VerifUser($_POST['login'], $_POST['mdp']);
        
		if (!empty($login)) 
        {
             $_SESSION['connexion']=$login;
             header("refresh: 0;url=vues/menuCR.php");

        }
		
		else 
		{
			header("refresh: 0;url=index.php?uc=administrer&action=connexion");
		}
		break;

    case 'connexion':
    	include("vues/v_accueil.php");
    	break;

    case 'deconnexion':
    unset($_SESSION['connexion']);
    	header("refresh: 0;url=index.php?uc=administrer&action=connexion");
    	break;

	default:echo "rien";
}
?>