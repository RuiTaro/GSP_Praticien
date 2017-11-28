<div id="page">
	<div id="contenu">
		<div class="box">
		<?php
		// si la variable $_REQUEST['Typ_Code'] est vide c'est qu'il s'agit d'un nouvel Praticien à créer
		if(!empty($_REQUEST['Typ_Code']))
		{ // si on demande une modification d'un Praticien
			$lesTypePraticiens=TypePraticien::findById($_REQUEST['Typ_Code']); // trouve le Praticien et on renvoie un objet Praticien
		}
		 
		
		?>
			<h2>Fiche Praticien</h2> 
			<section>
				<form action="index.php?uc=GestionPraticiens&action=VerifForm" method="POST">

				<input type="hidden" name="Typ_Code" value='<?php if(!empty($_REQUEST['Typ_Code'])){echo $lesTypePraticiens->getIdP();}?>'> 

				<label for="Typ_Libelle"><font color="#A52A2A">Libelle</font></label> 
				<input type="text" name="Typ_Libelle" id="Typ_Libelle" value="<?php if(!empty($_REQUEST['Typ_Code'])){echo $lesTypePraticiens->getNom();} ?>"><br><br>

				<input type="submit" value="<?php if(!empty($_REQUEST['Typ_Code'])){echo "Modifier le type";}else{echo "Ajouter le type";} ?>"/>
				</form>
			</section>
		</div>
	</div>
	<br class="clearfix" />
</div>