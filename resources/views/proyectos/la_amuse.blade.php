@extends('layouts.app')
@section('title', '')
@section('content')


	<section id="casa_cinco">
		<div class="row">
			<div class="col s2 m2"></div>
			<div class="col s9 m9 ">
				<h3><TABLE>LA' AMUSE</TABLE></h3>
				<h5>DESARROLLO DE IMAGEN</h5>
				<h5>-</h5>
			<div class="col s1"></div>
		</div>
		<div class="row">
			<div class="col s2 m2 "></div>
			<div class="col s9 m9">
				<p>
					Nos enfocamos en un logotipo sobrio, basado en tipografía. Lo que <br>
					otorga la versatilidad que necesita  para evolucionar la marca, ya <br>
					que el cliente desea expandirse en el mercado. Y su nombre La' <br>
					Amuse, le proporciona esa experiencia de exclusividad y elegancia,<br>
					que va a llegar a un público que busca sentirse diferente del resto.<br>
				</p>
				<br>
				<div class="divider  col s5"></div>
			</div>
			<div class="col s1"></div>
		</div>
	</section>

	<section id="la-amuse">
			<div class="row">
				<div class="row">
					<div class="col s4 m4"></div>
					<div class="col s3 m3">
						<img class="lamuse_logo" src="{{ URL::asset('images/proyectos/la_amuse/logo.svg') }}" alt="icono">
					</div>
					<div class="col s5 m5"></div>
				</div>
			</div>
			<br><br><br><br><br><br>

			<div class="row">
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
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
			<br><br><br><br>
			<a href="{{ url('/proyectos') }}" class="btn-custom">IR A OTROS PROYECTOS</a>

	</section>
	<br><br>

@endsection
@section('footer-class', 'index')



	