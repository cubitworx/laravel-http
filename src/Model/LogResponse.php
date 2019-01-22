<?php

namespace Cubitworx\Laravel\Http\Model;

use Illuminate\Database\Eloquent\Model;

class LogResponse extends Model {

	protected $guarded = [
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
	];

}
