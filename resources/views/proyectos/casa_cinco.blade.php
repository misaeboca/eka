@extends('layouts.app')
@section('title', '')
@section('content')

	<section id="casa_cinco">
		<div class="row">
			<div class="col s2 m2"></div>
			<div class="col s9 m9 ">
				<h3>CASA CINCO</h3>
				<h5>DESARROLLO DE IMAGEN</h5>
				<h5>-</h5>
			<div class="col s1"></div>
		</div>
		<div class="row">
			<div class="col s2 m2 "></div>
			<div class="col s9 m9">
				<p>
					Ubicado en la calle Minas del Cortés N° 5 Hotel Boutique Casa<br>
					Cinco como su nombre lo dice, se remonta a una casa para fines de <br>
					semana que se convirtio en lo que es ahora. La idea fue conservar la <br>
					esencia en un nombre significativo, relacionado con la ubicación, y <br>
					y lograr con su imagen transmitir ese aire íntimo con una experiencia<br>
					excepcionalmente moderna y elegante.
				</p>
				<div class="divider col s5"></div>
			</div>
			<div class="col s1"></div>
		</div>
	</section>
	
	<section id="proyectos">
			<div class="row">
				<div class="row">
					<div class="col s4 m4"></div>
					<div class="col s4 m4">
						<img src="{{ URL::asset('images/proyectos/casa_cinco/casa_cinco1.svg') }}" alt="icono">
					</div>
					<div class="col s4 m4"></div>
				</div>
				<br><br><br><br><br><br>
				<div class="row">
					<div class="col s4 m4"></div>
					<div class="col s4 m4">
						<img src="{{ URL::asset('images/proyectos/casa_cinco/casa_cinco2.svg') }}" alt="icono">
					</div>
					<div class="col s4 m4"></div>
				</div>
			</div>
			<br><br><br><br><br><br>

			<div class="row">
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/casa_cinco/logo.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/casa_cinco/senal.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/casa_cinco/crema.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/casa_cinco/tarjeta.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
			</div>
			<br><br><br><br><br><br><br><br>
			<a href="{{ url('/proyectos') }}" class="btn-custom">IR A OTROS PROYECTOS</a>

	</section>
	<br><br><br>

@endsection
@section('footer-class', 'index')
	