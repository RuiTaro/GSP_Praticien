<?php
class Specialite 
{
    private $Spe_Code;
    private $Spe_Libelle;

   public function getSpe_Code()
    {
        return $this->Spe_Code;
    }
    public function setSpe_Code($value)
    {
        $this->Spe_Code=$value;
    }

    public function getLibelleS()
    {
        return $this->Spe_Libelle;
    }
    public function setLibelleS($value)
    {
        $this->Spe_Libelle=$value;
    }

    public function __toString()
    {
        return "Id : ". $this->Spe_Code. " - Libellé : ".$this->Spe_Libelle;
    }

    public static function getAll()
    {
        $sql="select * from specialite " ;
        $resultat=MonPdo::getInstance()->query($sql);
        $lesSpecialites=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Specialite'); 
        return $lesSpecialites;
    }

    public static function ajouterSpecialite($Spe_Libelle)
    {
        $sql="insert into specialite values(null, :Spe_Libelle)";
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':Spe_Libelle', $Spe_Libelle);
        $resultat->execute();
        throw new Exception("Problème dans l'ajout de specialite.") ;
    }
    public static function supprimerSpecialite($Spe_Code)
    {
        $sql="delete from specialite where Spe_Code= :Spe_Code " ;
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':Spe_Code', $Spe_Code);
        $resultat->execute();
        throw new Exception("Problème dans la suppression de specialite.") ;
    }
    public static function findById($Spe_Code)
    {
        $sql="select * from specialite where Spe_Code= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($Spe_Code)); // applique le paramètre
        $laSpecialite=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Specialite"); // lit la ligne et renvoie un objet Specialite
        return $laSpecialite[0];
   
    }

    public static function findByName($Spe_Libelle)
    { 
        $sql="select * from specialite where Spe_Libelle= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($Spe_Libelle)); // applique le paramètre
        $Libelle_Specialite=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Specialite"); // lit la ligne et renvoie un objet Specialite
        return $Libelle_Specialite;
     
    }

    // modifie un objet Specialite
    public static function modifierSpecialite($Spe_Code,$Spe_Libelle)
    {
        $sql="update specialite set Spe_Libelle= ? where Spe_Code= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($Spe_Libelle,$Spe_Code)); // applique le paramètre
        throw new Exception("Problème dans la modification de specialite.") ;
    } 
}