<div id="page">
	<div id="content">
        
		<div class="box">
			<h2>Liste des praticiens</h2>
			<div class="container">

				<ul class="tabs">
					<li class="tab-link current" data-tab="tab-1">Praticien</li>
					<li class="tab-link" data-tab="tab-2">Type praticien</li>
					<li class="tab-link" data-tab="tab-3">Spécialité</li>		
				</ul>

				<div id="tab-1" class="tab-content current">
					<table class="responstable">
				  
					  	<tr>
						   	<th>Sélection</th>
						    <th data-th="Driver details"><span>Numéro</span></th>
                            <th>Nom</th>
						    <th>Adresse</th>
						    <th>Code postale</th>
						    <th>Ville</th>
						    <th>Coefficient</th>
						    <th>Type</th>
						    <th>Spécialité</th>
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
                                    <td><input type="checkbox"/></td>
        						    <td><?php echo $idPrat; ?></td>
        						    <td><?php echo $nom; ?></td>
        						    <td><?php echo $adresse; ?></td>
        						    <td><?php echo $CP; ?></td>
        						    <td><?php echo $ville; ?></td>
        						    <td><?php echo $coef; ?></td>
						            <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>

                            <?php 
                                } 
                            ?>

				  		  
					</table>	
				</div>

				<div id="tab-2" class="tab-content">
					<table class="responstable"> 
					  	<tr>
						    <th>Sélection</th>
						    <th data-th="Driver details"><span>Numéro</span></th>
                            <th>Libelle</th>
						    <th>Options</th>
					  	</tr>

                        <?php
                                foreach($lesSpecialites as $specialite) //parcours du tableau d'objets récupérés
                                {   
                                    $idSpec=$specialite->getSpe_Code();           
                                    $Libelle=$specialite ->getLibelle(); 
                                   
                                
                            ?>
                            <tr> 
                                    <td><input type="radio"/></td>
                                    <td><?php echo $idSpec; ?></td>
                                    <td><?php echo $Libelle; ?></td>
                                    <td></td>
                                    </tr>

                            <?php 
                                } 
                            ?>









				  
					  	<tr>
						    <td><input type="checkbox"/></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
					  	</tr>  
					</table>
				</div>

				<div id="tab-3" class="tab-content">
					<table class="responstable">
			  
					  <tr>
					    <th>Sélection</th>
					    <th data-th="Driver details"><span>Numéro</span></th>
                        <th>Nom</th>
					    <th>Adresse</th>
					    <th>Code postale</th>
					    <th>Ville</th>
					    <th>Coefficient</th>
					    <th>Type</th>
					    <th>Spécialité</th>
					    <th>Options</th>
					  </tr>
			  
					  <tr>
					    <td><input type="checkbox"/></td>
					    <td></td>
					    <td></td>
					    <td></td>
					    <td></td>
					    <td></td>
					    <td></td>
					    <td></td>
					    <td></td>
					  </tr>					  
					</table>
				</div>				
			</div><!-- container -->	
		</div>
	</div>
	<br class="clearfix" />	
</div>
<script type="text/javascript">
  	$(document).ready(function(){
  
  	$('ul.tabs li').click(function(){
  	var tab_id = $(this).attr('data-tab');

  	$('ul.tabs li').removeClass('current');
  	$('.tab-content').removeClass('current');

  	$(this).addClass('current');
  	$("#"+tab_id).addClass('current');
  	})

  	})
  </script>    		