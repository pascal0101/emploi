@extends('layouts.acceuil1')


@section('content')

<div id="wrapper">


<!-- Header
================================================== -->

<div class="clearfix"></div>



<!-- Slider
================================================== -->
<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<ul>

			<!-- Slide 1 -->
			<li data-fstransition="fade" data-transition="fade" data-slotamount="10" data-masterspeed="300">
				<img src="job/reparation.png" alt="">

				<div class="caption title sfb" data-x="center" data-y="165" data-speed="400" data-start="800"  data-easing="easeOutExpo">
					<h2>Louez de formidables employé horaires</h2>
				</div>

				<div class="caption text align-center sfb" data-x="center" data-y="240" data-speed="400" data-start="1200" data-easing="easeOutExpo">
					<p>Work Scout est le site de travail le
					plus fiable, reliant les plus brillants esprits au monde<br> avec une base de données de cv riches</p>
				
				</div>

				<div class="caption sfb" data-x="center" data-y="370" data-speed="400" data-start="1600" data-easing="easeOutExpo">				
				<a href="{{url('/emplois')}}" class="slider-button">Rechercher Emploi</a>
				<a href="{{url('/emp')}}" class="slider-button">Publier une offre</a>
				</div>
			</li>

		</ul>
	</div>
</div>



<!-- Content
================================================== -->








@endsection