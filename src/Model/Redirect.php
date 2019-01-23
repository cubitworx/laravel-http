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

	public static function boot() {
		parent::boot();

		static::saving(function($model)  {
			$model->url_hash = $model->url_hash ?? md5($model->url);
		});
	}

}
