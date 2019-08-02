@extends('layouts.acceuil1')


@section('content')

<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="single submit-page">
	<div class="container">

		<div class="sixteen columns">
			<h2><i class="fa fa-plus-circle"></i>ajouter un travail</h2>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container" style="background-color: skyblue">
	
	<!-- Submit Page -->
	<div class="sixteen columns">
		<div class="submit-page">

			<form method="POST">
                {{csrf_field()}}


			<!-- Email -->
			<div class="form">
				<h5>Email</h5>
				<input class="search-field" type="text" placeholder="mail@example.com" name="Email" required/>
			</div>

			<!-- Title -->
			<div class="form">
				<h5>Titre</h5>
				<input class="search-field" type="text" placeholder="Recherche de Maçon" name="Titre" required/>
			</div>

			<!-- Location -->
			<div class="form">
				<h5>Lieu <span></span></h5>
				<input class="search-field" type="text" placeholder="EX:lome" name="Lieu" required/>
				
			</div>

			<!-- Job Type -->
			<div class="form">
				<h5>Type</h5>
				<select data-placeholder="Full-Time" class="chosen-select-no-single" name="Type" required/>
					<option value="1">A plein temps</option>
					<option value="2">A Temps Partiel</option>
					<option value="2">Stage</option>
					<option value="2">Free-lance</option>
				</select>
			</div>


			<!-- Choose Category -->
			<div class="form">
				<div class="select">
					<h5>Categorie</h5>
					<select data-placeholder="Choose Categories" class="chosen-select" name="Categorie" required/>
						<option value="Maçonnerie">Maçonnerie</option>
						<option value="Menuserie">Menuserie</option>
						<option value="Carrolleur">Carrolleur</option>
						<option value="Ferailleur">Ferailleur</option>
						<option value="Peintre">Peintre</option>
					</select>
				</div>
			</div>

		
			<div class="form">
				<h5>Description</h5>
				<textarea  cols="40" rows="3"  name="Description" required/></textarea>
			</div>

			<div class="form">
				<h5>Date Fin<span></span></h5>
				<input data-role="date" type="text" placeholder="yyyy-mm-dd" name="DateFin" required/>
				
			</div>

			
			<!-- Company Details -->
			<div class="divider"><h3>Entreprise</h3></div>

			<!-- Company Name -->
			<div class="form">
				<h5>Nom de votre Entreprise</h5>
				<input type="text"  name="Entreprise" placeholder="TechLab" required/>
			</div>

			<div class="form">
				<h5>Site Web de votre Entreprise</h5>
				<input type="text"  name="Site" placeholder="www.techlab-togo.com" required/>
			</div>

			


			<div class="divider margin-top-0"></div>


			<button><a type="submit" class="button big margin-top-5">Publier<i class="fa fa-arrow-circle-right"></i></a></button>
			

		</div>
	</div>
</form>
</div>
</body>
@endsection