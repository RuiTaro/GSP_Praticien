<div id="page">
	<div id="content">
		<div class="box">
		<?php
		
		if(!empty($_REQUEST['Pra_Num']))
		{ 
			$LePraticien=Praticien::findByName($_REQUEST['Pra_Num']); // trouve le Praticien et on renvoie un objet Praticien
		}
		?>
			<h2>Les Praticiens</h2>
			<section>
				<form action='index.php?uc=Praticien&action=resultat' method='POST'>
				<input type='hidden' name="Pra_Num" value='<?php if(!empty($_REQUEST['Pra_Num'])){echo $LePraticien->getIdP();}?>'>
				<label for "nomPraticien">Nom du Praticien</label> <input type="text" name="nomPraticien" id="nomPraticien" 
				value="<?php if(!empty($_REQUEST['Pra_Num'])){echo $LePraticien->getNom();} ?>">
				<input type="submit" value="Lancer"/>
				</form>

			</section>
		</div>
	</div>
	<br class="clearfix" />
</div>

