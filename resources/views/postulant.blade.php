@extends('layouts.acceuil1')


@section('content')

<body>

<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Manage Jobs</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="{{url('/index')}}">Home</a></li>
					<li>Job Dashboard</li>
				</ul>
			</nav>
		</div>

	</div>
</div>

<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			

				<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
					<div class="small-dialog-headline">
						<h2>Postuler pour ce Travail</h2>
					</div>

					<div class="small-dialog-content">
						<form method="POST" >
							 {{csrf_field()}}
							<input type="text" placeholder="Nom Complet" name="Nom" required/>
							<input type="text" placeholder="Email " name="Email" required/>
						<input type="text" placeholder="Offre au quel vous voulez postuler" name="Offre" required/>
							<textarea placeholder="Votre Lettre de motivation" name="Lettre" required></textarea>

							<!-- Upload CV -->
							<div class="upload-info"><strong>Upload Ton CV </strong> <span>Max. file size: 5MB</span></div>
							<div class="clearfix"></div>

							<label class="upload-btn">
							    <input type="file"  name="Cv" />
							    <i class="fa fa-upload"></i> Browse
							</label>
							<span class="fake-input">No file selected</span>

							<div class="divider"></div>

							<button class="send" type="submit">Envoyer</button>
						</form>
					</div>
					
				</div>

			</div>

		</div>

	</div>
	<!-- Widgets / End -->


<!-- Content
================================================== -->
<div class="container">
	
	<!-- Table -->
	<div class="sixteen columns">


		<table class="manage-table responsive-table">

			<tr>
				<th><i class="fa fa-file-text"></i> Nom</th>
				<th><i class="fa fa-check-square-o"></i> etat</th>
				<th><i class="fa fa-institution"></i> Offre</th>
				<th><i class="fa fa-calendar"></i> Date</th>
				<th><i class="fa fa-calendar"></i> Numero</th>

				<th><i class="fa fa-user"></i> Action</th>
				<th></th>
			</tr>
					
			<!-- Item #1 -->
			
					
			<!-- Item #2 -->

                @foreach($postulants as $postulant)
			<tr>
				<td class="title"><a href="#">{{($postulant->Nom)}}</a></td>
				<td class="centered"><i class="fa fa-check"></i></td>
				<td>{{($postulant->Offre)}}</td>
				<td>{{($postulant->created_at)}}</td>
			
					<td>{{($postulant->Email)}}</td>
				
				<td class="action">
					<a href="#"><i class="fa fa-pencil"></i> Edit</a>
					<a href="#"><i class="fa  fa-check "></i> Mark Filled</a>
					<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
				</td>
			</tr>	

			   @endforeach

		</table>

		<br>
		

	</div>

</div>



</body>
@endsection