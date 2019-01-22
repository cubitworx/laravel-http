<?php

namespace Cubitworx\Laravel\Http\Support;

use Cubitworx\Laravel\Http\Model\LogResponse;
use Illuminate\Support\Facades\App;

class HttpResponse {

	public static function log($details, $code) {
		// No need to log response when running console command
		if (App::runningInConsole() && !App::runningUnitTests())
			return;

		$request = request();

		(new LogResponse([
			'details' =>  $details,
			'ip_address' => $request->ip(),
			'referer' => $request->headers->get('referer') ?? url()->previous(),
			'status_code' =>  $code,
			'url' => $request->server('REQUEST_URI'), // Don't use request()->fullUrl() because Laravel sorts the query string parameters by the name
			'user_agent' => $request->header('User-Agent'),
		]))->save();
	}

}
