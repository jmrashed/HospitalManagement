<?php

class InstallController extends \BaseController {

	var $data = array();
	var $panelInit ;

	public function __construct(){

	}

	public function index($method = "main")
	{
		try{
			if(Schema::hasTable('settings')){
				$testInstalled = settings::where('fieldName','finishInstall')->first();
				if($testInstalled->count() > 0){
					if($testInstalled->fieldValue == 1){
						exit;
					}
				}
			}
		}catch(Exception $e){  }

		$this->data['currStep'] = "welcome";
		return View::make('install', $this->data);
	}

	public function proceed()
	{
		if(Input::get('nextStep') == "1"){
			$this->data['currStep'] = "1";
			$this->data['nextStep'] = "2";

			try{
				DB::connection()->getDatabaseName();
			}catch(Exception $e){
				$this->data['dbError'] = $e->getMessage();
				$this->data['nextStep'] = "1";
			}

			$testData = uniqid();

			@file_put_contents("uploads/assignments/test", $testData);
			@file_put_contents("uploads/books/test", $testData);
			@file_put_contents("uploads/cache/test", $testData);
			@file_put_contents("uploads/media/test", $testData);
			@file_put_contents("uploads/profile/test", $testData);
			@file_put_contents("uploads/studyMaterial/test", $testData);
			@file_put_contents("uploads/assignmentsAnswers/test", $testData);

			@file_put_contents("app/storage/cache/test", $testData);
			@file_put_contents("app/storage/logs/test", $testData);
			@file_put_contents("app/storage/meta/test", $testData);
			@file_put_contents("app/storage/sessions/test", $testData);
			@file_put_contents("app/storage/views/test", $testData);

			if(@file_get_contents("uploads/assignments/test") != $testData){
				$this->data['perrors'][] = "uploads/assignments";
				$this->data['nextStep'] = "1";
			}else{
				$this->data['success'][] = "uploads/assignments";
			}

			if(@file_get_contents("uploads/books/test") != $testData){
				$this->data['perrors'][] = "uploads/books";
				$this->data['nextStep'] = "1";
			}else{
				$this->data['success'][] = "uploads/books";
			}

			if(@file_get_contents("uploads/cache/test") != $testData){
				$this->data['perrors'][] = "uploads/cache";
				$this->data['nextStep'] = "1";
			}else{
				$this->data['success'][] = "uploads/cache";
			}

			if(@file_get_contents("uploads/media/test") != $testData){
				$this->data['perrors'][] = "uploads/media";
				$this->data['nextStep'] = "1";
			}else{
				$this->data['success'][] = "uploads/media";
			}

			if(@file_get_contents("uploads/profile/test") != $testData){
				$this->data['perrors'][] = "uploads/profile";
				$this->data['nextStep'] = "1";
			}else{
				$this->data['success'][] = "uploads/profile";
			}

			if(@file_get_contents("uploads/studyMaterial/test") != $testData){
				$this->data['perrors'][] = "uploads/studyMaterial";
				$this->data['nextStep'] = "1";
			}else{
				$this->data['success'][] = "uploads/studyMaterial";
			}

			if(@file_get_contents("uploads/assignmentsAnswers/test") != $testData){
				$this->data['perrors'][] = "uploads/assignmentsAnswers";
				$this->data['nextStep'] = "1";
			}else{
				$this->data['success'][] = "uploads/assignmentsAnswers";
			}

			if(@file_get_contents("app/storage/cache/test") != $testData){
				$this->data['perrors'][] = "app/storage/cache";
				$this->data['nextStep'] = "1";
			}else{
				$this->data['success'][] = "app/storage/cache";
			}

			if(@file_get_contents("app/storage/logs/test") != $testData){
				$this->data['perrors'][] = "app/storage/logs";
				$this->data['nextStep'] = "1";
			}else{
				$this->data['success'][] = "app/storage/logs";
			}

			if(@file_get_contents("app/storage/meta/test") != $testData){
				$this->data['perrors'][] = "app/storage/meta";
				$this->data['nextStep'] = "1";
			}else{
				$this->data['success'][] = "app/storage/meta";
			}

			if(@file_get_contents("app/storage/sessions/test") != $testData){
				$this->data['perrors'][] = "app/storage/sessions";
				$this->data['nextStep'] = "1";
			}else{
				$this->data['success'][] = "app/storage/sessions";
			}

			if(@file_get_contents("app/storage/views/test") != $testData){
				$this->data['perrors'][] = "app/storage/views";
				$this->data['nextStep'] = "1";
			}else{
				$this->data['success'][] = "app/storage/views";
			}

		}

		if(Input::get('nextStep') == "2"){
			$this->data['currStep'] = "2";
			$this->data['nextStep'] = "3";
		}

		if(Input::get('nextStep') == "3"){
			$this->data['currStep'] = "3";
			$this->data['nextStep'] = "4";

			if(Input::get('fullName') == "" || Input::get('username') == "" || Input::get('email') == "" || Input::get('password') == "" || Input::get('siteTitle') == "" || Input::get('systemEmail') == ""){
				$this->data['installErrors'][] = "Please fill in all required fields";
				$this->data['currStep'] = "2";
				$this->data['nextStep'] = "3";
			}
			if(Input::get('password') != Input::get('repassword')){
				$this->data['installErrors'][] = "Password & repassword isn't identical";
				$this->data['currStep'] = "2";
				$this->data['nextStep'] = "3";
			}
			if (!filter_var(Input::get('email'), FILTER_VALIDATE_EMAIL) AND Input::get('email') != "") {
				$this->data['installErrors'][] = "invalid e-mail address";
				$this->data['currStep'] = "2";
				$this->data['nextStep'] = "3";
			}

			if(Input::get('cpc') == ""){
				$this->data['installErrors'][] = "Purchase code is missing";
				$this->data['currStep'] = "2";
				$this->data['nextStep'] = "3";
			}

			if(Input::get('yearTitle') == ""){
				$this->data['installErrors'][] = "You must type default academic year";
				$this->data['currStep'] = "2";
				$this->data['nextStep'] = "3";
			}

			if(!isset($this->data['installErrors'])){
				file_put_contents('app/storage/meta/lc',Input::get('cpc'));
				if($this->sbApi() == "err"){
					@unlink('app/storage/meta/lc');
					$this->data['installErrors'][] = "Purchase code is missing";
					$this->data['currStep'] = "2";
					$this->data['nextStep'] = "3";
				}
			}

			if(!isset($this->data['installErrors'])){
				$check = Schema::hasTable('users');
				if(!$check){
					DB::unprepared(file_get_contents('app/storage/dbsql'));
				}

				$User = new User();
				$User->username = Input::get('username');
				$User->email = Input::get('email');
				$User->fullName = Input::get('fullName');
				$User->password = Hash::make(Input::get('password'));
				$User->role = "admin";
				$User->save();

				$settings = settings::where('fieldName','siteTitle')->first();
				$settings->fieldValue = Input::get('siteTitle');
				$settings->save();

				$settings = settings::where('fieldName','systemEmail')->first();
				$settings->fieldValue = Input::get('systemEmail');
				$settings->save();

				$settings = new settings();
				$settings->fieldName = 'finishInstall';
				$settings->fieldValue = '1';
				$settings->save();

				$academicYear = new academicYear();
				$academicYear->yearTitle = Input::get('yearTitle');
				$academicYear->isDefault = "1";
				$academicYear->save();
			}
		}

		return View::make('install', $this->data);
	}

	public function sbApi(){
		$url = "http://solutionsbricks.com/license";
		$pco = @file_get_contents('app/storage/meta/lc');
		if($pco == false){
			return "err";
		}
		$data = array("p"=>1,"n"=>$pco,"u"=>Request::url());
		if(function_exists('curl_init')){
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			$output = curl_exec($ch);
			curl_close($ch);
		}elseif(function_exists('file_get_contents')){
			$postdata = http_build_query($data);

			$opts = array('http' =>
			    array(
			        'method'  => 'POST',
			        'header'  => 'Content-type: application/x-www-form-urlencoded',
			        'content' => $postdata
			    )
			);

			$context  = stream_context_create($opts);

			$output = file_get_contents($url, false, $context);
		}else{
			$stream = fopen($url, 'r', false, stream_context_create(array(
		          'http' => array(
		              'method' => 'POST',
		              'header' => 'Content-type: application/x-www-form-urlencoded',
		              'content' => http_build_query($data)
		          )
		      )));

		      $output = stream_get_contents($stream);
		      fclose($stream);
		}
		if($output == "err"){
			@unlink('app/storage/meta/lc');
		}
		return $output;
	}

}
