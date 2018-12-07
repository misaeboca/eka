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
				    <li><a href="{{ url('contacto') }}">CONTACTO</a></li>
				</ul>
			</div>
			
		</nav>
		<ul class="sidenav" id="mobile-demo">
			<li><a class="sidenav_a" href="{{ url('/acerca') }}">ACERCA DE EKA</a></li>
		    <li><a href="{{ url('/servicios') }}"">SERVICIOS</a></li>
		    <li><a href="{{url('proyectos')}}">PROYECTOS</a></li>
		    <li><a href="{{ url('contacto') }}">CONTACTO</a></li>
		    <div id="social-media">
		    	<ul>
		    	    <li><a href="https://www.facebook.com/ekastudio13/">FACEBOOK</a></li>
				    <li><a href="https://www.linkedin.com/company/eka-studio/">INSTAGRAM</a></li>
				    <li><a href="https://www.linkedin.com/company/eka-studio/">LINKEDIN</a></li>
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
	
	@if( $url == 'acerca')
	<br>
	<br>
      	<div class="row red" id="la-amuse-foot">
				<div class="col s12 m12 red">
					<p>
						"El branding es lo que dicen de tu marca cuando no estas".<br>
							En EKA sabemos que tu imagen tiene consecuencias, por eso diseñamos<br>
							para  públicos exigentes
					
					</p>
				</div>
		</div>
		<br><br><br><br><br><br>


	@endif
	<br><br>
	<footer class=" black">
      <div class="container">
        <div class="row">
        	<div class="col s12 m12 footer_img">
        		<img style="padding-top: 5vh;padding-bottom: 3vh" width="65px;"  src="{{ URL::asset('images/corona-blanca.svg') }}" alt="corona">
        	</div>

        	<div class="col l2 s12 "></div>
        	<div class="row flow-text col l8 s12 m12 flow-text" style="font-size: 14px">
	        	 <div class="grid-example col s12 m4 redes_soc_r" style="text-align: right;">
			      		<a class="white-text social2" " href="https://www.facebook.com/ekastudio13/">
						FACEBOOK
						</a>
			      </div>
			      <div class="grid-example col s12 m4 " style="text-align: center;">
			      		<a class="white-text social2" href="https://www.instagram.com/eka.studio/?hl=en">
						INSTAGRAM
			      </div>
			       <div class="grid-example col s12 m4 redes_soc_l" style="text-align: left;">
			      	<a class="white-text social2" href="https://www.linkedin.com/company/eka-studio/">
						LINKEDIN
					</a>
			      </div>
			      <br>
			      <div class="col s12 m12 white-text" style="text-align: center; font-size: 19px">
			      	 <span>SÍGUENOS EN NUESTRAS REDES SOCIALES</span>
			      </div>
			      <br>
			      <div class="col s12 m12 white-text" style="text-align: center; padding-top: 3vh;font-size: 12px;  font-weight: bold;">
			      	<span class="white-text"> MEX | VZLA</span>
					<br>
					<span class="red-text" style="font-size: 10px">ENVÍANOS TUS PREGUNTAS A HELLO@EKASTUDIO.NET</span>
			      </div>
		    </div>

		    <div class="row col  s12 m12">
		    	 <br>
				<div class="col s12 m11 divider"></div>
			</div>
		    <div class="row flow-text col s12 m12 white-text" style="text-align: center;">
				<h4 style="font-size: 22px;  font-weight: bold;">SERVICIOS</h4>
				<h6 style="font-size: 14px;">Somos un equipo de profesionales que trabaja para crear y posicionar tu marca</h6>
				<br>
		    </div>

		     <div class="col l3 s12 m12 servicio_footer" style="font-size: 14px;">
            	<h6 class="white-text" style="font-size: 14px;"><b>Copywriting</b></h6>
            	<ul>
	              <li><a class="grey-text text-lighten-3" >Nombre</a></li>
	              <li><a class="grey-text text-lighten-3" >Eslogan</a></li>
	              <li><a class="grey-text text-lighten-3" >Redacción</a></li>
	            </ul>
          	</div>
          	<div class="col l3 s12 m12 servicio_footer"  style="font-size: 14px;">
            	<h6 class="white-text" style="font-size: 14px;"><b>Diseño Gráfico</b></h6>
            	<ul>
	              <li><a class="grey-text text-lighten-3" >Logotipo</a></li>
	              <li><a class="grey-text text-lighten-3" >Aplicaciones de Marca</a></li>
	              <li><a class="grey-text text-lighten-3" >Señalización</a></li>
	              <li><a class="grey-text text-lighten-3" >Manual de Marca</a></li>
	              <li><a class="grey-text text-lighten-3" >Menú restaurante</a></li>
	            </ul>
          	</div>
          	<div class="col l3 s12 m12 servicio_footer" style="font-size: 14px;">
            	<h6 class="white-text" style="font-size: 14px;" ><b>Ilustración</b></h6>
            	<ul>
	              <li><a class="grey-text text-lighten-3" >Diseño de íconos</a></li>
	              <li><a class="grey-text text-lighten-3" >Diseño de infografías</a></li>
	            </ul>
          	</div>
          	<div class="col l3 s12 m12 servicio_footer" style="font-size: 14px;">
            	<h6 class="white-text" style="font-size: 14px;"><b>Diseño Web</b></h6>
            	<ul>
	              <li><a class="grey-text text-lighten-3" >Diseño de interface</a></li>
	              <li><a class="grey-text text-lighten-3" >Experiencia de usuario</a></li>
	              <li><a class="grey-text text-lighten-3" >Programación</a></li>
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