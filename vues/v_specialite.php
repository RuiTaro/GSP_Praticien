<div id="tabs-2" class="tab-content">
	<table class="responstable">
<form action ="index.php?uc=GestionPraticiens&action=supprimerS" method="POST">
		<div class="btn-ajout">
		<input type="submit" value="Supprimer"/><img src="images/sup.jpg" width="100" height="35" style="height: 35px;border: 1px solid;border-radius: 10px; margin-bottom: 10px"/>
		<a href="index.php?uc=GestionPraticiens&action=ajouterS"><img src="images/ajouter.jpg" width="100" height="35" style="height: 35px;border: 1px solid;border-radius: 10px; margin-bottom: 10px"/></a>
		</div> 
	  	<tr>
		    <th>Sélection</th>
		    <th data-th="Driver details"><span>Numéro</span></th>
            <th>Libelle</th>
		    <th>Options</th> 
	  	</tr>
	  	
<?php
    foreach($lesSpecialites as $specialite) //parcours du tableau d'objets récupérés
    {   
        $idSpec=$specialite->getSpe_Code();           
        $Libelle=$specialite ->getLibelleS(); 
       
    
?>
		<tr> 
       <td><input type="checkbox" name="supp_S[]" value="<?php echo $idSpec; ?>"/></td>
        <td><?php echo $idSpec; ?></td>
        <td><?php echo $Libelle; ?></td>
        <td><a href='index.php?uc=GestionPraticiens&action=modifierS&Spe_Code=<?php echo $idSpec;?>'><img src="images/btn_modifier_inactif.gif" style="height: 35px; border: 1px solid; border-radius: 10px; margin: 10px; width: 40px;"/></a></td>
        </tr>

<?php 
    } 
?>	
</form>  	 
	</table>
</div>




