@extends('layouts.app')
@section('title', '')
@section('content')

	<section id="comofunciona">
			<div class="row">
				<div class="col s5 m5 " id="comofunciona-title">
					<h4>¿CÓMO<br>FUNCIONA?</h4>
					<h4 id="title-mobile">¿CÓMO FUNCIONA?</h4>
				</div>
				<div class="col s12 m12 l6" id="comofunciona-info">
					<div class="comofunciona-paso">
						<div class="comofunciona-paso-n"><p>PASO<br>01_</p></div>
						<div class="comofunciona-paso-info">
							<h5>INGRESA TUS DATOS</h5>
							<p>ASÍ SABREMOS SI SOLO NECESITAS UN LOGOTIPO O UNA ESTRATEGIA ESPECÍFICA.</p>
						</div>
						<div class="comofunciona-paso-icono">
							<img src="images/index/como_funciona_icono_1.svg" alt="icono">
						</div>
					</div>
				</div>
				<div class="col s12 m12 l6" id="comofunciona-info">
					<div class="comofunciona-paso">
						<div class="comofunciona-paso-n"><p>PASO<br>02_</p></div>
						<div class="comofunciona-paso-info">
							<h5>OBTÉN TU PRESUPUESTO EN MINUTOS</h5>
							<p>ARMA UN PLAN DE ACUERDO A TUS REQUERIMIENTOS Y OBTEN TU PRESUPUESTO AL INSTANTE. <b><br>¡ES INMEDIATO!</b></p>
						</div>
						<div class="comofunciona-paso-icono">
							<img src="images/index/como_funciona_icono_2.svg" alt="icono">
						</div>
					</div>
				</div>
				<div class="col s12 m12 l6" id="comofunciona-info">
					<div class="comofunciona-paso">
						<div class="comofunciona-paso-n"><p>PASO<br>03_</p></div>
						<div class="comofunciona-paso-info">
							<h5>ENVIA TU SOLICITUD</h5>
							<p>UNO DE NUESTROS EJECUTIVOS TE ATENDERÁ APENAS RECIBAMOS TU SOLICITUD</p>
						</div>
						<div class="comofunciona-paso-icono">
							<img src="images/index/como_funciona_icono_3.svg" alt="icono">
						</div>
					</div>
				</div>
			</div>
			<br><br>
			<a href="http://ekastudio.net/new_project/public_html/paso-1" class="btn-custom">¡ARMA UN PLAN A TU MEDIDA AHORA MISMO!</a>
	</section>

	<br><br>
	<section>
		<div class="row col-12">
			<div class="col s8 offset-s2 divider"></div>
		</div>

		<div id="social-media2">
			<img src="{{ URL::asset('images/corona.svg') }}" alt="corona">
			<div class="row">
				<div class="col m4"><a href="https://www.facebook.com/ekastudio13/">
					FACEBOOK
					</a>
				</div>
				<div class="col m4"><a href="https://www.instagram.com/eka.studio/?hl=en">
					INSTAGRAM
				</a></div>
				<div class="col m4"><a href="https://www.linkedin.com/company/eka-studio/">
					LINKEDIN
				</a></div>
				<br>
				<div class="col m12 "><a href="a">
					<h6 class="color-contact">ENVÍANOS TUS PREGUNTAS A HELLO@EKASTUDIO.NET</h6>
				</a></div>
			</div>
		</div>
		<div class="row col-12">
			<div class="col s8 offset-s2 divider"></div>
		</div>

	</section>

	<section id="descuentos">
			<h4>¿Y...TIENEN DESCUENTOS?</h4>
			<div class="row">
				<div class="col s12 m6" id="descuentos-title">
					<h5>¡¡ MIENTRAS MÁS GRANDE SEA TU PLAN...<br>...MAYOR SERÁ TU DESCUENTO !!</h5>
				</div>
				<div class="vertical-divider"></div>
				<div class="col s12 m6" id="descuentos-descuentos">
					<h5>3 ITEMS <span>-&nbsp;&nbsp;</span> 5% DE DESCUENTO</h5>
					<h5>5 ITEMS <span>-</span> 10% DE DESCUENTO</h5>
					<h5>7 ITEMS <span>-</span> 15% DE DESCUENTO</h5>
				</div>
			</div>
			<div id="descuentos_arma-tu-plan" class="z-depth-4">
				<h5>ARMA <br>TU PLAN</h5>
				<div id="arma-tu-plan-planes">
					<div class="arma-tu-plan_plan">
						<div class="arma-tu-plan_plan-img imagen_descuento"><img src="images/index/arma-tu-plan-1.svg" alt="arma-tu-plan-icon"></div>
						<div class="arma-tu-plan_plan-checkbox">
							<img src="images/index/checkbox_check.svg" alt="checkbox_check">
						</div>
					</div>
					<div class="arma-tu-plan_plan">
						<div class="arma-tu-plan_plan-img"><img src="images/index/arma-tu-plan-2.png" alt="arma-tu-plan-icon"></div>
						<div class="arma-tu-plan_plan-checkbox">
							<img src="images/index/checkbox_check.svg" alt="checkbox_check">
						</div>
					</div>
					<div class="arma-tu-plan_plan">
						<div class="arma-tu-plan_plan-img "><img src="images/index/arma-tu-plan-3.png" alt="arma-tu-plan-icon"></div>
						<div class="arma-tu-plan_plan-checkbox">
							<img src="images/index/checkbox_check.svg" alt="checkbox_check">
						</div>
					</div>
					<div class="arma-tu-plan_plan">
						<div class="arma-tu-plan_plan-img imagen_descuento"><img src="images/index/arma-tu-plan-4.png" alt="arma-tu-plan-icon"></div>
						<div class="arma-tu-plan_plan-checkbox">
							<img src="images/index/checkbox.svg" alt="caja">
						</div>
					</div>
					<div class="arma-tu-plan_plan">
						<div class="arma-tu-plan_plan-img"><img src="images/index/arma-tu-plan-5.png" alt="arma-tu-plan-icon"></div>
						<div class="arma-tu-plan_plan-checkbox">
							<img src="images/index/checkbox.svg" alt="caja">
						</div>
					</div>
				</div>
			</div>
			<div id="descuentos_subtotal" class="z-depth-4">
				<div class="row">
					<div class="col m6 left-align">
						<h5>SUBTOTAL POR 3 ITEMS</h5>
					</div>
					<div class="col m6 right-align">
						<p>$ 15,000</p>
					</div>
				</div>
			</div>
			<div id="descuentos_descuento" class="z-depth-4">
				<div class="row">
					<div class="col m4 left-align">
						<h5>-5% DE DESCUENTO</h5>
					</div>
					<div class="col m6">
						<h6>DESCUENTO SOBRE EL TOTAL DE TU PLAN</h6>
					</div>
					<div class="col m2 right-align">
						<p>-$ 1,500</p>
					</div>
				</div>
			</div>
			<div id="descuentos_total" class="z-depth-4">
				<div id="total">
					<div class="row">
						<div class="col m6 left-align">
							<h5>TOTAL</h5>
						</div>
						<div class="col m6 right-align">
							<p><span>$ 12,650</span></p>
						</div>
					</div>
					<div class="row">
						<div class="col m12 right-align">
							<p><span class="ahorro">AHORRO: $ 2,350</span></p>
						</div>
					</div>
				</div>
			</div>
	</section>

	<section id="otras_opciones">
			<h4>OTRAS OPCIONES CON DESCUENTO</h4>
			<h5>SIGUE LOS PASOS PARA TENER TU PRESUPUESTO</h5>
			<div class="row">
				<div class="col s12 m12 l6">
					<div class="opcion z-depth-4">
						<h5>SOLO LOGO</h5>
						<img src="images/index/arma-tu-plan-1.svg" alt="opcion">
						<a href="http://ekastudio.net/new_project/public_html/paso-1" class="btn-custom">INICIAR</a>
						
					</div>
				</div>
				<div class="col s12 m12 l6">
					<div class="opcion opcion-dos z-depth-4">
						<h5>LOGO + 3 APLICACIONES</h5>
						<img src="images/index/arma-tu-plan-1.svg" alt="opcion">
						<img src="images/index/arma-tu-plan-3.png" alt="opcion">
						<a href="http://ekastudio.net/new_project/public_html/paso-1" class="btn-custom"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">INICIAR</font></font></a>
						<h4>-5% DE DESCUENTO</h4>
					</div>
				</div>
				<div class="col s12 m12 l6">
					<div class="opcion mobile opcion-tres z-depth-4">
						<h5>LOGO + APLICACIONES + WEBSITE</h5>
						<a href="http://ekastudio.net/new_project/public_html/paso-1" class="btn-custom">INICIAR</a>
						<h4>-15% DE DESCUENTO</h4>
					</div>
				</div>
			</div>
			<div class="opcion opcion-tres z-depth-4">
				<h5>LOGO + APLICACIONES + WEBSITE</h5>
				<img src="images/index/arma-tu-plan-1.svg" alt="opcion">
				<img src="images/index/arma-tu-plan-2.png" alt="opcion">
				<img src="images/index/arma-tu-plan-5.png" alt="opcion">
				<br><br>
				<a href="http://ekastudio.net/new_project/public_html/paso-1" class="btn-custom"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">INICIAR</font></font></a>
				<h4>-15% DE DESCUENTO</h4>
			</div>
			<div id="especifico">
				<h5>¿BUSCAS ALGO MÁS ESPECÍFICO?</h5>
				<h4>¡ARMA TU PLAN A MEDIDA!</h4>
				<br><br><br>
				<a href="http://ekastudio.net/new_project/public_html/paso-1" class="btn-custom">CONTINUAR</a>
				<a href="http://ekastudio.net/new_project/public_html/paso-1" class="btn-custom mobile">QUIERO INICIAR</a>
			</div>
		</section>

@endsection
@section('footer-class', 'index')