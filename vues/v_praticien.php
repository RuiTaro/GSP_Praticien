<div id="tabs-1" class="tab-content current">
	<table class="responstable">
<form action ="index.php?uc=GestionPraticiens&action=supprimer" method="POST">
		<div class="btn-ajout">
		<i class="fa fa-trash" aria-hidden="true"></i>
		<input type="submit" value="Supprimer"/><img src="images/sup.jpg" width="100" height="35" style="height: 35px;border: 1px solid;border-radius: 10px; margin-bottom: 10px"/>
		<a href="index.php?uc=GestionPraticiens&action=ajouter"><img src="images/ajouter.jpg" width="100" height="35" style="height: 35px;border: 1px solid;border-radius: 10px; margin-bottom: 10px"/></a>
		</div>		  
	  	<tr>
		   	<th>Sélection</th>
		    <th data-th="Driver details"><span>Numéro</span></th>
            <th>Nom</th>
		    <th>Adresse</th>
		    <th>Code postale</th> 
		    <th>Ville</th>
		    <th>Coefficient</th>		    
		    <th>Options</th>
	  	</tr>
	  	<script>
			function supprPraticien(Pra_Num)  
			{
				if(confirm("Voulez vous vraimer supprimer ce praticien?"))
				{
					location.href='index.php?uc=GestionPraticiens&action=supprimer&numPrat='+Pra_Num;
				}
				else {
					alert("Le praticien n'a pas été supprimé.");
				}
			}
		</script>
  
            <?php
                foreach($lesPraticiens as $praticien) //parcours du tableau d'objets récupérés
                {   
                    $idPrat=$praticien->getIdP();           
                    $nom=$praticien ->getNom();
                    $adresse=$praticien->getAdresse();           
                    $CP=$praticien ->getCP();
                    $ville=$praticien ->getVille();
                    $coef=$praticien->getCoef();
                
            ?>
                    <tr> 
                    <td><input type="checkbox" name="supp_P[]" value="<?php echo $idPrat; ?>" /></td>
				    <td><?php echo $idPrat; ?></td>
				    <td><?php echo $nom; ?></td>
				    <td><?php echo $adresse; ?></td>
				    <td><?php echo $CP; ?></td>
				    <td><?php echo $ville; ?></td>
				    <td><?php echo $coef; ?></td>		            
                    <td><a href="index.php?uc=GestionPraticiens&action=all"><img src="images/btn_modifier_inactif.gif" style="height: 35px; border: 1px solid; border-radius: 10px; margin: 10px; width: 40px;"/></a></td>
                    </tr>

            <?php 
                } 
            ?>


     </form>
	</table>	
</div>			  