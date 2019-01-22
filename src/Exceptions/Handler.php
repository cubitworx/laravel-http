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
		} elseif ($exception instanceof ValidationException) {
			// Don't need to log validation exceptions - problematic fields are displayed to user on the screen
		} elseif ($exception instanceof AuthenticationException) {
			// Don't need to log because user will get authentication error message on screen
		} else {
			// Anything not already captured should be logged as a 500 error
			HttpResponse::log($exception->getMessage(), 500);
		}
	}

}
