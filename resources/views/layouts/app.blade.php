<?php
$url = request()->path();
/*$porciones = explode("/", $url );
$ruta = $porciones[0];*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="description" content=" ">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="images/logo-negro.ico" type="image/x-icon">

    <title>EKA Studios @yield('title')</title>

    <!-- Open Sans Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
 	<!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom css  -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <!-- Medias css  -->
    <link href="{{ URL::asset('css/medias.css') }}" rel="stylesheet">

    <!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
	<header>

		<nav class="nav-extended align-center">
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			<a class='' href="{{ url('/') }}">
				<img class="logo" src="{{ URL::asset('images/index/logo_rojo.svg') }}" id="nav-logo" alt="Logo">
			</a>
			<h3 class="title">BIENVENIDOS A EKA STUDIO</h3>
			<div id="nav-info">
				<h2>BIENVENIDOS A  EKA STUDIO</h2>
				<h3> MÉX | VZLA</h3>
				<p ><span class="color-contact">ENVÍANOS TUS PREGUNTAS A HELLO@EKASTUDIO.NET</span></p>
				<p id="nav-date">13//26</p>
			</div>

			<div id="nav-links">
				<ul>
				    <li><a href="{{ url('/acerca') }}">¿QUIEN ES EKA?</a></li>
				    <li><a href="{{ url('/servicios') }}">SERVICIOS</a></li>
				    <li><a href="{{url('proyectos')}}">PROYECTOS</a></li>
				    <li><a href="{{ url('contact') }}">CONTACTO</a></li>
				</ul>
			</div>
			
		</nav>
		<ul class="sidenav" id="mobile-demo">
			<li><a class="sidenav_a" href="{{ url('/about') }}">ACERCA DE EKA</a></li>
		    <li><a href="{{ url('about/#our-services') }}">SERVICIOS</a></li>
		    <li><a href="#">PROYECTOS</a></li>
		    <li><a href="{{ url('contact') }}">CONTACTO</a></li>
		    <div id="social-media">
		    	<ul>
		    	    <li><a href="#">FACEBOOK</a></li>
				    <li><a href="#">INSTAGRAM</a></li>
				    <li><a href="#">LINKEDIN</a></li>
		    	</ul>
		    </div>
		</ul>
	</header>


	@if( $url == '/')
	<br>
	<br>
	    <div id="bagnner" >
	      		<section id="jumbotron">
					<img src="images/index/header.png" alt="header">
					<img src="images/index/header_mobile.png" alt="header" id="jumbotron-mobile">
				</section>

	    </div>
	@endif

    <div id="main" class="col s12 m12">
		@yield('content')
	</div>
	
	<footer class=" black">
			<div id="social-media">
				<img src="{{ URL::asset('images/corona-blanca.svg') }}" alt="corona">
				<div class="row">
					<div class="col m4"><a href="https://www.facebook.com/ekastudio13/">
						FACEBOOK
						</a>
					</div>
					<div class="col m4"><a href="https://www.instagram.com/eka.studio/?hl=en">
						INSTAGRAM
					</a></div>
					<div class="col m4"><a href="https://www.linkedin.com/company/eka-studio/">
						LINKEDIN
					</a></div>
				</div>
				<h6>SÍGUENOS EN NUESTRAS REDES SOCIALES</h6>
				<br>
				<span class="white-text"> MEX | VZLA</span>
				<p ><span class="color-contact">ENVÍANOS TUS PREGUNTAS A HELLO@EKASTUDIO.NET</span></p>
			</div>

			<section>
				<div class="row col-12">
					<div class="col s8 offset-s2 divider"></div>
				</div>
			</section>
			<br><br>
			<section id="servicios">
				<div class="row col-12">
						<h4 class="f-b">SERVICIOS</h4>
						<h6>Somos un equipo de profesionales que trabaja para crear y posicionar tu marca</h6>
				</div>
			</section>
	
			<div id="links">
				<div class="row">
					<div class="col m3 ">
						<ul class="link-list">
						    <li class="link-title"><a href="#">Copywriting</a></li>
						    <li><a href="#">Nombre</a></li>
						    <li><a href="#">Eslogan</a></li>
						    <li><a href="#">Redacción</a></li>
						</ul>
					</div>
					<div class="col m3 ">
						<ul class="link-list">
						    <li class="link-title"><a href="#">Diseño Gráfico</a></li>
						    <li><a href="{{ url('servicio/diseno/logotipo') }}">Logotipo</a></li>
						    <li><a href="#">Aplicaciones de Marca</a></li>
						    <li><a href="#">Señalización</a></li>
						    <li><a href="#">Manual de Marca</a></li>
						</ul>
					</div>
					<div class="col m3">
						<ul class="link-list">
						    <li class="link-title"><a href="#">Ilustración</a></li>
						    <li><a href="#">Diseño de íconos</a></li>
						    <li><a href="#">Diseño de infografías</a></li>
						</ul>
					</div>
					<div class="col m2">
						<ul class="link-list">
						    <li class="link-title"><a href="#">Diseño Web</a></li>
						    <li><a href="#">Diseño de interface</a></li>
						    <li><a href="#">Experiencia de usuario</a></li>
						    <li><a href="#">Programación</a></li>
						</ul>
					</div>
				</div>
			</div>
	</footer>

	<!-- Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    	$(document).ready(function(){
		    $('.parallax').parallax();
		    $('.modal').modal();
		    $('.sidenav').sidenav();
	  	});
    </script>
</body>
</html>