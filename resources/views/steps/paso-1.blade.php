@extends('layouts.app')
@section('title', '| Paso_1')
@section('content')

		<div id="steps">
			<div class="step one active">1</div>
			<div class="step-divider one"></div>
			<div class="step two">2</div>
			<div class="step-divider two"></div>
			<div class="step three">3</div>
			<p>PASO 1 DE 3</p>
		</div>

		<section id="form-paso-one">
			<form action="{{ url('start-process') }}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="paso-input">
					<h5>¿CUÁL ES TU NOMBRE COMPLETO? *</h5>
					<p>DE PREFERENCIA COMPLETO :)</p>
					<input type="text" name="user_name" class="validate" required>
					<span class="helper-text" data-error="Este campo es obligatorio" data-success=""></span>
				</div>
				<div class="row">
					<div class="paso-input col s12 m12 l6">
						<h5>TELÉFONO *</h5>
						<p>SI, PUEDE QUE TE MANDEMOS WHATSAPP</p>
						<input type="text" name="user_phone" class="validate" required>
						<span class="helper-text" data-error="Este campo es obligatorio" data-success=""></span>
					</div>
					<div class="paso-input col s12 m12 l6">
						<h5>MAIL *</h5>
						<p>PARA ENVIARTE LA INFORMACIÓN</p>
						<input type="email" name="user_email" class="validate" required>
						<span class="helper-text" data-error="Este campo es obligatorio" data-success=""></span>
					</div>
				</div>
				<div id="paraquien">
					<h5>¿PARA QUIÉN ES EL PROYECTO?</h5>
					<div class="row">
						<div class="col s6 m4">
							<img src="{{ URL::asset('images/pasos/personas-1.svg') }}" alt="personas">
							<p>PERSONAL</p>
							<div class="checkbox">
								<p>
							      <label>
							        <input type="checkbox" name="project_type" value="PERSONAL" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							</div>
						</div>
						<div class="col s6 m4">
							<img src="{{ URL::asset('images/pasos/personas-2.svg') }}" alt="personas">
							<p>STARTUP</p>
							<div class="checkbox">
								<p>
							      <label>
							        <input type="checkbox" name="project_type" value="STARTUP" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							</div>
						</div>
						<div class="col s12 m4">
							<img src="{{ URL::asset('images/pasos/personas-3.svg') }}" alt="personas">
							<p>EMPRESA</p>
							<div class="checkbox">
								<p>
							      <label>
							        <input type="checkbox" name="project_type" value="EMPRESA" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							</div>
						</div>
					</div>
				</div>
				<div class="paso-input">
					<h5>¿CUÁL ES EL NOMBRE DE TU EMPRESA? *</h5>
					<p>EL DE TU EMPRESA</p>
					<input type="text" name="company_name" class="validate" required>
					<span class="helper-text" data-error="Este campo es obligatorio" data-success=""></span>
				</div>
				<div class="paso-input">
					<h5>¿CUÁL ES EL NOMBRE DE TU PROYECTO?</h5>
					<p>EN CASO QUE NO SEA IGUAL AL DE TU EMPRESA. Y SI ES EL MISMO... PUES ESCRÍBELO DE NUEVO</p>
					<input type="text" name="project_name">
				</div>
				<div class="paso-input">
					<h5>¿TU PROYECTO ESTÁ ACTUALMENTE EN MARCHA?</h5>
					<div class="row">
						<div class="col s12 m12 l6">
							<div class="paso-inputs-checkboxes">
								<p>
							      <label>
							        <input name="project_state" value="YA TIENE TIEMPO FUNCIONANDO" type="checkbox" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							    <p>YA TIENE TIEMPO FUNCIONANDO</p>
							</div>
							<div class="paso-inputs-checkboxes">
							    <p>¿CÚANTO TIEMPO?</p>
								<input name="project_state_when_one" type="text">
							</div>
						</div>
						<div class="col s12 m12 l6">
							<div class="paso-inputs-checkboxes">
								<p>
							      <label>
							        <input name="project_state" value="NO; PERO PRONTO LO LANZAREMOS" type="checkbox" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							    <p>NO, PERO PRONTO LO LANZAREMOS</p>
							</div>
							<div class="paso-inputs-checkboxes">
							    <p>¿CÚANDO?</p>
								<input name="project_state_when_two" type="text">
							</div>
						</div>
					</div>
				</div>
				<div class="paso-input more-margin">
					<h5>¿CUÁL ES LA PRINCIPAL FUENTE DE INGRESO?</h5>
					<div class="row">
						<div class="col m6">
							<div class="paso-inputs-checkboxes">
								<p>
							      <label>
							        <input type="checkbox" name="project_income" value="VENTA ONLINE" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							    <p>VENTA ONLINE</p>
							</div>
						</div>
						<div class="col m6">
							<div class="paso-inputs-checkboxes">
								<p>
							      <label>
							        <input type="checkbox" name="project_income" value="VENTA OFFLINE" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							    <p>VENTA OFFLINE</p>
							</div>
						</div>
					</div>
				</div>
				<div class="paso-input more-margin">
					<h5>¿QUE TAN URGENTE ES TU PROYECTO?</h5>
					<div class="row">
						<div class="col s12 m12 l4">
							<div class="paso-inputs-checkboxes">
								<p>
							      <label>
							        <input type="checkbox" name="project_date" value="2 SEMANAS" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							    <p>2 SEMANAS</p>
							</div>
						</div>
						<div class="col s12 m12 l4">
							<div class="paso-inputs-checkboxes">
								<p>
							      <label>
							        <input type="checkbox" name="project_date" value="3 SEMANAS" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							    <p>3 SEMANAS</p>
							</div>
						</div>
						<div class="col s12 m12 l4">
							<div class="paso-inputs-checkboxes">
								<p>
							      <label>
							        <input type="checkbox" name="project_date" value="4 SEMANAS O MÁS" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							    <p>4 SEMANAS O MÁS</p>
							</div>
						</div>
					</div>
				</div>
				<div class="left-align paso-input more-margin" id="obligatorio">
					<h5>* Obligatorio</h5>
				</div>
				<div id="btns">
					<div class="row">
						<div class="col s6 m6">
							{{-- <button class="btn-custom-btn">REGRESAR</button> --}}
							<a href="{{ url('/') }}" class="btn-custom">REGRESAR</a>
						</div>
						<div class="col s6 m6">
							<button class="btn-custom-btn">CONTINUAR</button>
							{{-- <a href="{{ url('paso-2') }}" class="btn-custom">CONTINUAR</a> --}}
						</div>
					</div>
				</div>

			</form>
		</section>

@endsection
@section('footer-class', 'servicio steps')