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

	<div class="container">
		<div class="row col">
			<form class="" action="{{ url('start-process') }}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

			    <div class="col s12  s12 m12 center">
			    	<h5><b>¿CUÁL ES TU NOMBRE COMPLETO? *</b></h5>
					<p>DE PREFERENCIA COMPLETO :)</p>
					<input type="text" name="user_name" class="validate" required>
					<span class="helper-text" data-error="Este campo es obligatorio" data-success=""></span>
			    </div>

			    <div class="col s12 s12 m12 l6  center ">
			     	<br><br>
			    	<h5><b>TELÉFONO *</b></h5>
					<p>SI, PUEDE QUE TE MANDEMOS WHATSAPP</p>
					<input type="text" name="user_phone" class="validate" required>
					<span class="helper-text" data-error="Este campo es obligatorio" data-success=""></span>
			    </div>

			    <div class="col s12 s12 m12 l6 center">
			     	<br><br>
			    	<h5><b>MAIL *</b></h5>
					<p>TU NOMBRE, O EL DE TU EMPRESA</p>
					<input type="email" name="user_email" class="validate" required>
					<span class="helper-text" data-error="Este campo es obligatorio" data-success=""></span>
			    </div>

			    <div class="col s12 s12 m12 center">
			     	<br><br><br>
			    	<h5><b>¿PARA QUIÉN ES EL PROYECTO?</b><br><br></h5>
			    	<br><br>
					<div class="row">
					    <div class="col s12 m4 img_person">
					    	<img src="{{ URL::asset('images/pasos/personas-1.svg') }}" alt="personas" width="100" height="100">
							<p class="center">PERSONAL</p>
							<div class="checkbox">
								<p>
							      <label>
							        <input type="checkbox" name="project_type" value="PERSONAL" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							</div>
					    </div>
					    <div class="col s12 m4 ">
					    	<img src="{{ URL::asset('images/pasos/personas-2.svg') }}" alt="personas" width="100" height="100px">
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
					    <div class="col s12 m4 img_person">
					    	<img src="{{ URL::asset('images/pasos/personas-3.svg') }}" alt="personas" width="100px" height="100px">
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

			    <div class="col s12 s12 m12 center">
			     	<br><br>
			    	<h5><b>¿CUÁL ES EL NOMBRE DE TU EMPRESA? *</b></h5>
					<p>PARA ENVIARTE LA INFORMACIÓN</p>
					<input type="text" name="company_name" class="validate" required>
					<span class="helper-text" data-error="Este campo es obligatorio" data-success=""></span>
			    </div>
			    <div class="col s12 s12 m12 center">
			     	<br><br>
			    	<h5><b>¿CUÁL ES EL NOMBRE DE TU PROYECTO?</b></h5>
					<p>EN CASO QUE NO SEA IGUAL A TU NOMBRE O TU EMPRESA. Y SI ES EL MISMO... PUES ESCRÍBELO DE NUEVO</p>
					<input type="text" name="project_name">
			    </div>

			    <div class="col s12 s12 m12 center">
			     	<br><br>
			    	<h5><b>¿TU PROYECTO ESTÁ ACTUALMENTE EN MARCHA?</b></h5>
					<p>EN CASO QUE NO SEA IGUAL A TU NOMBRE O TU EMPRESA. Y SI ES EL MISMO... PUES ESCRÍBELO DE NUEVO</p>
					
			    </div>
			    <br><br>
			    <div class="col s12  m6">
			    	<br><br>
			    	<div class="col s12 m12  paso-inputs-checkboxes">
						<div class="paso-inputs-checkboxes">
							<p>
						      <label>

						       <input name="project_state" value="YA TIENE TIEMPO FUNCIONANDO" type="checkbox" class="filled-in" />
						        <span class="black-text" style="padding-left: 50px;padding-top: 5px">YA TIENE TIEMPO FUNCIONANDO</span>
						      </label>
						    </p>
						</div>
			    	</div>

			    	<div class="col s12 m12">
			    		<br>
			    		<div class="col s6 m6">
			    			<p>¿CÚANTO TIEMPO?</p>
			    		</div>
			    		 <div class="col s6 m6">
			    		 	<input name="project_state_when_one" type="text">
			    		 </div>
			    	</div>
			    </div>

			    <div class="col s12 m6">
			    	<br><br>
			    	<div class="col s12 m12  paso-inputs-checkboxes">
						<div class="paso-inputs-checkboxes">
							<p>
						      <label>

						       <input name="project_state" value="YA TIENE TIEMPO FUNCIONANDO" type="checkbox" class="filled-in" />
						        <span class="black-text" style="padding-left: 50px;padding-top: 5px">NO, PERO PRONTO LO LANZAREMOS</span>
						      </label>
						    </p>
						</div>
			    	</div>

			    	<div class="col s12 m12">
			    		<br>
			    		<div class="col s6 m6">
			    			<p>¿CÚANDO?</p>
			    		</div>
			    		<div class="col s6 m6">
			    		 	<input name="project_state_when_two" type="text">
			    		</div>
			    	</div>
			    </div>

			    <div class="col s12 center ">
			     	<br><br>
			    	<h5><b>¿CUÁL ES LA PRINCIPAL FUENTE DE INGRESO?</b></h5>

			    	<div class="col s12 m12 l6 venta">
			    		<div class="paso-inputs-checkboxes">
							<p>
						      <label>
						        <input type="checkbox" name="project_income" value="VENTA ONLINE" class="filled-in" />
						        <span class="black-text mobile" style="padding-top: 5px; padding-left: 50px">VENTA ONLINE</span>
						      </label>
						    </p>
						</div>
			    	</div>
			    	<div class="col s12 m12 l6 venta">
			    		<div class="paso-inputs-checkboxes">
							<p>
						      <label>
						        <input type="checkbox" name="project_income" value="VENTA OFFLINE" class="filled-in" />
						        <span class="black-text mobile" style="padding-top: 5px; padding-left: 50px"> VENTA DE MOSTRADOR</span>
						      </label>
						    </p>
						</div>
			    	</div>
			    </div>

			    <div class="col s12 center">
			     	<br><br>
			    	<h5><b>¿QUE TAN URGENTE ES TU PROYECTO?</b></h5>
			    	<div class="col s12 m4 16 venta">
			    		<div class="paso-inputs-checkboxes">
							<p>
						      <label>
						        <input type="checkbox" name="project_date" value="2 SEMANAS" class="filled-in" />
						        <span class="black-text" style="padding-top: 5px; padding-left: 50px">2 SEMANAS</span>
						      </label>
						    </p>
						</div>
			    	</div>
			    	<div class="col s12 m4 16 venta">
			    		<div class="paso-inputs-checkboxes">
							<p>
						      <label>
						        <input type="checkbox" name="project_date" value="3 SEMANAS" class="filled-in" />
						        <span class="black-text" style="padding-top: 5px; padding-left: 50px">3 SEMANAS</span>
						      </label>
						    </p>
						</div>
			    	</div>
			    	<div class="col s12 m4 16 venta">
			    		<div class="paso-inputs-checkboxes">
							<p>
						      <label>
						        <input type="checkbox" name="project_date" value="3 SEMANAS" class="filled-in" />
						        <span class="black-text" style="padding-top: 5px; padding-left: 50px">4 SEMANAS O MÁS</span>
						      </label>
						    </p>
						</div>
			    	</div>
			    </div>

			    <div class="col s12 center">
			    	<br><br>
			    	<button class="btn-custom">REGRESAR</button>
			    	<button class="btn-custom">CONTINUAR</button>
			    </div>
			   

				</form>

				<div class="col s1 m1"></div>
		</div>
	</div>


@endsection
@section('footer-class', 'servicio steps')