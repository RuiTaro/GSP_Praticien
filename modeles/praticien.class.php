<?php
class Praticien 
{
    private $id;
    private $nom;
    private $adresse;
    private $cp;
    private $ville;
    private $coef;

   public function getId()
    {
        return $this->id;
    }
    public function setId($value)
    {
        $this->id=$value;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($value)
    {
        $this->nom=$value;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($value)
    {
        $this->adresse=$value;
    }

    public function getCP()
    {
        return $this->cp;
    }
    public function setCP($value)
    {
        $this->cp=$value;
    }

    public function getVille()
    {
        return $this->ville;
    }
    public function setVille($value)
    {
        $this->ville=$value;
    }

    public function getCoef()
    {
        return $this->coef;
    }
    public function setCoef($value)
    {
        $this->coef=$value;
    }

    public function __toString()
    {
        return "id : ". $this->id. " - nom : ".$this->nom;
    }

    public static function getAll()
    {
        $sql="select * from praticien " ;
        $resultat=MonPdo::getInstance()->query($sql);
        $lesPraticiens=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Praticien'); 
        return $lesPraticiens;
    }

    public static function ajouterPraticien($nom,$adresse,$cp,$ville,$coef)
    {
        $sql="insert into praticien values(null, :nom , :adresse, :cp, :ville, :coef)" ;
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':nom', $nom,':adresse', $adresse,':cp', $cp,':ville', $ville,':coef', $coef);
        $resultat->execute();
        throw new Exception("Problème dans l'ajout de praticien.") ;
    }
    public static function supprimerPraticien($id)
    {
        $sql="delete from praticien where id= :id " ;
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':id', $id);
        $resultat->execute();
        throw new Exception("Problème dans la suppression de praticien.") ;
    }
    public static function findById($id)
    {
        $sql="select * from praticien where id= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($id)); // applique le paramètre
        $lePraticien=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Praticien"); // lit la ligne et renvoie un objet Praticien
        return $lePraticien[0];
   
    }

    public static function findByName($nom)
    { 
        $sql="select * from praticien where nom= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($nom)); // applique le paramètre
        $NomPraticien=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Praticien"); // lit la ligne et renvoie un objet Praticien
        return $NomPraticien;
     
    }

    // modifie un objet Praticien
    public static function modifierPraticien($id,$nom)
    {
        $sql="update praticien set nom= ? where id= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($nom,$id)); // applique le paramètre
        throw new Exception("Problème dans la modification de praticien.") ;
    }
}