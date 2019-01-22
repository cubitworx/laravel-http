<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogResponsesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('log_responses', function (Blueprint $table) {
			$table->increments('id');

			$table->text('details');
			$table->string('ip_address')->nullable();
			$table->text('referer');
			$table->string('status_code', 10);
			$table->text('url');
			$table->text('user_agent');

			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('log_responses');
	}

}
