@extends('layouts.app')
@section('title', '')
@section('content')

	<section id="casa_cinco">
		<div class="row">
			<div class="col s2 m2"></div>
			<div class="col s9 m9 ">
				<h3><TABLE>MAGUEYRO</TABLE></h3>
				<h5>DESARROLLO DE IMAGEN</h5>
				<h5>-</h5>
			<div class="col s1"></div>
		</div>
		<div class="row">
			<div class="col s2 m2 "></div>
			<div class="col s9 m9">
				<p>
					Su nombre, es una variación de la forma en la que se llama al gusano <br>
					"magueyero" que vive dentro de las hojas del maguey. Con una<br>
					imagen actual y que dificilmente pasará desapercibida. Magueyro<br>
					no solo busca ser mostrada como una distribuidora en linea sino<br>
					tambíen ser un referente en aaacesorios y productos relacionados<br>
					con el consumo responsable del mezcal.<br>
				</p>
				<br>
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
						<img src="{{ URL::asset('images/proyectos/magueyro/logo.svg') }}" alt="icono">
					</div>
					<div class="col s4 m4"></div>
				</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br>

			<div class="row">
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/magueyro/papel.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/magueyro/cerveza.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/magueyro/gorra.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/magueyro/magueyro.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br><br><br><br><br><br><br>
				<div class="row">
					<div class="row">
						<div class="col s5 m5"></div>
						<div class="col s2 m2">
							<img src="{{ URL::asset('images/proyectos/magueyro/mata.svg') }}" alt="icono">
						</div>
						<div class="col s4 m4"></div>
					</div>
				</div>
				
			</div>
			<br><br><br><br><br><br><br><br><br><br><br>
			<a href="{{ url('/proyectos') }}" class="btn-custom">IR A OTROS PROYECTOS</a>

	</section>
	<br><br><br>

@endsection
@section('footer-class', 'index')
	