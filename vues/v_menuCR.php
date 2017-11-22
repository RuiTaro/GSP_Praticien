<body bgcolor="white" text="5599EE">
	<div id="menu">
		<ul>
			<li class="first">
			<span class="opener">Comptes-rendus</span>					
			</li>
			<li class="first">
				<span class="opener">Medicaments</span>					
			</li>
			<li class="first">
				<span class="opener"><a href="index.php?uc=GestionPraticiens&action=all" >Praticiens</a></span>

			</li>
			<li class="first">
				<span class="opener">Visiteurs</span>
			</li>
			<li class="first">
				<span class="opener"><a>
					<?php If (!empty( $_SESSION['connexion'])) // si quelqu'un est connecté
				{ 
				echo '<a class="btn" href="index.php?uc=administrer&action=deconnexion"><img src="images/deco.png" style="width: 170px; margin-left: 80%;"/></a>';
				}else{
				echo '<a class="btn" href="index.php?uc=administrer&action=connexion"><img src="images/co.png" style="width: 170px; margin-left: 80%;"/></a>';
				} ?>
				</a></span>
			</li>
		</ul>
		<br class="clearfix" />
	</div>	
</body>


