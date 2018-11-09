@extends('layouts.app')
@section('title', '')
@section('content')

	<section id="servicios1">
			<div class="row">
				<div class="col s12 m12 " id="servicios-title">
					<h4>¿QUÉ SERVICIOS OFRECE EKASTUDIO?</h4>
					
				</div>
				<div class="row">
					<div class="col s1 m1"></div>
					<div class="col s3 m3 ">
						<ul class="servicio-links1">
						    <li class="link-title1 p-t"><a href="#">ILUSTRACIÓN</a></li><br>
						    <li><a href="#">Diseño de íconos</a></li>
						    <li><a href="#">Diseño de infografías</a></li>
						</ul>
					</div>
					<div class="col s4 m4 ">
						<ul class="servicio-links1">
						    <li class="link-title1 p-t"><a href="#">DISEÑO GRÁFICO</a></li><br>
						    <li><a href="{{ url('servicio/diseno/logotipo') }}">Logotipo</a></li>
						    <li><a href="#">Aplicaciones de Marca</a></li>
						    <li><a href="#">Señalización</a></li>
						    <li><a href="#">Posters</a></li>
						    <li><a href="#">Menú restaurante</a></li>
						</ul>
					</div>
					<div class="col s3 m3 ">
						<ul class="servicio-links1">
						    <li class="link-title1 p-t"><a href="#">COPYWRITING</a></li><br>
						    <li><a href="#">Nombre</a></li>
						    <li><a href="#">Eslogan</a></li>
						    <li><a href="#">Redacción</a></li>
						</ul>
					</div>
					<div class="col s1 m1"></div>
				</div>
			</div>
			<br><br><br><br><br><br><br><br>
			<a href="http://ekastudio.net/new_project/public_html/paso-1" class="btn-custom">¡ARMA UN PLAN A TU MEDIDA AHORA MISMO!</a>
	</section>

	<section id="mensaje">
			<div class="row">
				<div class="row">
					<div class="col s12 offset-s2">
						<h4 class="mensaje-title">
						 O ENVÍANOS TU MENSAJE<br>
						 -
						</h4>
						<br>
						<h5>
						 Dejanos tus datos e inmediatamente te contactaremos<br>
						</h5>
						<br><br>
						<div class="col s4 m4 divider "></div>
					</div>
					<br><br><br>
					<div class="row col s12 offset-s2">
						<div class="contacto row">
						    <form class="col s8">
						      <div class="row">
						        <div class="input-field col s6">
						        	<h6 class="form-label1">NOMBRE</h6>
						        	<br>
						          	<input  class="form-text" id="nombre" type="text" class="validate">
						        </div>
						        <div class="input-field col s6">
						        	<h6 class="form-label1">APELLIDO</h6>
						        	<br>
						          	<input class="form-text" id="apellido" type="text" class="validate">
						        </div>
						      </div>

						      <div class="row">
						        <div class="input-field col s3 ">
						        	<h6 class="form-label1">EDAD</h6>
						        	<br>
						          	<input class="form-text" id="edad" type="text" class="validate">
						        </div>
						        <div class="input-field col s3">
						        	<h6 class="form-label1">CIUDAD</h6>
						        	<br>
						          	<input class="form-text" id="ciudad" type="text" class="validate">
						        </div>
						         <div class="input-field col s6 ">
						          	<h6 class="form-label1">CORREO</h6>
						          	<br>
						          	<input class="form-text" id="correo" type="text" class="validate">
						        </div>
						      </div>
						      <div class="row">
						        <div class="input-field col s12 ">
						        	<h6 class="form-label1">TU MENSAJE</h6>
						        	<br>
						          	<textarea  class="form-text materialize-textarea textarea" id="mensaje" type="text-area" class="validate"></textarea>
						        </div>
						      </div>
						      	<br><br>
						        <div class="row center">
						          	<a href="" class="btn-custom">ENVIAR</a>
						        </div>
						    </form>
						  </div>
						
					</div>
					
					<div class="col s1 m1"></div>
				</div>
			</div>
			<br><br>
		
	</section>



@endsection
@section('footer-class', 'index')