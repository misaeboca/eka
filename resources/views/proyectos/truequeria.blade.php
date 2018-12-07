@extends('layouts.app')
@section('title', '')
@section('content')

	<section id="casa_cinco">
		<div class="row">
			<div class="col s2 m2"></div>
			<div class="col s9 m9 ">
				<h3><TABLE>TRUEQUERÍA</TABLE></h3>
				<h5>DESARROLLO DE IMAGEN Y DISEÑO WEB</h5>
				<h5>-</h5>
			<div class="col s1"></div>
		</div>
		<div class="row">
			<div class="col s2 m2 "></div>
			<div class="col s9 m9">
				<p>
					Proyecto que nace para ofrecer un servicio totalmente innovador y <br>
					el cual ekastudio se encargó de llevar a cabo, con toda la visión  <br>
					profesional, para ofrecer una página web confiable para sus usuarios,<br>
					siendo la exigencia primordial la "comodidad". El reto fue precisamente<br>
					hacerla muy amigable visualmente y distribuir todos los elemntos<br>
					y señalizaciones de manera correcta para que fueran no solo<br>
					fáciles de ubicar, sino mas bien instintivos
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
						<img src="{{ URL::asset('images/proyectos/truequeria/logo.svg') }}" alt="icono">
					</div>
					<div class="col s4 m4"></div>
				</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br>

			<div class="row">
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/truequeria/lapto.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/truequeria/sello.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col s2 m2"></div>
					<div class="col s8 m8">
						<img src="{{ URL::asset('images/proyectos/truequeria/tarjeta.png') }}" alt="icono">
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br>
				
			</div>
			<br><br><br><br><br><br><br><br><br><br><br>
			<a href="{{ url('/proyectos') }}" class="btn-custom">IR A OTROS PROYECTOS</a>

	</section>
	<br><br><br>

@endsection
@section('footer-class', 'index')
	