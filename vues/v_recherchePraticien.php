<div id="page">
	<div id="content">
		<div class="box">
		<?php
		
		if(!empty($_REQUEST['nomprat']))
		{ 
			$LePraticien=Praticien::findByName($_REQUEST['nomprat']); // trouve le Praticien et on renvoie un objet Praticien
		}
		?>
			<h2>Les Praticiens</h2>
			<section>
				<form action='index.php?uc=Praticien&action=resultat' method='POST'>
				<input type='hidden' name="Pra_Num" value='<?php if(!empty($_REQUEST['nomprat'])){echo $LePraticien->getId();}?>'>
				<label for "nomPraticien">Nom du Praticien</label> <input type="text" name="nomPraticien" id="nomPraticien" 
				value="<?php if(!empty($_REQUEST['nomprat'])){echo $LePraticien->getNom();} ?>">
				<input type="submit" value="Lancer"/>
				</form>

			</section>
		</div>
	</div>
	<br class="clearfix" />
</div>

