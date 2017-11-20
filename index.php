<?php
session_start();
require_once("modeles/monPdo.php");
require_once("function.inc.php");
require_once("modeles/praticien.class.php");
require_once("modeles/specialite.class.php");
require_once("modeles/typePraticien.class.php");
require_once("modeles/utilisateur.class.php");


include("vues/v_entete.php");//bandeau en-tête
include("vues/v_menuCR.php") ;//menu

if(!isset($_REQUEST['uc']))  // si le contrôleur n'est pas défini (donc première venue sur le site
     $uc = 'accueil';        //on lui affecte accueil
else
	$uc = $_REQUEST['uc'];   //sinon on récupère le contrôleur

switch($uc) //suivant le contrôleur dans uc
{
	case 'accueil':
		include("vues/v_accueil.php");  //page d'accueil
		break;

	case 'FormConnexion':
		include("vues/v_connexion.php");  //page d'accueil
		break;
		
	case 'GestionPraticiens' :                               //on va au contrôleur secondaire c_Praticiens
		 include("controleurs/c_gestionPraticien.php");		 	 
		 break; 
	 
	case 'Specialites' :                               //on va au contrôleur secondaire c_Specialites
		 include("controleurs/c_Specialites.php");
		 break;

	case 'Type_Praticien' :                               //on va au contrôleur secondaire c_Type_Praticien
		 include("controleurs/c_Type_Praticien.php");
		 break;

	case 'administrer':								//on va au contrôleur secondaire c_Connexion
		 include("controleurs/c_Connexion.php");
		 break;	
}

?>



	
