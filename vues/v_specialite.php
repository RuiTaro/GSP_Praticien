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


