<div id="page">
	<div id="content">
        
		<div class="box">
			<h2>Liste des praticiens</h2>
			<section>
			<div class="container">

	<ul class="tabs">
		<li class="tab-link current" data-tab="tab-1">Praticiens</li>
        <li class="tab-link" data-tab="tab-2">Spécialité</li>
		<li class="tab-link" data-tab="tab-3">Type praticien</li>
		<li class="tab-link" data-tab="tab-4">Info</li>
	</ul>

	<div id="tab-1" class="tab-content current">
<table class="responstable">
  
  <tr>
   <th>Sélection</th>
    <th data-th="Driver details"><span>Num</span></th>
    <th>Nom</th>
    <th>Adresse</th>
    <th>Code postale</th>
    <th>Ville</th>
    <th>Coefficient</th>
    <th>Type</th>
    <th>Scpécialité</th>
    <th>Options</th>
  </tr>
<?php
  foreach($lesPraticiens as $praticien) //parcours du tableau d'objets récupérés
            {   
                $idPrat=$praticien->getId();           
                $nom=$praticien ->getNom();
                $adresse=$praticien->getAdresse();           
                $CP=$praticien ->getCP();
                $ville=$praticien ->getVille();
                $coef=$praticien->getCoef();
?>

    <tr>
            <td input type="radio"><?php echo $idPrat?></td><td input type="radio"><?php echo $nom?></td><td input type="radio"><?php echo $adresse?></td><td input type="radio"><?php echo $CP?></td><td input type="radio"><?php echo $ville?></td><td input type="radio"><?php echo $coef?></td><!--affichage dans des liens-->
  </tr>
</table>

	</div>
	<div id="tab-4" class="tab-content">
		Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	</div>

</div><!-- container -->

<script type="text/javascript">
	$(document).ready(function(){
	
	$('ul.tabs li').click(function()
    {
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

    })
    </script>
			</section>
		</div>
	</div>
	<br class="clearfix" />
</div>