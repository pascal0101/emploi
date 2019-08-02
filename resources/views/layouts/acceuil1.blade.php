<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="fr"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Work Scout</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="job/HTML/css/style.css">
<link rel="stylesheet" href="Bootstrap-4.0.0/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="job/HTML/css/colors/green.css" id="colors">
 <link rel="stylesheet" href="DataTables_2/datatables.min.css">
  <link rel="stylesheet" href="DataTables_2/DataTables-1.10.18/css/jquery.dataTables.min.css">

  <script type="text/javascript" src="Bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>

   <script type="text/javascript" src="jquery/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="jquery/js/jquery-1.9.1.js"></script>

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<header>
<div class="container">
	<div class="sixteen columns">

		<!-- Logo -->
		<div id="logo">
			<h1><a href="{{url('/index')}}"><img src="job/HTML/images/logo.png" alt="Work Scout" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a href="{{url('/index')}}">ACCEUIL</a>
					<ul>
						<li><a href="{{url('/index')}}">ACCEUIL</a></li>
						<li><a href="{{url('/emplois')}}">RECHERCHER UN EMPLOI</a></li>
						
					</ul>
				</li>

				
				<li><a href="#" id="current">RECRUTEUR</a>
					<ul>
						<li><a href="{{url('/index')}}">ACCEUIL</a></li>
						<li><a href="{{url('/emp')}}">Publier une offre</a></li>
						<li><a href="{{url('/addjob')}}">Enregistrer Mon entreprise</a></li>
						<li><a href="{{url('/postulants')}}">Traiter les offres</a></li>
						
					</ul>
				</li>

				
			</ul>


			<ul class="responsive float-right">
				<li><a href="{{url('/addjob')}}"><i class="fa fa-user"></i> S'Inscrire</a></li>
				<li><a href="#"><i class="fa fa-lock"></i> Se Connecter</a></li>
			</ul>

		</nav>

		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>

	</div>
</div>
</header>
<body>

		 @if(session()->has('message'))

        <div class="alert alert-primary">
            {{ session()->get('message')}}
        </div>

      
        @endif

         @if(session()->has('message1'))

        <div class="alert alert-primary">
            {{ session()->get('message1')}}
        </div>

      
        @endif

         @if(session()->has('message2'))

        <div class="alert alert-primary">
            {{ session()->get('message2')}}
        </div>

      
        @endif


		@yield('content')

		

<!-- Footer
================================================== -->
<div class="margin-top-60"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">

		<div class="seven columns">
			<h4>A propos</h4>
			<p></p>
			<a href="#" class="button">Get Started</a>
		</div>

		<div class="three columns">
			<h4>Company</h4>
			<ul class="footer-links">
				<li><a href="#">About Us</a></li>
				
			</ul>
		</div>
		
		<div class="three columns">
			<h4>Press</h4>
			<ul class="footer-links">
				<li><a href="#">In the News</a></li>
				
			</ul>
		</div>		

		<div class="three columns">
			<h4>Browse</h4>
			<ul class="footer-links">
				<li><a href="#">Freelancers by Category</a></li>
				

			</ul>
		</div>

	</div>

	<!-- Bottom -->
	<div class="container">
		<div class="footer-bottom">
			<div class="sixteen columns">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
				<div class="copyrights">©  Copyright 2015 by <a href="#">Work Scout</a>. All Rights Reserved.</div>
			</div>
		</div>
	</div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<script src="job/HTML/scripts/jquery-2.1.3.min.js"></script>
<script src="job/HTML/scripts/custom.js"></script>
<script src="job/HTML/scripts/jquery.superfish.js"></script>
<script src="job/HTML/scripts/jquery.themepunch.tools.min.js"></script>
<script src="job/HTML/scripts/jquery.themepunch.revolution.min.js"></script>
<script src="job/HTML/scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="job/HTML/scripts/jquery.flexslider-min.js"></script>
<script src="job/HTML/scripts/chosen.jquery.min.js"></script>
<script src="job/HTML/scripts/jquery.magnific-popup.min.js"></script>
<script src="job/HTML/scripts/waypoints.min.js"></script>
<script src="job/HTML/scripts/jquery.counterup.min.js"></script>
<script src="job/HTML/scripts/jquery.jpanelmenu.js"></script>
<script src="job/HTML/scripts/stacktable.js"></script>
<script type="text/javascript" src="DataTables_2/datatables.min.js"></script>
<script type="text/javascript" src="DataTables_2/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>



<script type="text/javascript">
	$(document).ready(function(){
		$('#datatable').dataTable({
			"language":{
    "sProcessing":     "Traitement en cours...",
    "sSearch":         "Rechercher&nbsp;:",
    "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
    "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
    "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
    "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
    "sInfoPostFix":    "",
    "sLoadingRecords": "Chargement en cours...",
    "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
    "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
    "oPaginate": {
        "sFirst":      "Premier",
        "sPrevious":   "Pr&eacute;c&eacute;dent",
        "sNext":       "Suivant",
        "sLast":       "Dernier"
    },
    "oAria": {
        "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
        "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
    }

		}
   
		});

		});
</script>


</body>
</html>