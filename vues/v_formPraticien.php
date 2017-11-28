<div id="page">
	<div id="contenu">
		<div class="box">
		<?php
		// si la variable $_REQUEST['Pra_Num'] est vide c'est qu'il s'agit d'un nouvel Praticien à créer
		if(!empty($_REQUEST['Pra_Num']))
		{ // si on demande une modification d'un Praticien
			$LePraticien=Praticien::findById($_REQUEST['Pra_Num']); // trouve le Praticien et on renvoie un objet Praticien
		}
		 
		$lesTypePraticiens=TypePraticien::getAll($_REQUEST['Typ_Code']);
		?>
			<h2>Fiche Praticien</h2> 
			<section>
				<form action="index.php?uc=GestionPraticiens&action=VerifForm" method="POST">

				<input type="hidden" name="Pra_Num" value='<?php if(!empty($_REQUEST['Pra_Num'])){echo $LePraticien->getIdP();}?>'> 

				<label for="nomPrat"><font color="#A52A2A">Nom</font></label> 
				<input type="text" name="nomPrat" id="nomPrat" value="<?php if(!empty($_REQUEST['Pra_Num'])){echo $LePraticien->getNom();} ?>"><br><br>

				<label for="TypePrat"><font color="#A52A2A">Type du praticien</font></label> 
				<select name="TypePrat" id="TypePrat" value="<?php if(!empty($_REQUEST['Pra_Num'])){echo $LePraticien->getTypeP();} ?>">
					<?php 

						foreach($lesTypePraticiens as $TypePraticien)
							{
								echo "<option value=". $TypePraticien->getIdTP() ." "; 
								if(!empty($_REQUEST['Typ_Code']) && ($_REQUEST['Typ_Code'])== $TypePraticien->getIdTP()){
									echo "selected";
								}
								echo ">".$TypePraticien->getLibelleTP() ."</option>";
							} 

					?>
				</select><br><br>

				<label for="AdressePrat"><font color="#A52A2A">Adresse</font></label> 
				<input type="text" name="AdressePrat" id="AdressePrat" value="<?php if(!empty($_REQUEST['Pra_Num'])){echo $LePraticien->getAdresse();} ?>"><br><br>

				<label for="CPPrat"><font color="#A52A2A">Code postal</font></label> 
				<input type="text" name="CPPrat" id="CPPrat" value="<?php if(!empty($_REQUEST['Pra_Num'])){echo $LePraticien->getCP();} ?>"><br><br>

				<label for="VillePrat"><font color="#A52A2A">Ville</font></label> 
				<input type="text" name="VillePrat" id="VillePrat" value="<?php if(!empty($_REQUEST['Pra_Num'])){echo $LePraticien->getVille();} ?>"><br><br>

				<label for="CoefnotorietePrat"><font color="#A52A2A">Coefficient de notoriété</font></label> 
				<input type="text" name="CoefnotorietePrat" id="CoefnotorietePrat" value="<?php if(!empty($_REQUEST['Pra_Num'])){echo $LePraticien->getCoef();} ?>"><br><br><br><br>

				<input type="submit" value="<?php if(!empty($_REQUEST['Pra_Num'])){echo "Modifier le praticien";}else{echo "Ajouter le praticien";} ?>"/>
				</form>
			</section>
		</div>
	</div>
	<br class="clearfix" />
</div>