<div id="page">
	<div id="content">
		<div class="box">
		<?php
		
		if(!empty($_REQUEST['nomalb']))
		{ 
			$LeAlbum=Album::findByName($_REQUEST['nomalb']); 
		}
		?>
			<h2>Les Albums</h2>
			<section>
				<form action='index.php?uc=Albums&action=result' method='POST'>
				<input type='hidden' name="idAlbum" value='<?php if(!empty($_REQUEST['nomalb'])){echo $LeAlbum->getId();}?>'>
				<label for "nomAlbum">Nom de l'album</label> <input type="text" name="nomAlbum" id="nomAlbum" 
				value="<?php if(!empty($_REQUEST['nomalb'])){echo $LeArtiste->getNom();} ?>">
				<input type="submit" value="Lancer"/>
				</form>

			</section>
		</div>
	</div>
	<br class="clearfix" />
</div>

