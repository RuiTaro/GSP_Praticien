<div id="page">
	<div id="content">
		<div class="boxtab"> 
			<?php
			echo "<h2>Les specialites de ".$Praticien->getNom()."</h2>";
			include("/vues/v_specialite.php");//puis on affiche la vue qui utilise les données
			?>