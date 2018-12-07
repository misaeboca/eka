@extends('layouts.app')
@section('title', '')
@section('content')

	<section id="mensaje">
		<div class="row">
		      <div class="col s8 offset-s2">
		      		<span class="flow-text " style="font-size:20px">
		      			<b>QUEREMOS ESCUCHARTE<br>-</b>
		      		</span>
		      </div>
    	</div>
			<div class="row">
				<div class="row">
					<div class="col s12 offset-s2">
						<h5>
						 Déjanos tus datos e inmediatamente te contactaremos<br>
						</h5>
						<br><br>
						<div class="col s4 m4 divider "></div>
					</div>
			</div>
		</div>

	<div class="container">
		<div class="row">
			<form class="" action="{{ url('send_mail_contact') }}" method="post">

		    <div class="col s12 s6 m6 ">
		    	<b>NOMBRE</b>
		    	<input id="nombre" type="text" name='nombre' type="text" class="validate form-text">
		    </div>
		     <div class="col s12 s6 m6 ">
		    	<b>APELLIDO</b>
		    	<input id="apellido" type="text" name='apellido' type="text" class="validate form-text">
		    </div>

		    <div class="col s12 s3 m3 ">
		    	<br>
		    	<b>EDAD</b>
		    	<input id="edad" type="text" name='edad' type="text" class="validate form-text">
		    </div>
		    <div class="col s12 s3 m3 ">
		    	<br>
		    	<b>CIUDAD</b>
		    	<input id="ciudad" type="text" name='ciudad' type="text" class="validate form-text">
		    </div>
		    <div class="col s12 s6 m6 ">
		    	<br>
		    	<b>CORREO</b>
		   		<input id="email" type="text" name='email' type="text" class="validate form-text">
		  	</div>

		  	<div class="col s12 s12 m12 ">
		  		<br>
		    	<b>TU MENSAJE</b>
				<textarea  class="form-text materialize-textarea textarea validate" id="mensaje" type="text-area"  name="mensaje" required></textarea>
		  	</div>
		  	<div class="col s12 s12 m12 center">
		    	<br>
		   		<button class="btn red">ENVIAR</button>
		  	</div>

			</form>

			<div class="col s1 m1"></div>
		</div>
	</div>
</section>

	<section id="mensaje2">
			<div class="row">
				<div class="row">
					<div class="col s12  m12 center" style="font-size: 20px;">
				    	<b>SUIGUENOS EN NUESTRAS REDES SOCIALES<br>
						-</b>
				    </div>
				    <div class="col s12  m12 center" style="font-size: 13px;">
				    	<b>ENVIANOS TUS PREGUNTAS A HELLO@EKASTUDIO.NET
						</b>
				    </div>
				    <div class="col s12  m12 center " style="font-size: 13px;">
				    	<b>
				    		<div class="col s12 m3"></div>
						    <div class="col s12 m6 "><p>
						    	<div class="col s12 m4 redes_soc_r" style="text-align: right;"><p>FACEBOOK</p></div>
						    	<div class="col s12 m4 "><p>INSTAGRAN</p></div>
						    	<div class="col s12 m4 redes_soc_l" style="text-align: left;"><p>LINKEIN</p></div>
						    </p></div>
						    <div class="col s12 m3 "></div>
						</b>
				    </div>
				</div>
	</div>		
	<br><br><br><br>	
	<div class="row">
		<div class="col s12 m12">
			<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120767.53968708712!2d-99.31060594644785!3d18.932030844196817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdde499b22afad%3A0xc9b6bcb5b9b790a1!2sCuernavaca%2C+Mor.%2C+M%C3%A9xico!5e0!3m2!1ses!2sve!4v1542141679384" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>

@endsection
@section('footer-class', 'index')

