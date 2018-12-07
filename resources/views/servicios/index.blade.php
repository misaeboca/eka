@extends('layouts.app')
@section('title', '')
@section('content')

	<section id="servicios1">

		<div class="col s12 m12  text-flex" style="font-size:24px; padding-top: 15px; font-weight: 700">
		 		<b>
		 			¿QUÉ SERVICIOS OFRECE EKASTUDIO?
		 		</b>
		</div>

		<div class="row">

				<div class="row">
					<div class="col s1 m1"></div>
					<div class="col s12 m3 black-text">
						<ul class="black-text">
						    <li class=" p-t"><a href="#"><b class="black-text">ILUSTRACIÓN</b></a></li><br>
						    <li><a ><span class="black-text">Diseño de íconos</span></a></li>
						    <li><a ><span class="black-text">Diseño de infografías</span></a></li>
						</ul>
					</div>
					<div class="col s12 m4 black-text">
						<ul class="black-text">
						    <li class=" p-t "><a href="#"><b class="black-text">DISEÑO GRÁFICO</b></a></li><br>
						    <li><a href="{{ url('/logotipo') }}">
						    	<span class="black-text">Logotipo</span>
						    	</a>
							</li>
						    <li><a href="{{ url('/aplicaciones_marca') }}">
						    	<span class="black-text"> Aplicaciones de Marca</span></a>
						    </li>
						    <li><a ><span class="black-text">Señalización</a></li>
						    <li><a ><span class="black-text">Posters</span></a></li>
						    <li><a href="{{ url('/menu') }}"><span class="black-text">Menú restaurante</span></a></li>
						</ul>
					</div>
					<div class="col s12 m3 black-text">
						<ul class="black-text">
						    <li class=" p-t"><a href="#"><b class="black-text">COPYWRITING</b></span></a></li><br>
						    <li><a href="{{ url('/nombre') }}"><span class="black-text">Nombre</span></a></li>
						    <li><a><span class="black-text">Eslogan</span></a></li>
						    <li><a><span class="black-text">Redacción</span></a></li>
						</ul>
					</div>
					<div class="col s1 m1"></div>
				</div>
			</div>
			<br><br>
			<div class="col s12 m12 ">
				<a href="{{ url('paso-1') }}" class="btn-custom">¡ARMA UN PLAN A TU MEDIDA AHORA MISMO!</a>
			</div>
	</section>

	<section id="mensaje">
			<div class="row">
				<div class="row">
					<div class="col s12 offset-s2">
						<p><b>
						 O ENVÍANOS TU MENSAJE<br>
						 -
						</b>
						<p>
						<br>
						<h5>
						 Déjanos tus datos e inmediatamente te contactaremos<br>
						</h5>
						<br><br>
						<div class="col s4 m4 divider "></div>
					</div>
					<div class="col s1 m1"></div>
				</div>
			</div>
	</section>
<div class="container" style="padding-top: 15px">
		<br><br>
		<div class="row">
			<form class="" action="{{ url('send_mail_contact') }}" method="post">

		    <div class="col s12 s6 m6 ">
		    	<b>NOMBRE</b>
		    	<input id="nombre" type="text" name='nombre' type="text" class="validate form-text">
		    </div>
		     <div class="col s12 s6 m6 ">
		    	<b>APELLIDO</b>
		    	<input id="apellido" type="text" name='apellido' type="text" class="validate form-text">
		    </div>

		    <div class="col s12 s3 m3 ">
		    	<br>
		    	<b>EDAD</b>
		    	<input id="edad" type="text" name='edad' type="text" class="validate form-text">
		    </div>
		    <div class="col s12 s3 m3 ">
		    	<br>
		    	<b>CIUDAD</b>
		    	<input id="ciudad" type="text" name='ciudad' type="text" class="validate form-text">
		    </div>
		    <div class="col s12 s6 m6 ">
		    	<br>
		    	<b>CORREO</b>
		   		<input id="email" type="text" name='email' type="text" class="validate form-text">
		  	</div>

		  	<div class="col s12 s12 m12 ">
		  		<br>
		    	<b>TU MENSAJE</b>
				<textarea  class="form-text materialize-textarea textarea validate" id="mensaje" type="text-area"  name="mensaje" required></textarea>
		  	</div>
		  	<div class="col s12 s12 m12 center">
		    	<br>
		   		<button class="btn red">ENVIAR</button>
		  	</div>

			</form>

			<div class="col s1 m1"></div>
		</div>
	</div>


@endsection
@section('footer-class', 'index')