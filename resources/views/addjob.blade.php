@extends('layouts.acceuil1')


@section('content')

<div id="wrapper">


<!-- Header
================================================== -->

<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="single submit-page">
	<div class="container">

		<div class="sixteen columns">
			<h3><i class="fa fa-plus-circle"></i><strong> RECRUTEURS, INSCRIVEZ-VOUS ET PUBLIEZ VOS OFFRES D'EMPLOI !</strong></h3>
		</div>

	</div>
</div>

<!-- Content
================================================== -->
<div class="container" style="background-color: skyblue">
	
	<!-- Submit Page -->
	<div class="sixteen columns">
		<div class="submit-page">

			<!-- Notice -->
			
 <form method="POST">
                {{csrf_field()}}


			<!-- Email -->

			<table>
				
					<td>
				<div class="form">
				<h5>NOM DE L´ENTREPRISE *</h5>
				<input type="text" placeholder="NOM ENTREPRISE" name="NomEnt" required>
				</div></td>
				<td>
					<div class="form">
				<h5>ADRESSE *</h5>
				<input type="text" placeholder="ADRESSE ENTREPRISE" name="Adresse" required/>
				</div>
				</td>

				<td>
					<div class="form">
				<h5>VILLE *</h5>
				<input type="text" placeholder="VILLE ENTREPRISE" name="Ville" required/>
				</div>
				</td>


				</tr>
			</table>

			<div class="form">
				<h5>SITE INTERNET</h5>
				<input type="text" placeholder="SITE INTERNET" name="Site"/>
			</div>

			<div class="form">
				<h5>LOGO <span>(optional)</span></h5>
				<label class="upload-btn">
				    <input type="file" multiple name="Logo" required/>
				    <i class="fa fa-upload"></i> Browse
				</label>
				<span class="fake-input">No file selected</span>
			</div>



			<!-- Choose Category -->
			<div class="form">
				<div class="select">
					<h5>SECTEUR D´ACTIVITÉ</h5>
					<select data-placeholder="Choose Categories" class="chosen-select" name="Secteur" required/>
						<option value="1">Web Developers</option>
						<option value="2">Mobile Developers</option>
						<option value="3">Designers & Creatives</option>
						<option value="4">Writers</option>
						<option value="5">Virtual Assistants</option>
						<option value="6">Customer Service Agents</option>
						<option value="7">Sales & Marketing Experts</option>
						<option value="8">Accountants & Consultants</option>
					</select>
				</div>
			</div>


			<div class="form">
				<h5>DESCRIPTION DE L'ENTREPRISE </h5>
				<textarea  name="Description" required></textarea>
			</div>

		<div class="divider"><h3>VOS COORDONNÉES DE CONTACT</h3></div>

			<div class="form">
				<h5>NOM</h5>
				<input class="search-field" type="text" placeholder="NOM" name="NomProp" required />
			</div>

			<!-- Title -->
			<div class="form">
				<h5>PRENOM</h5>
				<input class="search-field" type="text" placeholder="PRENOM" name="PrenomProp" required />
			</div>

			<div class="form">
				<h5>TELEPHONE</h5>
				<input class="search-field" type="text" placeholder="TELEPHONE" name="Tel" required/>
			</div>


				<table>
				<tr>
					<td>
				<div class="form">
				<h5>EMAIL</h5>
				<input type="text" placeholder="EMAIL" name="email" required>
				</div></td>
				<td>
					<div class="form">
				<h5>MOT DE PASSE</h5>
				<input type="password" placeholder="password" name="MotPasse" required>
				</div>
				</td>

			

				</tr>
			</table>
			<!-- Location -->
			<div class="form">
				<h5>LIEU</h5>
				<input class="search-field" type="text" placeholder="Ex: lome-togo" name="Lieu" required/>
				
			</div>



			<div class="divider margin-top-0"></div>
			
		<button><a type="submit" class="button big margin-top-5">Envoyer <i class="fa fa-arrow-circle-right"></i></a></button>

</form>
		</div>
	</div>

</div>


@endsection