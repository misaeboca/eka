@extends('layouts.app')
@section('title', '| Paso_3')
@section('content')

		<div id="steps">
			<div class="step one">1</div>
			<div class="step-divider one"></div>
			<div class="step two">2</div>
			<div class="step-divider two"></div>
			<div class="step three active">3</div>
			<p>PASO 3 DE 3</p>
		</div>

		<section id="form-paso-three">
			<form action="{{ url('send-mail-process') }}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_id" value="<?php echo $id; ?>">
				<input type="hidden" name="process_total" id="process_total">

				<div class="paso-title">
					<h5>TU PLAN PERFECTO LUCE ASI:</h5>
				</div>
				<div id="plan-final" class="z-depth-4">
					<?php foreach ($services as $service): ?>
						<?php if ($service->service_1 >= 1) { ?>
							<div class="plan-final-plan">
								<div class="plan-final-plan-img"><img src="{{ URL::asset('images/pasos/articulo-1.svg') }}" alt="arma-tu-plan-icon"></div>
								<div class="plan-final-plan-info">
									<p>LOGOTIPO</p>
									<div class="cantidad">
										<p>CANTIDAD</p>
										<div class="numero">
											<p class=""><input type="text" name="services_cantidad" id="cantidad_service_1" value="<?php echo $service->service_1; ?>" disabled></p>
											<a class="flecha-up"><i class="material-icons" onclick="up('10', 'cantidad_service_1')">arrow_drop_up</i></a>
											<a class="flecha-down"><i class="material-icons" onclick="down('0', 'cantidad_service_1')">arrow_drop_down</i></a>
										</div>
										<a onclick="amount_d('cantidad_service_1')">ELIMINAR</a>
									</div>
									<h5><input type="text" name="services_result" id="result_service_1" disabled></h5>
									<input type="hidden" name="price" id="service_1_price" value="9750">
									<input type="hidden" name="services_cantidad_1" id="service_cantidad_1" value="<?php echo $service->service_1; ?>">
								</div>
							</div>
						<?php } ?>
						<?php if ($service->service_2 >= 1) { ?>
							<div class="plan-final-plan">
								<div class="plan-final-plan-img"><img src="{{ URL::asset('images/pasos/articulo-2.png') }}" alt="arma-tu-plan-icon"></div>
								<div class="plan-final-plan-info">
									<p>DISEÑO TARJETAS</p>
									<div class="cantidad">
										<p>CANTIDAD</p>
										<div class="numero">
											<p class=""><input type="text" name="services_cantidad" id="cantidad_service_2" value="<?php echo $service->service_2; ?>" disabled></p>
											<a class="flecha-up"><i class="material-icons" onclick="up('10', 'cantidad_service_2')">arrow_drop_up</i></a>
											<a class="flecha-down"><i class="material-icons" onclick="down('0', 'cantidad_service_2')">arrow_drop_down</i></a>
										</div>
										<a onclick="amount_d('cantidad_service_2')">ELIMINAR</a>
									</div>
									<h5><input type="text" name="services_result" id="result_service_2" disabled></h5>
									<input type="hidden" name="price" id="service_2_price" value="3500">
									<input type="hidden" name="services_cantidad_2" id="service_cantidad_2" value="<?php echo $service->service_2; ?>">
								</div>
							</div>
						<?php } ?>
						<?php if ($service->service_3 >= 1) { ?>
							<div class="plan-final-plan">
								<div class="plan-final-plan-img"><img src="{{ URL::asset('images/pasos/articulo-3.png') }}" alt="arma-tu-plan-icon"></div>
								<div class="plan-final-plan-info">
									<p>PAPELERÍA</p>
									<div class="cantidad">
										<p>CANTIDAD</p>
										<div class="numero">
											<p class=""><input type="text" name="services_cantidad" id="cantidad_service_3" value="<?php echo $service->service_3; ?>" disabled></p>
											<a class="flecha-up"><i class="material-icons" onclick="up('10', 'cantidad_service_3')">arrow_drop_up</i></a>
											<a class="flecha-down"><i class="material-icons" onclick="down('0', 'cantidad_service_3')">arrow_drop_down</i></a>
										</div>
										<a onclick="amount_d('cantidad_service_3')">ELIMINAR</a>
									</div>
									<h5><input type="text" name="services_result" id="result_service_3" disabled></h5>
									<input type="hidden" name="price" id="service_3_price" value="3200">
									<input type="hidden" name="services_cantidad_3" id="service_cantidad_3" value="<?php echo $service->service_3; ?>">
								</div>
							</div>
						<?php } ?>
						<?php if ($service->service_4 >= 1) { ?>
							<div class="plan-final-plan">
								<div class="plan-final-plan-img"><img src="{{ URL::asset('images/pasos/articulo-4.png') }}" alt="arma-tu-plan-icon"></div>
								<div class="plan-final-plan-info">
									<p>ACCESORIOS</p>
									<div class="cantidad">
										<p>CANTIDAD</p>
										<div class="numero">
											<p class=""><input type="text" name="services_cantidad" id="cantidad_service_4" value="<?php echo $service->service_4; ?>" disabled></p>
											<a class="flecha-up"><i class="material-icons" onclick="up('10', 'cantidad_service_4')">arrow_drop_up</i></a>
											<a class="flecha-down"><i class="material-icons" onclick="down('0', 'cantidad_service_4')">arrow_drop_down</i></a>
										</div>
										<a onclick="amount_d('cantidad_service_4')">ELIMINAR</a>
									</div>
									<h5><input type="text" name="services_result" id="result_service_4" disabled></h5>
									<input type="hidden" name="price" id="service_4_price" value="2800">
									<input type="hidden" name="services_cantidad_4" id="service_cantidad_4" value="<?php echo $service->service_4; ?>">
								</div>
							</div>
						<?php } ?>
						<?php if ($service->service_5 >= 1) { ?>
							<div class="plan-final-plan">
								<div class="plan-final-plan-img"><img src="{{ URL::asset('images/pasos/articulo-5.png') }}" alt="arma-tu-plan-icon"></div>
								<div class="plan-final-plan-info">
									<p>WEB</p>
									<div class="cantidad">
										<p>CANTIDAD</p>
										<div class="numero">
											<p class=""><input type="text" name="services_cantidad" id="cantidad_service_5" value="<?php echo $service->service_5; ?>" disabled></p>
											<a class="flecha-up"><i class="material-icons" onclick="up('10', 'cantidad_service_5')">arrow_drop_up</i></a>
											<a class="flecha-down"><i class="material-icons" onclick="down('0', 'cantidad_service_5')">arrow_drop_down</i></a>
										</div>
										<a onclick="amount_d('cantidad_service_5')">ELIMINAR</a>
									</div>
									<h5><input type="text" name="services_result" id="result_service_5" disabled></h5>
									<input type="hidden" name="price" id="service_5_price" value="20000">
									<input type="hidden" name="services_cantidad_5" id="service_cantidad_5" value="<?php echo $service->service_5; ?>">
								</div>
							</div>
						<?php } ?>
						<?php if ($service->service_6 >= 1) { ?>
							<div class="plan-final-plan">
								<div class="plan-final-plan-img"><img src="{{ URL::asset('images/pasos/articulo-6.png') }}" alt="arma-tu-plan-icon"></div>
								<div class="plan-final-plan-info">
									<p>NOMBRE</p>
									<div class="cantidad">
										<p>CANTIDAD</p>
										<div class="numero">
											<p class=""><input type="text" name="services_cantidad" id="cantidad_service_6" value="<?php echo $service->service_6; ?>" disabled></p>
											<a class="flecha-up"><i class="material-icons" onclick="up('10', 'cantidad_service_6')">arrow_drop_up</i></a>
											<a class="flecha-down"><i class="material-icons" onclick="down('0', 'cantidad_service_6')">arrow_drop_down</i></a>
										</div>
										<a onclick="amount_d('cantidad_service_6')">ELIMINAR</a>
									</div>
									<h5><input type="text" name="services_result" id="result_service_6" disabled></h5>
									<input type="hidden" name="price" id="service_6_price" value="3000">
									<input type="hidden" name="services_cantidad_6" id="service_cantidad_6" value="<?php echo $service->service_6; ?>">
								</div>
							</div>
						<?php } ?>
						<?php if ($service->service_7 >= 1) { ?>
							<div class="plan-final-plan">
								<div class="plan-final-plan-img"><img src="{{ URL::asset('images/pasos/articulo-7.png') }}" alt="arma-tu-plan-icon"></div>
								<div class="plan-final-plan-info">
									<p>DISEÑO T-SHIRT</p>
									<div class="cantidad">
										<p>CANTIDAD</p>
										<div class="numero">
											<p class=""><input type="text" name="services_cantidad" id="cantidad_service_7" value="<?php echo $service->service_7; ?>" disabled></p>
											<a class="flecha-up"><i class="material-icons" onclick="up('10', 'cantidad_service_7')">arrow_drop_up</i></a>
											<a class="flecha-down"><i class="material-icons" onclick="down('0', 'cantidad_service_7')">arrow_drop_down</i></a>
										</div>
										<a onclick="amount_d('cantidad_service_7')">ELIMINAR</a>
									</div>
									<h5><input type="text" name="services_result" id="result_service_7" disabled></h5>
									<input type="hidden" name="price" id="service_7_price" value="3400">
									<input type="hidden" name="services_cantidad_7" id="service_cantidad_7" value="<?php echo $service->service_7; ?>">
								</div>
							</div>
						<?php } ?>
						<?php if ($service->service_8 >= 1) { ?>
							<div class="plan-final-plan">
								<div class="plan-final-plan-img"><img src="{{ URL::asset('images/pasos/articulo-8.png') }}" alt="arma-tu-plan-icon"></div>
								<div class="plan-final-plan-info">
									<p>MENÚ</p>
									<div class="cantidad">
										<p>CANTIDAD</p>
										<div class="numero">
											<p><input type="text" name="services_cantidad" id="cantidad_service_8" value="<?php echo $service->service_8; ?>" disabled></p>
											<a class="flecha-up"><i class="material-icons" onclick="up('10', 'cantidad_service_8')">arrow_drop_up</i></a>
											<a class="flecha-down"><i class="material-icons" onclick="down('0', 'cantidad_service_8')">arrow_drop_down</i></a>
										</div>
										<a onclick="amount_d('cantidad_service_8')">ELIMINAR</a>
									</div>
									<h5><input type="text" name="services_result" id="result_service_8" disabled></h5>
									<input type="hidden" name="price" id="service_8_price" value="5000">
									<input type="hidden" name="services_cantidad_8" id="service_cantidad_8" value="<?php echo $service->service_8; ?>">
								</div>
							</div>
						<?php } ?>
					<?php endforeach; ?>
				</div>
				<div id="subtotal" class="z-depth-4">
					<div class="row">
						<div class="col s7 m6"><h5><input type="text" name="services_subtotal_cantidad" id="services_subtotal_cantidad" disabled></h5></div>
						<div class="col s5 m6"><p><input type="text" name="services_subtotal_price" id="services_subtotal_price" disabled></p></div>
					</div>
				</div>
				<div id="descuento" class="z-depth-4">
					<div class="row">
						<div class="col s7 m7"><h5><input type="text" name="services_discount" id="services_discount" disabled></h5></div>
						<div class="col s5 m5"><p><input type="text" name="services_discount_price" id="services_discount_price" disabled></p></div>
					</div>
				</div>
				<div id="total" class="z-depth-4">
					<div id="total-total">
						<div class="row">
							<div class="col s6 m6">
								<h5>TOTAL</h5>
							</div>
							<div class="col s6 m6 ">
								<p><input type="text" name="services_total" id="services_total" disabled></p>
							</div>
						</div>
					</div>
				</div>
				<div id="btns">
					<div class="row">
						<div class="col s6 m6">
							{{-- <button class="btn-custom-btn">REGRESAR</button> --}}
							<a href="{{ url('paso-1') }}" class="btn-custom">CANCELAR</a>
						</div>
						<div class="col s6 m6">
							<button class="btn-custom-btn">ENVIAR</button>
							{{-- <a href="{{ url('/') }}" class="btn-custom">CONTINUAR</a> --}}
						</div>
					</div>
				</div>

			</form>
		</section>

		<script>

			function up(max, input) {
			    document.getElementById(input).value = parseInt(document.getElementById(input).value) + 1;

			    if (input == "cantidad_service_1") {
		    	 	parseInt($("#service_cantidad_1").val(parseInt(document.getElementById(input).value)))
			    }else if (input == "cantidad_service_2") {
		    	 	parseInt($("#service_cantidad_2").val(parseInt(document.getElementById(input).value)))
			    }else if (input == "cantidad_service_3") {
		    	 	parseInt($("#service_cantidad_3").val(parseInt(document.getElementById(input).value)))
			    }else if (input == "cantidad_service_4") {
		    	 	parseInt($("#service_cantidad_4").val(parseInt(document.getElementById(input).value)))
			    }else if (input == "cantidad_service_5") {
		    	 	parseInt($("#service_cantidad_5").val(parseInt(document.getElementById(input).value)))
			    }else if (input == "cantidad_service_6") {
		    	 	parseInt($("#service_cantidad_6").val(parseInt(document.getElementById(input).value)))
			    }else if (input == "cantidad_service_7") {
		    	 	parseInt($("#service_cantidad_7").val(parseInt(document.getElementById(input).value)))
			    }else if (input == "cantidad_service_8") {
		    	 	parseInt($("#service_cantidad_8").val(parseInt(document.getElementById(input).value)))
			    }

			    // if (document.getElementById(input).value >= parseInt(max)) {
			    //     document.getElementById(input).value = max;
			    // }
		    	result_reload();
			}
			function down(min, input) {
			    document.getElementById(input).value = parseInt(document.getElementById(input).value) - 1;

			    if (input == "cantidad_service_1") {
		    	 	parseInt($("#service_cantidad_1").val(parseInt(document.getElementById(input).value)))
			    }else if (input == "cantidad_service_2") {
		    	 	parseInt($("#service_cantidad_2").val(parseInt(document.getElementById(input).value)))
			    }else if (input == "cantidad_service_3") {
		    	 	parseInt($("#service_cantidad_3").val(parseInt(document.getElementById(input).value)))
			    }else if (input == "cantidad_service_4") {
		    	 	parseInt($("#service_cantidad_4").val(parseInt(document.getElementById(input).value)))
			    }else if (input == "cantidad_service_5") {
		    	 	parseInt($("#service_cantidad_5").val(parseInt(document.getElementById(input).value)))
			    }else if (input == "cantidad_service_6") {
		    	 	parseInt($("#service_cantidad_6").val(parseInt(document.getElementById(input).value)))
			    }else if (input == "cantidad_service_7") {
		    	 	parseInt($("#service_cantidad_7").val(parseInt(document.getElementById(input).value)))
			    }else if (input == "cantidad_service_8") {
		    	 	parseInt($("#service_cantidad_8").val(parseInt(document.getElementById(input).value)))
			    }

			    if (document.getElementById(input).value <= parseInt(min)) {
			        document.getElementById(input).value = min;
			    }
		    	result_reload();
			}
			function amount_d(input_name) {
			    document.getElementById(input_name).value = parseInt(0);
			    if (input_name == "cantidad_service_1") {
		    	 	parseInt($("#service_cantidad_1").val(parseInt(document.getElementById(input_name).value)))
			    }else if (input_name == "cantidad_service_2") {
		    	 	parseInt($("#service_cantidad_2").val(parseInt(document.getElementById(input_name).value)))
			    }else if (input_name == "cantidad_service_3") {
		    	 	parseInt($("#service_cantidad_3").val(parseInt(document.getElementById(input_name).value)))
			    }else if (input_name == "cantidad_service_4") {
		    	 	parseInt($("#service_cantidad_4").val(parseInt(document.getElementById(input_name).value)))
			    }else if (input_name == "cantidad_service_5") {
		    	 	parseInt($("#service_cantidad_5").val(parseInt(document.getElementById(input_name).value)))
			    }else if (input_name == "cantidad_service_6") {
		    	 	parseInt($("#service_cantidad_6").val(parseInt(document.getElementById(input_name).value)))
			    }else if (input_name == "cantidad_service_7") {
		    	 	parseInt($("#service_cantidad_7").val(parseInt(document.getElementById(input_name).value)))
			    }else if (input_name == "cantidad_service_8") {
		    	 	parseInt($("#service_cantidad_8").val(parseInt(document.getElementById(input_name).value)))
			    }
			    
		    	result_reload();
			}

			// Service Price
			var price_1 = parseInt($("#service_1_price").val()) || null;
			var price_2 = parseInt($("#service_2_price").val()) || null;
			var price_3 = parseInt($("#service_3_price").val()) || null;
			var price_4 = parseInt($("#service_4_price").val()) || null;
			var price_5 = parseInt($("#service_5_price").val()) || null;
			var price_6 = parseInt($("#service_6_price").val()) || null;
			var price_7 = parseInt($("#service_7_price").val()) || null;
			var price_8 = parseInt($("#service_8_price").val()) || null;

			// Service Cantidad
			var cantidad_1 = parseInt($("#cantidad_service_1").val()) || null;
			var cantidad_2 = parseInt($("#cantidad_service_2").val()) || null;
			var cantidad_3 = parseInt($("#cantidad_service_3").val()) || null;
			var cantidad_4 = parseInt($("#cantidad_service_4").val()) || null;
			var cantidad_5 = parseInt($("#cantidad_service_5").val()) || null;
			var cantidad_6 = parseInt($("#cantidad_service_6").val()) || null;
			var cantidad_7 = parseInt($("#cantidad_service_7").val()) || null;
			var cantidad_8 = parseInt($("#cantidad_service_8").val()) || null;
			var services_subtotal_cantidad = cantidad_1 + cantidad_2 + cantidad_3 + cantidad_4 + cantidad_5 + cantidad_6 + cantidad_7 + cantidad_8;

			// Services total result
			var total_1 = price_1 * cantidad_1;
			var total_2 = price_2 * cantidad_2;
			var total_3 = price_3 * cantidad_3;
			var total_4 = price_4 * cantidad_4;
			var total_5 = price_5 * cantidad_5;
			var total_6 = price_6 * cantidad_6;
			var total_7 = price_7 * cantidad_7;
			var total_8 = price_8 * cantidad_8;
			var services_total_price = total_1 + total_2 + total_3 + total_4 + total_5 + total_6 + total_7 + total_8;

			$("#result_service_1").val(addCommas('$ ' + total_1));
			$("#result_service_2").val(addCommas('$ ' + total_2));
			$("#result_service_3").val(addCommas('$ ' + total_3));
			$("#result_service_4").val(addCommas('$ ' + total_4));
			$("#result_service_5").val(addCommas('$ ' + total_5));
			$("#result_service_6").val(addCommas('$ ' + total_6));
			$("#result_service_7").val(addCommas('$ ' + total_7));
			$("#result_service_8").val(addCommas('$ ' + total_8));

			// Services SubTotal Price
			$("#services_subtotal_price").val(addCommas('$ ' + services_total_price));

			// Services SubTotal Cantidad
			$("#services_subtotal_cantidad").val(addCommas('SUBTOTAL POR ' + services_subtotal_cantidad + ' ITEMS'));

			// Services Discount
			if (services_subtotal_cantidad <= '3') {
				$("#services_discount").val(addCommas('-5% DE DESCUENTO'));
			}else if(services_subtotal_cantidad <= '6') {
				$("#services_discount").val(addCommas('-10% DE DESCUENTO'));
			}else if(services_subtotal_cantidad >= '7') {
				$("#services_discount").val(addCommas('-15% DE DESCUENTO'));
			}
			// Services Discount Price
			if (services_subtotal_cantidad <= '3') {
				$("#services_discount_price").val(addCommas('-$ ' + (services_total_price/100)*'5'));
				var services_discount_porcentage = (services_total_price/100)*'5';

			}else if(services_subtotal_cantidad <= '6') {
				$("#services_discount_price").val(addCommas('-$ ' + (services_total_price/100)*'10'));
				var services_discount_porcentage = (services_total_price/100)*'10';

			}else if(services_subtotal_cantidad >= '7') {
				$("#services_discount_price").val(addCommas('-$ ' + (services_total_price/100)*'15'));
				var services_discount_porcentage = (services_total_price/100)*'15';
			}

			// Services Total
			$("#services_total").val(addCommas('$ ' + (services_total_price - services_discount_porcentage)));
			$("#process_total").val(addCommas('$ ' + (services_total_price - services_discount_porcentage)));

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

			function result_reload(){
				// Service Cantidad
				var cantidad_1 = parseInt($("#cantidad_service_1").val()) || null;
				var cantidad_2 = parseInt($("#cantidad_service_2").val()) || null;
				var cantidad_3 = parseInt($("#cantidad_service_3").val()) || null;
				var cantidad_4 = parseInt($("#cantidad_service_4").val()) || null;
				var cantidad_5 = parseInt($("#cantidad_service_5").val()) || null;
				var cantidad_6 = parseInt($("#cantidad_service_6").val()) || null;
				var cantidad_7 = parseInt($("#cantidad_service_7").val()) || null;
				var cantidad_8 = parseInt($("#cantidad_service_8").val()) || null;
				var services_subtotal_cantidad = cantidad_1 + cantidad_2 + cantidad_3 + cantidad_4 + cantidad_5 + cantidad_6 + cantidad_7 + cantidad_8;

				// Services total result
				var total_1 = price_1 * cantidad_1;
				var total_2 = price_2 * cantidad_2;
				var total_3 = price_3 * cantidad_3;
				var total_4 = price_4 * cantidad_4;
				var total_5 = price_5 * cantidad_5;
				var total_6 = price_6 * cantidad_6;
				var total_7 = price_7 * cantidad_7;
				var total_8 = price_8 * cantidad_8;
				var services_total_price = total_1 + total_2 + total_3 + total_4 + total_5 + total_6 + total_7 + total_8;

				$("#result_service_1").val(addCommas('$ ' + total_1));
				$("#result_service_2").val(addCommas('$ ' + total_2));
				$("#result_service_3").val(addCommas('$ ' + total_3));
				$("#result_service_4").val(addCommas('$ ' + total_4));
				$("#result_service_5").val(addCommas('$ ' + total_5));
				$("#result_service_6").val(addCommas('$ ' + total_6));
				$("#result_service_7").val(addCommas('$ ' + total_7));
				$("#result_service_8").val(addCommas('$ ' + total_8));

				// Services SubTotal Price
				$("#services_subtotal_price").val(addCommas('$ ' + services_total_price));

				// Services SubTotal Cantidad
				$("#services_subtotal_cantidad").val(addCommas('SUBTOTAL POR ' + services_subtotal_cantidad + ' ITEMS'));

				// Services Discount
				if (services_subtotal_cantidad <= '3') {
					$("#services_discount").val(addCommas('-5% DE DESCUENTO'));
				}else if(services_subtotal_cantidad <= '6') {
					$("#services_discount").val(addCommas('-10% DE DESCUENTO'));
				}else if(services_subtotal_cantidad >= '7') {
					$("#services_discount").val(addCommas('-15% DE DESCUENTO'));
				}
				// Services Discount Price
				if (services_subtotal_cantidad <= '3') {
					$("#services_discount_price").val(addCommas('-$ ' + (services_total_price/100)*'5'));
					var services_discount_porcentage = (services_total_price/100)*'5';

				}else if(services_subtotal_cantidad <= '6') {
					$("#services_discount_price").val(addCommas('-$ ' + (services_total_price/100)*'10'));
					var services_discount_porcentage = (services_total_price/100)*'10';

				}else if(services_subtotal_cantidad >= '7') {
					$("#services_discount_price").val(addCommas('-$ ' + (services_total_price/100)*'15'));
					var services_discount_porcentage = (services_total_price/100)*'15';
				}

				// Services Total
				$("#services_total").val(addCommas('$ ' + (services_total_price - services_discount_porcentage)));
				$("#process_total").val(addCommas('$ ' + (services_total_price - services_discount_porcentage)));

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
			}

		</script>
@endsection
@section('footer-class', 'servicio steps')