<div id="tabs-3" class="tab-content">
	<table class="responstable">
		<form action ="index.php?uc=GestionPraticiens&action=supprimerTP" method="POST">
		<div class="btn-ajout">
		<input type="submit" value="Supprimer"/><img src="images/sup.jpg" width="100" height="35" style="height: 35px;border: 1px solid;border-radius: 10px; margin-bottom: 10px"/>	
		<a href="index.php?uc=GestionPraticiens&action=ajouterTP"><img src="images/ajouter.jpg" width="100" height="35" style="height: 35px;border: 1px solid;border-radius: 10px; margin-bottom: 10px"/>
		</div>
	  	<tr>
		    <th>Sélection</th>
		    <th data-th="Driver details"><span>Numéro</span></th>
            <th>Libelle</th>
		    <th>Options</th>
	  	</tr>


	  	<?php
    		foreach($lesTypePraticiens as $TypePraticien) //parcours du tableau d'objets récupérés
    		{   
		        $IdTypePrat=$TypePraticien->getIdTP();           
		        $Libelle=$TypePraticien ->getLibelleTP(); 
       
    
?>
		<tr> 
        <td><input type="checkbox" name="supp_TP[]" value="<?php echo $IdTypePrat; ?>" /></td>
        <td><?php echo $IdTypePrat; ?></td>
        <td><?php echo $Libelle; ?></td>
        <td><a href='index.php?uc=GestionPraticiens&action=modifierTP&Typ_Code=<?php echo $IdTypePrat;?>'><img src="images/btn_modifier_inactif.gif" style="height: 35px; border: 1px solid; border-radius: 10px; margin: 10px; width: 40px;" /></a></td>
		</tr>

<?php 
    } 
?>

	  	 
	</table>
</div>

	


