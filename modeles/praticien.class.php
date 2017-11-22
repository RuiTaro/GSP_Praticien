<?php
class Praticien 
{
    private $Pra_Num;
    private $Type_Pra;
    private $Pra_Nom;
    private $Pra_Adresse;
    private $Pra_CP;
    private $Pra_Ville;
    private $Coefnotoriete;

   public function getIdP()
    {
        return $this->Pra_Num;
    }
    public function setIdP($value)
    {
        $this->Pra_Num=$value;
    }
     public function getTypeP()
    {
        return $this->Type_Pra;
    }
    public function setTypeP($value)
    {
        $this->Type_Pra=$value;
    }

    public function getNom()
    {
        return $this->Pra_Nom;
    }
    public function setNom($value)
    {
        $this->Pra_Nom=$value;
    }

    public function getAdresse()
    {
        return $this->Pra_Adresse;
    }
    public function setAdresse($value)
    {
        $this->Pra_Adresse=$value;
    }

    public function getCP()
    {
        return $this->Pra_CP;
    }
    public function setCP($value)
    {
        $this->Pra_CP=$value;
    }

    public function getVille()
    {
        return $this->Pra_Ville;
    }
    public function setVille($value)
    {
        $this->Pra_Ville=$value;
    }

    public function getCoef()
    {
        return $this->Coefnotoriete;
    }
    public function setCoef($value)
    {
        $this->Coefnotoriete=$value;
    }

    public function __toString()
    {
        return "Id : ". $this->Pra_Num. " - Nom : ".$this->Pra_Nom;
    }

    public static function getAll()
    {
        $sql="select * from praticien " ;
        $resultat=MonPdo::getInstance()->query($sql);
        $lesPraticiens=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Praticien'); 
        return $lesPraticiens;
    }

    public static function ajouterPraticien($Type_Pra, $Pra_Nom, $Pra_Adresse,$Pra_CP,$Pra_Ville,$Coefnotoriete)
    {
        $sql="insert into praticien values('',:Type_Pra, :Pra_Nom , :Pra_Adresse, :Pra_CP, :Pra_Ville, :Coefnotoriete)" ;
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':Type_Pra',$Type_Pra,':Pra_Nom', $Pra_Nom,':Pra_Adresse', $Pra_Adresse,':Pra_CP', $Pra_CP,':Pra_Ville', $Pra_Ville,':Coefnotoriete', $Coefnotoriete);
        $resultat->execute();
        throw new Exception("Problème dans l'ajout de praticien.") ;
    }
    public static function supprimerPraticien($Pra_Num)
    {
        $sql="delete from praticien where Pra_Num= :id " ;
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':id', $Pra_Num);
        $resultat->execute();
        throw new Exception("Problème dans la suppression de praticien.") ;
    }
    public static function findById($Pra_Num)
    {
        $sql="select * from praticien where Pra_Num= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($Pra_Num)); // applique le paramètre
        $lePraticien=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Praticien"); // lit la ligne et renvoie un objet Praticien
        return $lePraticien[0];
   
    }

    public static function findByName($nom)
    { 
        $sql="select * from praticien where Pra_Nom= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($nom)); // applique le paramètre
        $NomPraticien=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Praticien"); // lit la ligne et renvoie un objet Praticien
        return $NomPraticien;
     
    }

    // modifie un objet Praticien
    public static function modifierPraticien($Pra_Num,$Pra_Nom)
    {
        $sql="update praticien set Pra_Nom= ? where Pra_Num= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($Pra_Nom,$Pra_Num)); // applique le paramètre
        throw new Exception("Problème dans la modification de praticien.") ;
    }
    /**s
     * renvoie la liste des specialites d'un praticien
     * @return array<Specialite> tableau d'instances de Specialite
    */ 

    public function getSpec()
    {
        $sql="select * from posseder where Spe_Code= ". $this->getId();
        $resultat=MonPdo::getInstance()->query($sql);
        $lesSpecialites=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Specialite');
        return $lesSpecialites;
    }
}