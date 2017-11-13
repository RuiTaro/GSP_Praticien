<div id="page">
	<div id="content">
		<div class="box">
		<?php
		
		if(!empty($_REQUEST['nomspec']))
		{ 
			$laSpecialite=Specialite::findByName($_REQUEST['nomspec']); 
		}
		?>
			<h2>Les Specialites</h2>
			<section>
				<form action='index.php?uc=Specialites&action=result' method='POST'>
				<input type='hidden' name="idspec" value='<?php if(!empty($_REQUEST['nomspec'])){echo $laSpecialite->getId();}?>'>
				<label for "nomSpecialite">Nom de la specialite</label> <input type="text" name="nomspec" id="nomspec" 
				value="<?php if(!empty($_REQUEST['nomspec'])){echo $laSpecialite->getLibelle();} ?>">
				<input type="submit" value="Lancer"/>
				</form>

			</section>
		</div>
	</div>
	<br class="clearfix" />
</div>

