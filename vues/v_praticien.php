<head>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	$( function() {
	$( "#tabs" ).tabs();
	} );
	</script>
</head>

<div id="page">
	<div id="content">        
		<div class="box">
			<h2>Liste des praticiens</h2>
			<div class="container">				
				<div id="tabs">
				<ul>
					<li><a href="#tabs-1">Praticien</a></li>
					<li><a href="#tabs-2">Type praticien</a></li>
					<li><a href="#tabs-3">Spécialité</a></li>		
				</ul>

				<div id="tabs-1" class="tab-content current">
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

				<div id="tabs-2" class="tab-content">
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

				<div id="tabs-3" class="tab-content">
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
			  </div>			
			</div><!-- container -->	
		</div>
	</div>
	<br class="clearfix" />	
</div>	