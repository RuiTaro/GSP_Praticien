<div id="page">
	<div id="contenu">
		<div class="box">
		<?php
		// si la variable $_REQUEST['numprat'] est vide c'est qu'il s'agit d'un nouvel Praticien à créer
		if(!empty($_REQUEST['numprat'])){ // si on demande une modification d'un Praticien
			$LePraticien=Praticien::findById($_REQUEST['numprat']); // trouve le Praticien et on renvoie un objet Praticien
		}
		?>
			<h2>Fiche Praticien</h2> 
			<section>
				<form action='index.php?uc=Praticien&action=VerifForm' method='post'>
				<input type='hidden' name="idPraticien" value='<?php if(!empty($_REQUEST['numprat'])){echo $LePraticien->getId();}?>'>
				<label for "nomPraticien">Nom du praticien </label> <input type="text" name="nomPraticien" id="nomPraticien" 
				value="<?php if(!empty($_REQUEST['numprat'])){echo $LePraticien->getNom();} ?>">
				<input type="submit" value="<?php if(!empty($_REQUEST['numprat'])){echo "Modifier le praticien";}else{echo "Ajouter le praticien";} ?>" />
				</form>
			</section>
		</div>
	</div>
	<br class="clearfix" />
</div>

