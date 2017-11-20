<div id="tabs-3" class="tab-content">
	<table class="responstable"> 
	  	<tr>
		    <th>Sélection</th>
		    <th data-th="Driver details"><span>Numéro</span></th>
            <th>Libelle</th>
		    <th>Options</th>
	  	</tr>


	  	<?php
    		foreach($lesTypePraticiens as $TypePraticien) //parcours du tableau d'objets récupérés
    		{   
		        $IdTypePrat=$TypePraticien->getId();           
		        $Libelle=$TypePraticien ->getLibelle(); 
       
    
?>
		<tr> 
        <td><input type="checkbox"/></td>
        <td><?php echo $IdTypePrat; ?></td>
        <td><?php echo $Libelle; ?></td>
        <td></td>
		</tr>

<?php 
    } 
?>

	  	 
	</table>
</div>

	


