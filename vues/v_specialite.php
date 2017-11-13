<div id="page">
	<div id="content"> 
		<div class="box"> 
			<h2>Liste des spécialités</h2>
			<section>
			<?php		
			If (!empty( $_SESSION['connexion'])) // si quelqu'un est connecté
			{ ?>
				<a class="btn" href='index.php?uc=Specialites&action=ajouter'>Ajouter une spécialité</a>
			<?php } ?>
			<section>
			<table><tr><th>Numéro</th><th>Nom</th><th>Actions</th></tr>
			<?php 
				foreach($lesSpecialites as $Specialite) //parcours du tableau d'objets récupérés
				{ 	
					$idSpe=$Specialite->getId();           
					$nomSpe=$Specialite ->getNom();
			?>
				<tr>
					<!--affichage dans des liens-->
					<td width=5%> <?php echo $idSpe?> </td><td width=80%> <?php echo $nomSpe?></a></td>
					<td class='action' width=15%>
						<a href='index.php?uc=Morceau&action=Specialites&numSpecialite=<?php echo $idSpe ?>' class="imageRechercher" title='Voir la liste des morceaux'></a> 
				<?php		
				If (!empty( $_SESSION['connexion']))  
				{ ?>	
					<a href='index.php?uc=Specialites&action=modifier&numSpecialite=<?php echo $idSpe ?>' class="imageModifier" title="modifier la spécialité"></a>
					<span class="imageSupprimer" onclick="javascript:supprArtiste('<?php echo $idSpe ;?>')" title="supprimer la spécialité" ></span> <!-- on met un span pour pouvoir invoquer le on click -->
				<?php  } ?>
					</td>
				</tr>

			<?php
				}
			?>
			</table>
			</section>
		</div>
	</div>
	<br class="clearfix" />
</div>


