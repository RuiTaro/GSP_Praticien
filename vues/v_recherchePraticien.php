<div id="page">
	<div id="content">
		<div class="box">
		<?php
		
		if(!empty($_REQUEST['nomart']))
		{ 
			$LeArtiste=Artist::findByName($_REQUEST['nomart']); // trouve l'artiste et on renvoie un objet Artist
		}
		?>
			<h2>Les Artistes</h2>
			<section>
				<form action='index.php?uc=Artistes&action=resultat' method='POST'>
				<input type='hidden' name="idArtiste" value='<?php if(!empty($_REQUEST['nomart'])){echo $LeArtiste->getId();}?>'>
				<label for "nomArtiste">Nom de l'artiste</label> <input type="text" name="nomArtiste" id="nomArtiste" 
				value="<?php if(!empty($_REQUEST['nomart'])){echo $LeArtiste->getNom();} ?>">
				<input type="submit" value="Lancer"/>
				</form>

			</section>
		</div>
	</div>
	<br class="clearfix" />
</div>

