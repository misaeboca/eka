@extends('layouts.app')
@section('title', '')
@section('content')

	<section id="proyectos">
			<div class="row">
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s4 m4 ">
						<img src="{{ URL::asset('images/proyectos/branding.png') }}" alt="icono">
						<h5>
							<a href="{{ url('/proyectos/casa_cinco') }}">CASA 5 <br> BRANDING</a>
						</h5>
						<div class="divider"></div>
					</div>
					<div class="col s4 m4 ">
						<img src="{{ URL::asset('images/proyectos/beer_store.png') }}" alt="icono">
						<h5>
							<a href="{{ url('proyectos/the_beer_store') }}">THE BEER STORE <br> BRANDING</a>
						</h5>
						<div class="divider"></div>
					</div>
					<div class="col s1"></div>
				</div>
			

			</div>
	</section>

	<section id="proyectos">
			<div class="row">
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s4 m4 ">
						<img src="{{ URL::asset('images/proyectos/laser.png') }}" alt="icono">
						<h5>
							<a href="{{ url('/proyectos/laser') }}">GRUPO LASER <br> BRANDING</a>
						</h5>
						<div class="divider"></div>
					</div>
					<div class="col s4 m4 ">
						<img src="{{ URL::asset('images/proyectos/truequeria.png') }}" alt="icono">
						<h5>
							<a href="{{ url('/proyectos/truequeria') }}">TRUEQUERÍA<br> LOGO</a>
						</h5>
						<div class="divider"></div>
					</div>
					<div class="col s1"></div>
				</div>
			

			</div>
	</section>

	<section id="proyectos">
			<div class="row">
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s4 m4 ">
						<img src="{{ URL::asset('images/proyectos/magueyro.png') }}" alt="icono">
						<h5>
							<a href="{{ url('/proyectos/magueyro') }}">MAGUEYRO <br> BRANDING</a>
						</h5>
						<div class="divider"></div>
					</div>
					<div class="col s4 m4 ">
						<img src="{{ URL::asset('images/proyectos/la_amuse.png') }}" alt="icono">
						<h5>
							<a href="{{ url('/proyectos/la_amuse') }}">LA' AMUSE<br> LOGO</a>
						</h5>
						<div class="divider"></div>
					</div>
					<div class="col s1"></div>
				</div>
		
			</div>
	</section>
	<br><br><br>

@endsection
@section('footer-class', 'index')
	