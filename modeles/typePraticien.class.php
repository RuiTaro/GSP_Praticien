<?php
class TypePraticien 
{
    private $Typ_Code;
    private $Typ_Libelle;

   public function getIdTP()
    {
        return $this->Typ_Code;
    }
    public function setIdTP($value)
    {
        $this->Typ_Code=$value;
    }

    public function getLibelleTP()
    {
        return $this->Typ_Libelle;
    }
    public function setLibelleTP($value)
    {
        $this->Typ_Libelle=$value;
    }

    public function __toString()
    {
        return "Id : ". $this->Typ_Code. " - Libellé : ".$this->Typ_Libelle;
    }

    public static function getAllTP()
    {
        $sql="select * from type_praticien " ;
        $resultat=MonPdo::getInstance()->query($sql);
        $lesTypePraticiens=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'TypePraticien'); 
        return $lesTypePraticiens;
    }

    public static function ajouterTypePraticiens($Typ_Libelle)
    {
        $sql="insert into type_praticien values(null, :Typ_Libelle)";
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':Typ_Libelle', $Typ_Libelle);
        $resultat->execute();
        throw new Exception("Problème dans l'ajout de type de praticiens.") ;
    }
    public static function supprimerTypePraticiens($Typ_Code)
    {
        $sql="delete from type_praticien where Typ_Code= :Typ_Code " ;
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':Typ_Code', $Typ_Code);
        $resultat->execute();
        throw new Exception("Problème dans la suppression de type de praticiens.") ;
    }
    public static function findById($Typ_Code)
    {
        $sql="select * from type_praticien where Typ_Code= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($Typ_Code)); // applique le paramètre
        $leTypePraticien=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"TypePraticien"); // lit la ligne et renvoie un objet TypePraticien
        return $leTypePraticien[0];
   
    }

    public static function findByName($Typ_Libelle)
    { 
        $sql="select * from type_praticien where Typ_Libelle= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($Typ_Libelle)); // applique le paramètre
        $Libelle_TypePraticien=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"TypePraticien"); // lit la ligne et renvoie un objet TypePraticien
        return $Libelle_TypePraticien;
     
    }

    // modifie un objet TypePraticien
    public static function modifierTypePraticiens($Typ_Code,$Typ_Libelle)
    {
        $sql="update type_praticien set Typ_Libelle= ? where Typ_Code= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($Typ_Libelle,$Typ_Code)); // applique le paramètre
        throw new Exception("Problème dans la modification de type de praticiens.") ;
    }
}