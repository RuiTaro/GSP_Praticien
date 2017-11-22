<div id="page">
	<div id="contenu">
		<div class="box">
		<?php
		// si la variable $_REQUEST['Pra_Num'] est vide c'est qu'il s'agit d'un nouvel Praticien à créer
		if(!empty($_REQUEST['Pra_Num'])){ // si on demande une modification d'un Praticien
			$LePraticien=Praticien::findById($_REQUEST['Pra_Num']); // trouve le Praticien et on renvoie un objet Praticien
		}
		?>
			<h2>Fiche Praticien</h2> 
			<section>
				<form action="index.php?uc=GestionPraticiens&action=VerifForm" method="post">
				<input type="hidden" name="Pra_Num" value='<?php if(!empty($_REQUEST['Pra_Num'])){echo $LePraticien->getId();}?>'>
				<label for="nomPrat"><font color="red">Nom du praticien à ajouter</font></label> 
				<input type="text" name="nomPrat" id="nomPrat" value="<?php if(!empty($_REQUEST['Pra_Num'])){echo $LePraticien->getNom();} ?>"><!-- 
				<label for="AdressePrat">Adresse</label> 
				<input type="text" name="AdressePrat" id="AdressePrat" value="<?php //if(!empty($_REQUEST['Pra_Num'])){echo $//LePraticien->getAdresse();} ?>">
				<label for="CPPrat">Code postal</label> 
				<input type="text" name="CPPrat" id="CPPrat" value="<?php //if(!empty($_REQUEST['Pra_Num'])){echo $LePraticien//->getCP();} ?>">
				<label for="VillePrat">Ville</label> 
				<input type="text" name="VillePrat" id="VillePrat" value="<?php //if(!empty($_REQUEST['Pra_Num'])){echo $//LePraticien->getVille();} ?>">
				<label for="CoefnotorietePrat">Coefficient de notoriété</label>  -->
				<!-- <input type="text" name="CoefnotorietePrat" id="CoefnotorietePrat" value="<?php //if(!empty($_REQUEST['Pra_Num'])){echo $LePraticien->getCoef();} ?>"> -->

				<input type="submit" value="<?php if(!empty($_REQUEST['Pra_Num'])){echo "Modifier le praticien";}else{echo "Ajouter le praticien";} ?>"/>
				</form>
			</section>
		</div>
	</div>
	<br class="clearfix" />
</div>