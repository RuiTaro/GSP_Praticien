<div id="page">
	<div id="content">
		<div class="box">
			<h2>Liste des praticiens</h2>
			<section>
			<div class="container">

	<ul class="tabs">
		<li class="tab-link current" data-tab="tab-1">Praticien</li>
		<li class="tab-link" data-tab="tab-2">Type praticien</li>
		<li class="tab-link" data-tab="tab-3">Spécialité</li>
		<li class="tab-link" data-tab="tab-4">Info</li>
	</ul>

	<div id="tab-1" class="tab-content current">
	<table class="responstable">
  
  <tr>
   <th>Sélection</th>
    <th data-th="Driver details"><span>Nom</span></th>
    <th>Adresse</th>
    <th>Code postale</th>
    <th>Ville</th>
    <th>Coefficient</th>
    <th>Type</th>
    <th>Scpécialité</th>
    <th>Options</th>
  </tr>
  
  <tr>
    <td><input type="radio"/></td>
    <td>Steve</td>
    <td>Foo</td>
    <td>01/01/1978</td>
    <td>Policyholder</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td><input type="radio"/></td>
    <td>Steffie</td>
    <td>Foo</td>
    <td>01/01/1978</td>
    <td>Spouse</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td><input type="radio"/></td>
    <td>Stan</td>
    <td>Foo</td>
    <td>01/01/1994</td>
    <td>Son</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td><input type="radio"/></td>
    <td>Stella</td>
    <td>Foo</td>
    <td>01/01/1992</td>
    <td>Daughter</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
</table>
	</div>
	<div id="tab-2" class="tab-content">
		<table class="responstable">
  
  <tr>
    <th>Sélection</th>
    <th data-th="Driver details"><span>Nom</span></th>
    <th>Adresse</th>
    <th>Code postale</th>
    <th>Ville</th>
    <th>Coefficient</th>
    <th>Type</th>
    <th>Scpécialité</th>
    <th>Options</th>
  </tr>
  
  <tr>
    <td><input type="radio"/></td>
    <td>Steve</td>
    <td>Foo</td>
    <td>01/01/1978</td>
    <td>Policyholder</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td><input type="radio"/></td>
    <td>Steffie</td>
    <td>Foo</td>
    <td>01/01/1978</td>
    <td>Spouse</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td><input type="radio"/></td>
    <td>Stan</td>
    <td>Foo</td>
    <td>01/01/1994</td>
    <td>Son</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td><input type="radio"/></td>
    <td>Stella</td>
    <td>Foo</td>
    <td>01/01/1992</td>
    <td>Daughter</td>
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
    <th data-th="Driver details"><span>Nom</span></th>
    <th>Adresse</th>
    <th>Code postale</th>
    <th>Ville</th>
    <th>Coefficient</th>
    <th>Type</th>
    <th>Scpécialité</th>
    <th>Options</th>
  </tr>
  
  <tr>
    <td><input type="radio"/></td>
    <td>Steve</td>
    <td>Foo</td>
    <td>01/01/1978</td>
    <td>Policyholder</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td><input type="radio"/></td>
    <td>Steffie</td>
    <td>Foo</td>
    <td>01/01/1978</td>
    <td>Spouse</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td><input type="radio"/></td>
    <td>Stan</td>
    <td>Foo</td>
    <td>01/01/1994</td>
    <td>Son</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td><input type="radio"/></td>
    <td>Stella</td>
    <td>Foo</td>
    <td>01/01/1992</td>
    <td>Daughter</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
</table>
	</div>
	<div id="tab-4" class="tab-content">
		Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	</div>

</div><!-- container -->
			</section>
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

