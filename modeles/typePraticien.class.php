<?php
class TypePraticien 
{
    private $id;
    private $libelle;
    private $lieu;

   public function getId()
    {
        return $this->id;
    }
    public function setId($value)
    {
        $this->id=$value;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($value)
    {
        $this->libelle=$value;
    }

    public function getLieu()
    {
        return $this->lieu;
    }
    public function setLieu($value)
    {
        $this->lieu=$value;
    }

    public function __toString()
    {
        return "id : ". $this->id. " - libelle : ".$this->libelle;
    }

    public static function getAll()
    {
        $sql="select * from type_praticien " ;
        $resultat=MonPdo::getInstance()->query($sql);
        $lesTypePraticiens=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'TypePraticien'); 
        return $lesTypePraticiens;
    }

    public static function ajouterTypePraticiens($libelle,$lieu)
    {
        $sql="insert into type_praticien values(null, :libelle , :lieu)";
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':libelle', $libelle,':lieu', $lieu);
        $resultat->execute();
        throw new Exception("Problème dans l'ajout de type de praticiens.") ;
    }
    public static function supprimerTypePraticiens($id)
    {
        $sql="delete from type_praticien where id= :id " ;
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':id', $id);
        $resultat->execute();
        throw new Exception("Problème dans la suppression de type de praticiens.") ;
    }
    public static function findById($id)
    {
        $sql="select * from type_praticien where id= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($id)); // applique le paramètre
        $leTypePraticien=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"TypePraticien"); // lit la ligne et renvoie un objet TypePraticien
        return $leTypePraticien[0];
   
    }

    public static function findByName($libelle)
    { 
        $sql="select * from type_praticien where libelle= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($libelle)); // applique le paramètre
        $Libelle_TypePraticien=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"TypePraticien"); // lit la ligne et renvoie un objet TypePraticien
        return $Libelle_TypePraticien;
     
    }

    // modifie un objet TypePraticien
    public static function modifierTypePraticiens($id,$libelle)
    {
        $sql="update type_praticien set libelle= ? where id= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($libelle,$id)); // applique le paramètre
        throw new Exception("Problème dans la modification de type de praticiens.") ;
    }
}