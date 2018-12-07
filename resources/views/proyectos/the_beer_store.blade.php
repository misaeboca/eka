@extends('layouts.app')
@section('title', '')
@section('content')

	<section id="casa_cinco">
		<div class="row">
			<div class="col s2 m2"></div>
			<div class="col s9 m9 ">
				<h3>THE BEER STORE</h3>
				<h5>DESARROLLO DE IMAGEN</h5>
				<h5>-</h5>
			<div class="col s1"></div>
		</div>
		<div class="row">
			<div class="col s2 m2 "></div>
			<div class="col s9 m9">
				<p>
					Nos destacamos por logotipos elegantes, frescos y sin necesidad de<br>
					saturar con adornos confusos visualmente. En este caso, tratandose <br>
					de un local de comidas y bebidas, se logró crear un diseño muy <br>
					limpio y fácil de calar en la mente del público meta. Se usó una<br>
					tipografía ligera y con mucha presencia<br>
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
						<img src="{{ URL::asset('images/proyectos/the_beer_store/logo.svg') }}" alt="icono">
					</div>
					<div class="col s4 m4"></div>
				</div>
			</div>
			<br><br><br><br>

			<div class="row">
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/the_beer_store/mesa.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/the_beer_store/cocinero.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/the_beer_store/tarjeta.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br>
				
			</div>
			
			<a href="{{ url('/proyectos') }}" class="btn-custom">IR A OTROS PROYECTOS</a>

	</section>
	<br><br>

@endsection
@section('footer-class', 'index')
	