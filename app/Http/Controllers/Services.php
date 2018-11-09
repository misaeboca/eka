<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Services extends Controller
{
	// Creación del proceso
	public function StartProcess(Request $request){

		    if ($request->input('project_type') == null) {
		    	$project_type = '0';
		    }else if ($request->input('project_type') != null) {
		    	$project_type = $request->input('project_type');
		    }
		    if ($request->input('project_name') == null) {
		    	$project_name = '0';
		    }else if ($request->input('project_name') != null) {
		    	$project_name = $request->input('project_name');
		    }
		    if ($request->input('project_state') == null) {
		    	$project_state = '0';
		    }else if ($request->input('project_state') != null) {
		    	$project_state = $request->input('project_state');
		    }
		    if ($request->input('project_income') == null) {
		    	$project_income = '0';
		    }else if ($request->input('project_income') != null) {
		    	$project_income = $request->input('project_income');
		    }
		    if ($request->input('project_date') == null) {
		    	$project_date = '0';
		    }else if ($request->input('project_date') != null) {
		    	$project_date = $request->input('project_date');
		    }

		    if ($request->input('project_state_when_one') == null) {
		    	$project_when = $request->input('project_state_when_two');
		    }else if ($request->input('project_state_when_two') == null) {
		    	$project_when = $request->input('project_state_when_one');
		    }
		    if ($project_when == null) {
		    	$project_when = '0';
		    }

		$id = DB::table('process')->insertGetId([
		    'user_name' => $request->input('user_name'),
		    'user_phone' => $request->input('user_phone'),
		    'user_email' => $request->input('user_email'),
		    'project_type' => $project_type,
		    'company_name' => $request->input('company_name'),
		    'project_name' => $project_name,
		    'project_state' => $project_state,
		    'project_state_when' => $project_when,
		    'project_income' => $project_income,
		    'project_date' => $project_date,
		    'service_1' => '0',
		    'service_2' => '0',
		    'service_3' => '0',
		    'service_4' => '0',
		    'service_5' => '0',
		    'service_6' => '0',
		    'service_7' => '0',
		    'service_8' => '0',
		]);

    	return $this->ShowAll($id);
    }

    // Update del proceso
	public function UpdateProcess(Request $request){
		$_id = $request->input('_id');

        DB::table('process')->where('id','=', $_id)->update([
        	'service_1' => $request->input('service_1'),
		    'service_2' => $request->input('service_2'),
		    'service_3' => $request->input('service_3'),
		    'service_4' => $request->input('service_4'),
		    'service_5' => $request->input('service_5'),
		    'service_6' => $request->input('service_6'),
		    'service_7' => $request->input('service_7'),
		    'service_8' => $request->input('service_8'),
        ]);
        // return view('steps/paso-3');

        return $this->ShowServices($_id);
    }

	// Muestra todos los servicios en paso-2
    public function ShowAll($id){

        $services = DB::table('service')->get();

    	return view('steps/paso-2', ['id' => $id, 'services' => $services]);

    }

    // Muestra los servicios en paso-3
    public function ShowServices($id){

        $services = DB::table('process')->where('id','=', $id)->get();
    	error_log($id);

    	return view('steps/paso-3', ['id' => $id, 'services' => $services]);

    }

    // Envía el correo
    public function SendProccesMail(Request $request){
    	$_id = $request->input('_id');
        $services = DB::table('process')->where('id','=', $_id)->get();

	    $process_total = $request->input('process_total');
	    $service_1 = $request->input('services_cantidad_1');
	    $service_2 = $request->input('services_cantidad_2');
	    $service_3 = $request->input('services_cantidad_3');
	    $service_4 = $request->input('services_cantidad_4');
	    $service_5 = $request->input('services_cantidad_5');
	    $service_6 = $request->input('services_cantidad_6');
	    $service_7 = $request->input('services_cantidad_7');
	    $service_8 = $request->input('services_cantidad_8');

        $datos = ['id' => $_id, 
        'services' => $services, 
        'process_total' => $process_total,
    	'service_1' => $service_1,
	    'service_2' => $service_2,
		'service_3' => $service_3,
		'service_4' => $service_4,
		'service_5' => $service_5,
		'service_6' => $service_6,
		'service_7' => $service_7,
		'service_8' => $service_8];

       	$emails = ['wizerlink.leads@gmail.com', 'hello@ekastudio.net', 'kat@ekastudio.net'];

		$processEmail = DB::table('process')->where('id','=', $_id)->value('user_email');
	   
	    Mail::send('mail-template.mail', $datos, function($message) use ($emails) {
	        $message->to($emails);
	        $message->subject('Formulario - EkaStudio');
	    });
	    Mail::send('mail-template.client-mail', $datos, function($message) use ($processEmail) {
	        $message->to($processEmail);
	        $message->subject('Formulario - EkaStudio');
	    });

    	$delete = DB::table('process')->where('id', '=', $_id)->delete();
		return redirect('/thanks');
    	// return $this->EndProcess($_id);

    }

    // Borrar servicios
	public function EndProcess(Request $request){
		$_id = $request->input('_id');

		$delete = DB::table('process')->where('id', '=', $_id)->delete();

    	return redirect('/thanks');
    }
}
