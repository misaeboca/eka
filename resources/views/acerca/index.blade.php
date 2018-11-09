@extends('layouts.app')
@section('title', '')
@section('content')

	<section id="acerca">
		<div class="row">
			<div class="col s2 m2 "></div>
			<div class="col s9 m9">
				<div id="acerca-img" class="col s5 m5">
					<img src="{{ URL::asset('images/index/logo_negro.svg') }}">
				</div>
				<div id="acerca-texto" class="col s6 m6 ">
					<h5>EKA.STUDIO <br> -</h5>
					<p>
						Somos un estudio<br>
						especializado en diseño y <br>
						branding, que mediante la <br>
						experiencia y el uso de <br>
						herramientas digitales <br>
						logramos pocisionar a <br>
						nuestros clientes por delante <br>
						de su competencia<br><br>
						Conformamos un equipo<br>
						de trabajo con más de 8  años<br>
						de experiencia, siempre en la <br>
						búsqueda de nuevos retos y <br>
						construyendo conceptos <br>
						vanguardistas <br><br>
						Trabajamos con empresas y <br>
						particulares en proyectos <br>
						que van desde personales <br>
						hasta grande proyecciones <br>
						empresariales, desarrollando <br>
						nuevas y sofisticadas solu- <br>
						ciones de diseño sustentable.<br>
						Dando forma a los requerimientos<br>
						del Cliente con bases sólidas<br>
						y realistas del mercado actual
					</p>
				</div>
				
				<br>
			</div>
			<div class="col s2 m2"></div>
		</div>
	</section>

	<section id="la-amuse">
			<div class="row">
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<h5>CLIENTES <br> -</h5>
						<img src="{{ URL::asset('images/proyectos/la_amuse/caja.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/la_amuse/vaso.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/la_amuse/vaso_donas.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/la_amuse/donas.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/la_amuse/caja_donas.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>

			</div>
			<br><br><br><br><br><br><br><br><br><br><br>
			<a href="{{ url('/proyectos') }}" class="btn-custom">IR A OTROS PROYECTOS</a>

	</section>
	<br><br><br>

@endsection
@section('footer-class', 'index')
	