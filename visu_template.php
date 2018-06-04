<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Proto avis de visite - Réunion</title>

		<!-- DEBUT DEPENDANCES -->
			<!-- début bloc CSS -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
			<!-- fin bloc CSS -->
			<!-- début bloc JS -->
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>		
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment-with-locales.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>		
			<!-- fin bloc JS -->
		<!-- FIN DEPENDANCES -->

		
  </head>

  <body >
	<div class='container'>
		<h1>Avis de visite - Réunion - prototype</h1>
		<div class="alert alert-warning" role="alert">
		En cours d'impléntation
		</div>
		<div class='row'>
			<div class='col-md-12 mb-3'>
			Veuillez renseigner le formulaire pour émettre une demande d'avis de visite pour une réunion
			</div>
		</div>
		<div class='row'>
			<div class='col-sm-12 mb-4'>
				<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 66.6%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">étape 2/3</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-between">
			<div class="col-sm-4 mb-3">
				<a class="btn btn-primary" href="/visite_proto" role="button">Précédent</a>
			</div>
			<div class="col-sm-4 mb-3">
				<a class="fa fa-user-plus fa-2x"  data-toggle="tooltip" data-placement="bottom"  title="Ajouter visiteur"></a>
			</div>
			<div class="col-sm-4 mb-3">
				<a class="btn btn-primary" href="/visite_proto" role="button">Suivant</a>
			</div>
		</div>
	</div>
	<div class='container'>			
		<form id="formDebut" class="needs-validation" novalidate>
		<p><?php include "template.html"; ?></p>
					<div id="visiteurs"></div>
			<button type="submit" class="btn btn-primary mb-3">Poursuivre la demande</button>
		</form>
	</div>
		 <script>
	// fonction de blocage de la soumission des forms si les champs ne sont pas remplis correctement
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
	  'use strict';
	  window.addEventListener('load', function() {
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
		  form.addEventListener('submit', function(event) {
			if (form.checkValidity() === false) {
			  event.preventDefault();
			  event.stopPropagation();
			}
			form.classList.add('was-validated');
		  }, false);
		});
	  }, false);
	})();
	
	// fonction activation des tooltips partout
	$(function () {
		$('[data-toggle="tooltip"]').tooltip();
	});
	
	//--------- fonctions pour form visiteur v1 ---------------------------------------------------------------------------------
	$(function () {
		// fonctions pour input calendriers	
		$('#datetimepicker-v1').datetimepicker({locale: 'fr', format: 'L', viewMode: 'years'});
		
		// affichage nom prénom visteur dans titre du bloc card
		$('#NomVisiteur-v1').on('change', function(e){
			$('#titre-v1').html("Informations visiteur "+$('#NomVisiteur-v1').val()+" "+$('#PrenomVisiteur-v1').val());
		});
		$('#PrenomVisiteur-v1').on('change', function(e){
			$('#titre-v1').html("Informations visiteur "+$('#NomVisiteur-v1').val()+" "+$('#PrenomVisiteur-v1').val());
		});
		
		// bouton collapse/expand
		$('#button-v1').on('click', function(e){
			console.log('click-v1');
			$('#button-v1').children().toggleClass('fa-chevron-circle-up');
			$('#button-v1').children().toggleClass('fa-chevron-circle-down');
		});

	});
	//--------------------------------------------------------------------------------------------------------------------------


	
	
	
	
	
	
	
	
	</script>
  </body>
</html>