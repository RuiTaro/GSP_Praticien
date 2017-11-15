<?php
class Praticien 
{
    private $Pra_Num;
    private $Pra_Nom;
    private $Pra_Adresse;
    private $Pra_CP;
    private $Pra_Ville;
    private $Coefnotoriete;

   public function getId()
    {
        return $this->Pra_Num;
    }
    public function setId($value)
    {
        $this->Pra_Num=$value;
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
        return "id : ". $this->Pra_Num. " - nom : ".$this->Pra_Nom;
    }

    public static function getAll()
    {
        $sql="select * from praticien " ;
        $resultat=MonPdo::getInstance()->query($sql);
        $lesPraticiens=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Praticien'); 
        return $lesPraticiens;
    }

    public static function ajouterPraticien($Pra_Num,$adresse,$cp,$ville,$coef)
    {
        $sql="insert into praticien values(null, :nom , :adresse, :cp, :ville, :coef)" ;
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':nom', $nom,':adresse', $adresse,':cp', $cp,':ville', $ville,':coef', $coef);
        $resultat->execute();
        throw new Exception("Problème dans l'ajout de praticien.") ;
    }
    public static function supprimerPraticien($id)
    {
        $sql="delete from praticien where Pra_Num= :id " ;
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':id', $id);
        $resultat->execute();
        throw new Exception("Problème dans la suppression de praticien.") ;
    }
    public static function findById($id)
    {
        $sql="select * from praticien where Pra_Num= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($id)); // applique le paramètre
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
    public static function modifierPraticien($id,$nom)
    {
        $sql="update praticien set Pra_Nom= ? where id= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($nom,$id)); // applique le paramètre
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