@extends('layouts.app')
@section('title', '| Paso_2')
@section('content')

		<div id="steps">
			<div class="step one">1</div>
			<div class="step-divider one"></div>
			<div class="step two active">2</div>
			<div class="step-divider two"></div>
			<div class="step three">3</div>
			<p>PASO 2 DE 3</p>
		</div>

		<section id="form-paso-two">
			<form action="{{ url('update-process') }}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_id" value="<?php echo $id; ?>">

				<div class="paso-title">
					<h5>DINOS TUS NECESIDADES</h5>
					<p>RECUERDA QUE MIENTRAS MÁS ITEMS ELIGAS. MÁS DESCUENTO VAS A OBTENER</p>
				</div>
				<div id="paso-two-articles">
					<div class="row">
						<?php foreach ($services as $service): ?>

							    <div class="col s12 m12 l3">
									<div class=" paso-two-article z-depth-3">
										<input type="hidden" name="service_id" value="<?php echo $service->id; ?>">
										<img src="<?php echo $service->image; ?>" alt="foto" with="100px">
										<h5><?php echo $service->name; ?></h5>
										<a href="#<?php echo $service->modal_id; ?>" class="modal-trigger">conocer más</a>
										<p><input type="text" name="services_price" id="cantidad_price_<?php echo $service->name; ?>" value="$ <?php echo $service->price; ?>" disabled></p>
										<div class="cantidad">
											<a onclick=" down('0', '<?php echo $service->name; ?>')" class="signo menos"><img src="{{ URL::asset('images/pasos/signo-menos.svg') }}" alt="signo"></a>
											<p><input class="number-quantity" id="<?php echo $service->name; ?>" type="text" name="<?php echo $service->input_name; ?>" value="0"></p>
											<a onclick=" up('10', '<?php echo $service->name; ?>')" class="signo mas"><img src="{{ URL::asset('images/pasos/signo-mas.svg') }}" alt="signo"></a>
										</div>
									</div>
								</div>
						<?php endforeach; ?>
					</div>
				</div>
				
					<div class="row center">
						<div class="col s12 m12 " >
							<button class="btn-custom"><b>REGRESAR</b></button> 
							{{-- <a href="{{ url('paso-1') }}" class="btn-custom">REGRESAR</a>--}}
						
							<button class="btn-custom"><b>CONTINUAR</b></button>
							 {{--<a href="{{ url('paso-3') }}" class="btn-custom">CONTINUAR</a>--}}
						</div>
					</div>
			

			</form>

			{{-- Modales --}}
			<div id="modal-logotipo" class="modal paso_2">
			    <div class="modal-content">
			      <h5>LOGOTIPO</h5>
			      <p>Recibirás nuestra asesoría para saber que tipo de logotipo se adapta mejor a tus necesidades.</p>
			      <p>Tendrás 2 sesiones para correcciones.</p>
			      <p>Presentación de primeras ideas.</p>
			      <p>Presentación de logotipo final.</p>
			      <p>Entregables en digital<br>[.ai .pdf .jpg .eps .png]</p>
			    </div>
			    <div class="modal-footer">
			      <img src="{{ URL::asset('images/pasos/logo-negro.svg') }}" alt="logo">
			    </div>
			</div>
			<div id="modal-tarjetas" class="modal paso_2">
			    <div class="modal-content">
			      <h5>DISEÑO DE TARJETAS</h5>
			      <p>Incluye dos propuestas para revisión, de las cuales se escogerá una versión final.</p>
			      <p>Se aceptan 2 correcciones menores sobre la propuesta final.</p>
			      <p>Entregables en digital<br>[.ai .pdf .jpg .eps .png]</p>
			    </div>
			    <div class="modal-footer">
			      <img src="{{ URL::asset('images/pasos/logo-negro.svg') }}" alt="logo">
			    </div>
			</div>
			<div id="modal-papeleria" class="modal paso_2">
			    <div class="modal-content">
			      <h5>PAPELERÍA</h5>
			      <p>Entrega de manual de Pantone, tipografía y códigos necesarios para impresión profesional.</p>
			      <p>Se aceptan 2 correcciones menores sobre la propuesta final.</p>
			      <p>Entregables en digital<br>[.ai .pdf .jpg .eps .png]</p>
			    </div>
			    <div class="modal-footer">
			      <img src="{{ URL::asset('images/pasos/logo-negro.svg') }}" alt="logo">
			    </div>
			</div>
			<div id="modal-accesorios" class="modal paso_2">
			    <div class="modal-content">
			      <h5>ACCESORIOS</h5>
			      <p>Entrega de manual de pantone, tipografía y códigos necesarios para impresión profesional.</p>
			      <p>Se aceptan 2 correcciones menores sobre la propuesta final.</p>
			      <p>Entregables en digital<br>[.ai .pdf .jpg .eps .png]</p>
			    </div>
			    <div class="modal-footer">
			      <img src="{{ URL::asset('images/pasos/logo-negro.svg') }}" alt="logo">
			    </div>
			</div>
			<div id="modal-web" class="modal paso_2">
			    <div class="modal-content">
			      <h5>WEB</h5>
			      <p>Incluye un Mockup de de acomodo y distribución de elementos, según las necesidades del sitio web, posteriormente el diseño web.</p>
			      <p>Tendrás 3 sesiones para correcciones de tu sitio web.</p>
			      <p>Entregables en digital<br>[.ai .pdf .jpg .eps .png]</p>
			    </div>
			    <div class="modal-footer">
			      <img src="{{ URL::asset('images/pasos/logo-negro.svg') }}" alt="logo">
			    </div>
			</div>
			<div id="modal-nombre" class="modal paso_2">
			    <div class="modal-content">
			      <h5>NOMBRE</h5>
			      <p>Tras una previa recopilación de datos se llevará a cabo el proceso de investigación para dar con el nombre ideal para tu mercado.</p>
			      <p>Tendrás 5 opciones sustentadas, de las cuales se escogerá un nombre final.</p>
			      <p>Entregables en digital<br>[.ai .pdf .jpg .eps .png]</p>
			    </div>
			    <div class="modal-footer">
			      <img src="{{ URL::asset('images/pasos/logo-negro.svg') }}" alt="logo">
			    </div>
			</div>
			<div id="modal-shirt" class="modal paso_2">
			    <div class="modal-content">
			      <h5>DISEÑO T-SHIRT</h5>
			      <p>Entrega de manual de pantone, tipografía y códigos necesarios para impresión profesional.</p>
			      <p>Se aceptan 2 correcciones menores sobre la propuesta final.</p>
			      <p>Entregables en digital<br>[.ai .pdf .jpg .eps .png]</p>
			    </div>
			    <div class="modal-footer">
			      <img src="{{ URL::asset('images/pasos/logo-negro.svg') }}" alt="logo">
			    </div>
			</div>
			<div id="modal-menu" class="modal paso_2">
			    <div class="modal-content">
			      <h5>MENU</h5>
			      <p>Entrega de manual de Pantone, tipografía y códigos necesarios para impresión profesional.</p>
			      <p>Se aceptan 2 correcciones menores sobre la propuesta final.</p>
			      <p>Entregables en digital<br>[.ai .pdf .jpg .eps .png]</p>
			    </div>
			    <div class="modal-footer">
			      <img src="{{ URL::asset('images/pasos/logo-negro.svg') }}" alt="logo">
			    </div>
			</div>

		</section>

		<script>
			function up(max, input) {
			    document.getElementById(input).value = parseInt(document.getElementById(input).value) + 1;

			    var input_value = 'cantidad_price_'+input;
			    if (input_value == 'cantidad_price_LOGOTIPO') {
			    	document.getElementById('cantidad_price_'+input).value = addCommas('$ ' + '9750' * parseInt(document.getElementById(input).value));
			    }else if (input_value == 'cantidad_price_DISEÑO TARJETAS'){
			    	document.getElementById('cantidad_price_'+input).value = addCommas('$ ' + '3500' * parseInt(document.getElementById(input).value));
			    }else if (input_value == 'cantidad_price_PAPELERÍA'){
			    	document.getElementById('cantidad_price_'+input).value = addCommas('$ ' + '3200' * parseInt(document.getElementById(input).value));
			    }else if (input_value == 'cantidad_price_ACCESORIOS'){
			    	document.getElementById('cantidad_price_'+input).value = addCommas('$ ' + '2800' * parseInt(document.getElementById(input).value));
			    }else if (input_value == 'cantidad_price_WEB'){
			    	document.getElementById('cantidad_price_'+input).value = addCommas('$ ' + '20000' * parseInt(document.getElementById(input).value));
			    }else if (input_value == 'cantidad_price_NOMBRE'){
			    	document.getElementById('cantidad_price_'+input).value = addCommas('$ ' + '3000' * parseInt(document.getElementById(input).value));
			    }else if (input_value == 'cantidad_price_DISEÑO T-SHIRT'){
			    	document.getElementById('cantidad_price_'+input).value = addCommas('$ ' + '3400' * parseInt(document.getElementById(input).value));
			    }else if (input_value == 'cantidad_price_MENÚ'){
			    	document.getElementById('cantidad_price_'+input).value = addCommas('$ ' + '5000' * parseInt(document.getElementById(input).value));
			    }

			    if (document.getElementById(input).value >= parseInt(max)) {
			        document.getElementById(input).value = max;
			    }
			}
			function down(min, input) {
			    document.getElementById(input).value = parseInt(document.getElementById(input).value) - 1;

			    var input_value = 'cantidad_price_'+input;
			    if (input_value == 'cantidad_price_LOGOTIPO') {
			    	document.getElementById('cantidad_price_'+input).value = addCommas('$ ' + '9750' * parseInt(document.getElementById(input).value));
			    }else if (input_value == 'cantidad_price_DISEÑO TARJETAS'){
			    	document.getElementById('cantidad_price_'+input).value = addCommas('$ ' + '3500' * parseInt(document.getElementById(input).value));
			    }else if (input_value == 'cantidad_price_PAPELERÍA'){
			    	document.getElementById('cantidad_price_'+input).value = addCommas('$ ' + '3200' * parseInt(document.getElementById(input).value));
			    }else if (input_value == 'cantidad_price_ACCESORIOS'){
			    	document.getElementById('cantidad_price_'+input).value = addCommas('$ ' + '2800' * parseInt(document.getElementById(input).value));
			    }else if (input_value == 'cantidad_price_WEB'){
			    	document.getElementById('cantidad_price_'+input).value = addCommas('$ ' + '20000' * parseInt(document.getElementById(input).value));
			    }else if (input_value == 'cantidad_price_NOMBRE'){
			    	document.getElementById('cantidad_price_'+input).value = addCommas('$ ' + '3000' * parseInt(document.getElementById(input).value));
			    }else if (input_value == 'cantidad_price_DISEÑO T-SHIRT'){
			    	document.getElementById('cantidad_price_'+input).value = addCommas('$ ' + '3400' * parseInt(document.getElementById(input).value));
			    }else if (input_value == 'cantidad_price_MENÚ'){
			    	document.getElementById('cantidad_price_'+input).value = addCommas('$ ' + '5000' * parseInt(document.getElementById(input).value));
			    }

			    if (document.getElementById(input).value <= parseInt(min)) {
			        document.getElementById(input).value = min;
			        document.getElementById('cantidad_price_'+input).value = '$ 0';
			    }

			}
		    function addCommas(nStr) {
			    nStr += '';
			    x = nStr.split('.');
			    x1 = x[0];
			    x2 = x.length > 1 ? '.' + x[1] : '';
			    var rgx = /(\d+)(\d{3})/;
			    while (rgx.test(x1)) {
			            x1 = x1.replace(rgx, '$1' + ',' + '$2');
			    }
			    return x1 + x2;
			}
		</script>
@endsection
@section('footer-class', 'servicio steps')