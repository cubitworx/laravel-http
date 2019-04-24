<?php

namespace Cubitworx\Laravel\Http\Exceptions;

use Cubitworx\Laravel\Http\Support\HttpResponse;
use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class Handler {

	public static function report(Exception $exception) {
		if ($exception instanceof HttpExceptionInterface) {
			// Handle any HTTP exception
			HttpResponse::log($exception->getMessage(), $exception->getStatusCode());
		} else {
			// Anything not already captured should be logged as a 500 error
			HttpResponse::log($exception->getMessage(), 500);
		}
	}

}
