@extends('layouts.acceuil1')


@section('content')



<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Mon Compte</h2>
			<nav id="breadcrumbs">
				<ul>
					<li></li>
					<li><a href="{{url('/index')}}">Acceuil</a></li>
					<li>Mon Compte</li>
				</ul>
			</nav>
		</div>

	</div>
</div>


<!-- Content
================================================== -->

<body>
<div class="container">

	<div class="my-account">

		<ul class="tabs-nav">
			<li class=""><a href="#tab1">Login</a></li>
			<li><a href="#tab2">Register</a></li>
		</ul>

		<div class="tabs-container">
			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">

				<h3 class="margin-bottom-10 margin-top-10">Login</h3>

				<form method="post" class="login">

					
					<p class="form-row form-row-wide">
						<label for="username">Username or Email Address:</label>
						<input type="text" class="input-text" name="username" id="username" value="" />
					</p>

					<p class="form-row form-row-wide">
						<label for="password">Password:</label>
						<input class="input-text" type="password" name="password" id="password" />
					</p>

					<p class="form-row">
						<input type="submit" class="button" name="login" value="Login" />

						<label for="rememberme" class="rememberme">
						<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label>
					</p>

					<p class="lost_password">
						<a href="#" >Lost Your Password?</a>
					</p>

					
				</form>
			</div>

				<!-- Register -->
				<div class="tab-content" id="tab2" style="display: none;">

					<h3 class="margin-bottom-10 margin-top-10">Register</h3>

					<form method="post" class="register">
						
						<p class="form-row form-row-wide">
							<label for="reg_email">Email Address:</label>
							<input type="email" class="input-text" name="email" id="reg_email" value="" />
						</p>

						
						<p class="form-row form-row-wide">
							<label for="reg_password">Password:</label>
							<input type="password" class="input-text" name="password" id="reg_password" />
						</p>

						<p class="form-row form-row-wide">
							<label for="reg_password2">Repeat Password:</label>
							<input type="password" class="input-text" name="password" id="reg_password2" />
						</p>

									
						<p class="form-row">
							<input type="submit" class="button" name="register" value="Register" />
						</p>
						
					</form>
				</div>
		</div>
	</div>
</div>
</body>


@endsection