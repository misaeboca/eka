@extends('layouts.app')
@section('title', '| Diseño de Logotipo')
@section('content')

		<section id="jumbotron" class="servicio diseño">
			<br><br>

			<div id="marca" class="row">
				<div class="col s12 m12">
						<h4>¿NUEVA MARCA?</h4>
						<h6>¿QUIERES DIFERENCIARTE?</h6>
				</div>
				
				<div class="row ">
					<div class="col s12 m12 img-texto img-t">
						<img  class="responsive-img" src="{{ URL::asset('images/servicios/nombre/pote.png') }}">
						<div class="col s12 m12">
							<div>_________</div>
							<span>Tu logo va <br> a ir aquí!</span>
						</div>
					</div>
				</div>
			</div>
			
			<br><br>
			<h4>NO USES PLANTILLAS COMO<br>TODOS LOS DEMAS</h4>
			<a href="{{ url('paso-1') }}" class="btn-custom">¡VAMOS!</a>
		
		</section>

		<section id="parallax" class="servicio diseño">
			<div class="parallax-container">
				<div class="row">
					<div class="col s12 m12 l4">
						<h5>Paso 01_</h5>
						<p>Así sabremos si solo necesitas un logotipo o una estrategia específica.</p>
						<img src="{{ URL::asset('images/servicios/diseno/icono-1.svg') }}" alt="icono">
					</div>
					<div class="col s12 m12 l4">
						<h5>Paso 02_</h5>
						<p>Arma un plan de acuerdo a tus requerimientos y obtén tu presupuesto en minutos.</p>
						<img src="{{ URL::asset('images/servicios/diseno/icono-2.svg') }}" alt="icono">
					</div>
					<div class="col s12 m12 l4">
						<h5>Paso 03_</h5>
						<p>¡Te atenderemos el mismo día! <br><br>de 9.00 - 18.00</p>
						<img src="{{ URL::asset('images/servicios/diseno/icono-3.svg') }}" alt="icono">
					</div>
				</div>
				<a href="{{ url('paso-1') }}" class="btn-custom hoverable">QUIERO INICIAR</a>
		      <div class="parallax"><img src="{{ URL::asset('images/servicios/diseno/parallax.png') }}"></div>
		    </div>
		</section>

		<section id="otras_opciones" class="servicio diseño">
			<h4>¿ALGO MÁS APARTE DE TU LOGO?</h4>
			<p>Puedes elegir el paquete que más se adapte a las necesidades de tu marca.<br>
			Mientras más grande sea tu paquete, más descuento obtendrás</p>
			<div class="row">
				<div class="col s12 m12 l6">
					<div class="opcion mobile z-depth-4">
						<h5>SOLO LOGO</h5>
						<img src="{{ URL::asset('images/index/arma-tu-plan-1.svg') }}" alt="opcion">
						<a href="{{ url('paso-1') }}" class="btn-custom">INICIAR</a>
						<h4>-5% DE DESCUENTO</h4>
					</div>
				</div>
				<div class="col s12 m12 l6">
					<div class="opcion mobile opcion-dos z-depth-4">
						<h5>LOGO + 3 APLICACIONES</h5>
						<img src="{{ URL::asset('images/index/arma-tu-plan-1.svg') }}" alt="opcion">
						<img src="{{ URL::asset('images/index/arma-tu-plan-3.png') }}" alt="opcion">
						<a href="{{ url('paso-1') }}" class="btn-custom">INICIAR</a>
						<h4>-10% DE DESCUENTO</h4>
					</div>
				</div>
				<div class="col s12 m12 l6">
					<div class="opcion sip z-depth-4">
						<h5>SOLO LOGO</h5>
						<img src="{{ URL::asset('images/index/arma-tu-plan-1.svg') }}" alt="opcion">
						<a href="{{ url('paso-1') }}" class="btn-custom">INICIAR</a>
						<h4>-5% DE DESCUENTO</h4>
					</div>
				</div>
				<div class="col s12 m12 l6">
					<div class="opcion sip opcion-dos z-depth-4">
						<h5>LOGO + 3 APLICACIONES</h5>
						<img src="{{ URL::asset('images/index/arma-tu-plan-1.svg') }}" alt="opcion">
						<img src="{{ URL::asset('images/index/arma-tu-plan-3.png') }}" alt="opcion">
						<a href="{{ url('paso-1') }}" class="btn-custom">INICIAR</a>
						<h4>-10% DE DESCUENTO</h4>
					</div>
				</div>
				<div class="col s12 m12 l6">
					<div class="opcion mobile opcion-tres z-depth-4">
						<h5>LOGO + APLICACIONES + WEBSITE</h5>
						<a href="{{ url('paso-1') }}" class="btn-custom">INICIAR</a>
						<h4>-15% DE DESCUENTO</h4>
					</div>
				</div>
			</div>
			<div class="opcion opcion-tres z-depth-4">
				<h5>LOGO + APLICACIONES + WEBSITE</h5>
				<img src="{{ URL::asset('images/index/arma-tu-plan-1.svg') }}" alt="opcion">
				<img src="{{ URL::asset('images/index/arma-tu-plan-2.png') }}" alt="opcion">
				<img src="{{ URL::asset('images/index/arma-tu-plan-5.png') }}" alt="opcion">
				<a href="{{ url('paso-1') }}" class="btn-custom">INICIAR</a>
				<h4>-15% DE DESCUENTO</h4>
			</div>
			<div id="especifico">
				<a href="{{ url('paso-1') }}" class="btn-custom">¡ARMA UN PLAN A TU MEDIDA AHORA MISMO!</a>
				<a href="{{ url('paso-1') }}" class="btn-custom mobile">QUIERO INICIAR</a>
			</div>
		</section>

@endsection
@section('footer-class', 'servicio')