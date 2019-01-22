<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Redirect extends Model {

	protected $guarded = [
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
	];

}
