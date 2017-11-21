<div id="tabs-2" class="tab-content">
	<table class="responstable">
		<div class="btn-ajout">
		<img src="images/sup.jpg" width="100" height="35" style="height: 35px;border: 1px solid;border-radius: 10px; margin-bottom: 10px"/>	
		<img src="images/ajouter.jpg" width="100" height="35" style="height: 35px;border: 1px solid;border-radius: 10px; margin-bottom: 10px"/>
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
        $Libelle=$specialite ->getLibelle(); 
       
    
?>
		<tr> 
        <td><input type="checkbox"/></td>
        <td><?php echo $idSpec; ?></td>
        <td><?php echo $Libelle; ?></td>
        <td><img src="images/btn_modifier_inactif.gif" style="height: 35px; border: 1px solid; border-radius: 10px; margin: 10px; width: 40px;" /></td>
		</tr>

<?php 
    } 
?>	
	  	 
	</table>
</div>




