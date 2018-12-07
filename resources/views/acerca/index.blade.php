@extends('layouts.app')
@section('title', '')
@section('content')

  <div class="row" style="padding-top: 25px">
    <div class="col s12  offset-s2" style="text-align: left;">
    	<div id="acerca-img" class="col s12 m5">
			<img  class="responsive-img" src="{{ URL::asset('images/index/logo_negro.svg') }}" width="70%" style="padding-top: 25px;">
		</div>
		<div id="acerca-texto" class="col s12 m7 foto_eka" style="text-align: left;">
			<h5>EKA.STUDIO <br> -</h5>
			<p style="font-weight: 600">
				Somos un estudio <br>
				especializado en consultoría<br>
				de diseño, mediante la <br>
				experiencia y el uso de <br>
				herramientas logramos posicionar<br>
				a nuestros clientes por delante <br>
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
		</div>
    </div>
    <div class="row">
	    <div class="col s2 m2"></div>
	    <div class="col s8 m8 ">
	    	<h5><b style="text-align: left; font-size: 20px">CLIENTES <br> -</b></h5>
	    	<p style="text-align: left; font-size: 18px;font-weight: 600">
				Todos nuestros clientes tienen la misma importancia para nosotros<br>
				independientemente del tamaño e influencia que tenga en el mercado
			</p>
	    </div>
	</div>


	<section id="la-amuse">		
			<div class="row">
				<br><br><br>
				<div class="row">
					<div class="col s1 m1"></div>
					<div class="col s9 m9">
						<div class="col s12 m4">
							<img class="la_amuse" src="{{ URL::asset('images/acerca/la_amuse.svg') }}" alt="icono">
						</div>
						<div class="col s12 m4">
							<img class="la_amuse_otras" src="{{ URL::asset('images/acerca/koaj.svg') }}" alt="icono">
						</div>
						<div class="col s12 m4">
							<img class="la_amuse_otras" src="{{ URL::asset('images/acerca/mysis.svg') }}" alt="icono">
						</div>
					</div>
					<div class="col s2"></div>
				</div>
				<br><br>
				<div class="row">
					<div class="col s1 m1"></div>
					<div class="col s9 m9">
						<div class="col s12 m4">
							<img class="la_amuse2" src="{{ URL::asset('images/acerca/don_ramon.svg') }}" alt="icono">
						</div>
						<div class="col s12 m4">
							<img class="la_amuse_otras" src="{{ URL::asset('images/acerca/laser.svg') }}" alt="icono">
						</div>
						<div class="col s12 m4">
							<img class="la_amuse2" src="{{ URL::asset('images/acerca/cuervo.svg') }}" alt="icono">
						</div>
					</div>
					<div class="col s2"></div>
				</div>
				<br><br><br>

			</div>

	</section>


@endsection
@section('footer-class', 'index')
	