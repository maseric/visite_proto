function template(i){return "<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------- -->" +
"<!-- card " + i + "-->" +
"<div class='card mb-3' id='card-" + i + "'>" +
"	<div class='card-header'>" +
"		<nav class='navbar navbar-light bg-light'>" +
"			<h3 id='titre-" + i + "'>Informations visiteur</h3>" +
"			<button type='button' id='button-" + i + "' class='btn btn-light' data-toggle='collapse' data-target='#collapse-" + i + "' style='color: #007bff;' aria-label='Left Align'>" +
"				<span class='fa fa-chevron-circle-up fa-2x' aria-hidden='true'></span>" +
"			</button>" +
"		</nav>				" +
"	</div>" +
"	<div class='collapse show' id='collapse-" + i + "'>" +
"	<div class='card-body'>	" +
"		" +
"		<h4>Identité</h4>" +
"		<div class='form-row'>" +
"			<div class='form-group col-md-6'>" +
"				<label for='NomVisiteur-" + i + "'>Nom</label>" +
"				<input type='text' class='form-control' id='NomVisiteur-" + i + "' placeholder='Nom'>" +
"			</div>" +
"			<div class='form-group col-md-6'>" +
"				<label for='PrenomVisiteur-" + i + "'>Prénom</label>" +
"				<input type='text' class='form-control' id='PrenomVisiteur-" + i + "' placeholder='Prénom'>" +
"			</div>" +
"		</div>" +
"		<div class='form-row'>" +
"			<div class='form-group col-md-3'>" +
"				<label for='naissVisiteur-" + i + "'>Date de naissance</label>" +
"				<div class='input-group date' id='datetimepicker-" + i + "' data-target-input='nearest'>" +
"					<input type='text' class='form-control datetimepicker-input' data-toggle='datetimepicker' data-target='#datetimepicker-" + i + "' id='naissVisiteur-" + i + "' required/>" +
"					<div class='input-group-append' data-target='#datetimepicker-" + i + "' data-toggle='datetimepicker'>" +
"						<div class='input-group-text'><i class='fa fa-calendar'></i></div>" +
"					</div>" +
"					<div class='invalid-tooltip'>" +
"					Saisie obligatoire" +
"					</div>" +
"				</div>" +
"			</div>" +
"			<div class='form-group col-md-3'>" +
"					<label for='FinDemande'>Nationalité</label>" +
"					<select id='LieuDemande' class='form-control'>" +
"						<option selected>Choisir...</option>" +
"						<option value=1>Française</option>" +
"						<option value=2>Etrangère</option>" +
"					</select>" +
"			</div>" +
"		</div>" +
"		<h4>Entreprise/Organisme</h4>" +
"		<div class='form-row'>" +
"			<div class='form-group col-md-12'>" +
"				<label for='RaisonSociale'>Raison sociale</label>" +
"				<input type='text' class='form-control' id='RaisonSociale' placeholder='Raison Sociale'>" +
"			</div>" +
"		</div>" +
"		<div class='form-row'>" +
"			<div class='form-group col-md-6'>" +
"				<label for='VilleSociete'>Ville</label>" +
"				<input type='text' class='form-control' id='VilleSociete' placeholder='Ville'>" +
"			</div>" +
"			<div class='form-group col-md-2'>" +
"				<label for='CPSociete'>Code postal</label>" +
"				<input type='text' class='form-control' id='CPSociete' placeholder='Code postal'>" +
"			</div>" +
"			<div class='form-group col-md-4'>" +
"				<label for='PaysSociete'>Pays</label>" +
"				<select id='LieuDemande' class='form-control'>" +
"					<option value='' selected>Choisir...</option>" +
"					<option value=1>France</option>" +
"					<option value=2>Italie</option>" +
"					<option value=2>...</option>" +
"				</select>" +
"			</div>" +
"		</div>" +
"		<div class='form-row'>" +
"			<div class='form-group col-md-6' >" +
"				<label for='AdresseSociete'>Adresse</label>" +
"				<textarea class='form-control' aria-label='Adresse entreprise' rows=3></textarea>" +
"			</div>" +
"		</div>" +
"		<div class='form-row'>" +
"			<div class='custom-file'>" +
"				<input type='file' class='custom-file-input' id='validatedCustomFile' lang='fr'>" +
"				<label class='custom-file-label' for='validatedCustomFile'>Pièce jointe...</label>" +
"		  </div>" +
"		</div>" +
"	</div> <!-- card body -->" +
"	</div><!-- collapse -->" +
"</div> <!-- card-" + i + " -->" +
"<script>" +
"/*--------- fonctions pour form visiteur " + i + " ---------------------------------------------------------------------------------*/" +
"$(function () {" +
"	/* fonctions pour input calendriers*/" +
"	$('#datetimepicker-" + i + "').datetimepicker({locale: 'fr', format: 'L', viewMode: 'years'});" +
"	" +
"	/* affichage nom prénom visteur dans titre du bloc card*/" +
"	$('#NomVisiteur-" + i + "').on('change', function(e){" +
"		$('#titre-" + i + "').html('Informations visiteur n°" + i + " : '+$('#NomVisiteur-" + i + "').val()+' '+$('#PrenomVisiteur-" + i + "').val());" +
"	});" +
"	$('#PrenomVisiteur-" + i + "').on('change', function(e){" +
"		$('#titre-" + i + "').html('Informations visiteur n°" + i + " : '+$('#NomVisiteur-" + i + "').val()+' '+$('#PrenomVisiteur-" + i + "').val());" +
"	});" +
"	" +
"	/* bouton collapse/expand*/" +
"	$('#button-" + i + "').on('click', function(e){" +
"		console.log('click-" + i + "');" +
"		$('#button-" + i + "').children().toggleClass('fa-chevron-circle-up');" +
"		$('#button-" + i + "').children().toggleClass('fa-chevron-circle-down');" +
"	});" +
"" +
"});" +
"//--------------------------------------------------------------------------------------------------------------------------" +
"</script>	" +
"<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------- -->";}