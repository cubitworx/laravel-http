<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestAbortCommand extends Command {

	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'test:abort';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Test response logging functionality';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle() {
		abort(404);
	}

}
