@extends('layouts.app')
@section('title', '')
@section('content')

	<section id="casa_cinco">
		<div class="row">
			<div class="col s2 m2"></div>
			<div class="col s9 m9 ">
				<h3>GRUPO LASER</h3>
				<h5>DESARROLLO Y REDISEÑO DE IMAGEN</h5>
				<h5>-</h5>
			<div class="col s1"></div>
		</div>
		<div class="row">
			<div class="col s2 m2 "></div>
			<div class="col s9 m9">
				<p>
					Siendo una empresa con muchos años de trayectoria en el mercado<br>
					nacional e internacional, es imprescindible la necesidad de renovación <br>
					de imagen y actualización en la web, ya que constantemente se <br>
					encuentra incorporando nuevos procesos, productos y servicios<br>
					para satisfacer las necesidades de sus clientes. Con el rediseño de<br>
					imagen se logró una mirada fresca y actual, ofreciendo las mejores<br>
					opciones de hosting, seguridad, mailing y catálogos digitales.
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
						<img src="{{ URL::asset('images/proyectos/grupo_laser/logo.svg') }}" alt="icono">
					</div>
					<div class="col s4 m4"></div>
				</div>
			</div>

			<div class="row">
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s9 m9">
						<img src="{{ URL::asset('images/proyectos/grupo_laser/botella.png') }}" alt="icono">
					</div>
					<div class="col s1"></div>
				</div>
				<br><br>
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/grupo_laser/carta.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br>
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/grupo_laser/mesas.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br>
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/grupo_laser/lapto.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
			</div>
			<br><br><br><br>
			<a href="{{ url('/proyectos') }}" class="btn-custom">IR A OTROS PROYECTOS</a>

	</section>
	<br><br>

@endsection
@section('footer-class', 'index')
	