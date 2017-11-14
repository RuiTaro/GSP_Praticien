<?php

class Utilisateur 
{
    public static function VerifUser($login, $mdp)
    {
        $sql="select * from utilisateur where login= :login and mdp= :mdp";
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':login', $login);
        $resultat->bindParam(':mdp', $mdp);
        $resultat->execute();
        $login=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Utilisateur');   
        return $login;
        //return $login[0];
    }	
}