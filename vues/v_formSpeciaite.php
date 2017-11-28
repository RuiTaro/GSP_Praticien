 <div id="page">
	<div id="contenu">
		<div class="box">
		<?php
		// si la variable $_REQUEST['Pra_Num'] est vide c'est qu'il s'agit d'un nouvel Praticien à créer
		if(!empty($_REQUEST['Spe_Code']))
		{ // si on demande une modification d'un Praticien
			$LePraticien=Specialite::findByIdS($_REQUEST['Spe_Code']); // trouve le Praticien et on renvoie un objet Praticien
		}
		?>
			<h2>Fiche Specialité</h2> 
			<section>
				<form action="index.php?uc=GestionPraticiens&action=FormS" method="POST">

				<input type="hidden" name="Spe_Code" value='<?php if(!empty($_REQUEST['Spe_Code'])){echo $laSpecialite->getSpe_Code();}?>'> 

				<label for="Spe_Libelle"><font color="#A52A2A">Libellé</font></label> 
				<input type="text" name="Spe_Libelle" id="Spe_Libelle" value="<?php if(!empty($_REQUEST['Spe_Code'])){echo $laSpecialite->getLibelleS();} ?>"><br><br>

				<input type="submit" value="<?php if(!empty($_REQUEST['Spe_Code'])){echo "Modifier la specialite";}else{echo "Ajouter la specialite";} ?>"/>
				</form>
			</section>
		</div>
	</div>
	<br class="clearfix" />
</div>