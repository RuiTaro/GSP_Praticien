<div id="tabs-1" class="tab-content current">
	<table class="responstable">
		<div class="btn-ajout">
		<img src="images/sup.jpg" width="100" height="35" style="height: 35px;border: 1px solid;border-radius: 10px; margin-bottom: 10px"/>	
		<img src="images/ajouter.jpg" width="100" height="35" style="height: 35px;border: 1px solid;border-radius: 10px; margin-bottom: 10px"/>
		</div>				  
	  	<tr>
		   	<th>Sélection</th>
		    <th data-th="Driver details"><span>Numéro</span></th>
            <th>Nom</th>
		    <th>Adresse</th>
		    <th>Code postale</th>
		    <th>Ville</th>
		    <th>Coefficient</th>
		    <th>Type</th>
		    <th>Spécialité</th>
		    <th>Options</th>
	  	</tr>
  
            <?php
                foreach($lesPraticiens as $praticien) //parcours du tableau d'objets récupérés
                {   
                    $idPrat=$praticien->getId();           
                    $nom=$praticien ->getNom();
                    $adresse=$praticien->getAdresse();           
                    $CP=$praticien ->getCP();
                    $ville=$praticien ->getVille();
                    $coef=$praticien->getCoef();
                
            ?>
                    <tr> 
                    <td><input type="checkbox"/></td>
				    <td><?php echo $idPrat; ?></td>
				    <td><?php echo $nom; ?></td>
				    <td><?php echo $adresse; ?></td>
				    <td><?php echo $CP; ?></td>
				    <td><?php echo $ville; ?></td>
				    <td><?php echo $coef; ?></td>
		            <td></td>
                    <td></td>
                    <td><img src="images/btn_rechercher_inactif.gif" width="20" height="40"/></td>
                    </tr>

            <?php 
                } 
            ?>

  		  
	</table>	
</div>			  