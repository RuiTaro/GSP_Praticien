<div id="tabs-2" class="tab-content">
	<table class="responstable"> 
	  	<tr>
		    <th>Sélection</th>
		    <th data-th="Driver details"><span>Numéro</span></th>
            <th>Libelle</th>
		    <th>Options</th>
	  	</tr>
	  	

	  	 
	</table>
</div>

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
        <td></td>
		</tr>

<?php 
    } 
?>	


