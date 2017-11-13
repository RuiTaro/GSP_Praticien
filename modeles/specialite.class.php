<?php
class Specialite 
{
    private $id;
    private $libelle;

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

    public function __toString()
    {
        return "id : ". $this->id. " - libelle : ".$this->libelle;
    }

    public static function getAll()
    {
        $sql="select * from specialite " ;
        $resultat=MonPdo::getInstance()->query($sql);
        $lesSpecialites=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Specialite'); 
        return $lesSpecialites;
    }

    public static function ajouterSpecialite($libelle)
    {
        $sql="insert into specialite values(null, :libelle)";
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':libelle', $libelle);
        $resultat->execute();
        throw new Exception("Problème dans l'ajout de specialite.") ;
    }
    public static function supprimerSpecialite($id)
    {
        $sql="delete from specialite where id= :id " ;
        $resultat=MonPdo::getInstance()->prepare($sql);
        $resultat->bindParam(':id', $id);
        $resultat->execute();
        throw new Exception("Problème dans la suppression de specialite.") ;
    }
    public static function findById($id)
    {
        $sql="select * from specialite where id= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($id)); // applique le paramètre
        $laSpecialite=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Specialite"); // lit la ligne et renvoie un objet Specialite
        return $laSpecialite[0];
   
    }

    public static function findByName($libelle)
    { 
        $sql="select * from specialite where libelle= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($libelle)); // applique le paramètre
        $Libelle_Specialite=$resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Specialite"); // lit la ligne et renvoie un objet Specialite
        return $Libelle_Specialite;
     
    }

    // modifie un objet Specialite
    public static function modifierSpecialite($id,$libelle)
    {
        $sql="update specialite set libelle= ? where id= ?" ;
        $resultat=MonPdo::getInstance()->prepare($sql); // prépare la requête
        $resultat->execute(array($libelle,$id)); // applique le paramètre
        throw new Exception("Problème dans la modification de specialite.") ;
    } 
}