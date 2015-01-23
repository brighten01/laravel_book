<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class AssignUsers extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'users:assign';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		//
        echo "hello command";
		print_r($this->argument());
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
      
		  return array(
            array('file', InputOption::VALUE_OPTIONAL, 'Compress an input css file', null),
            array('name', InputOption::VALUE_OPTIONAL, 'Compress an input css file', null),
        );
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{


        return array(
            array('file', '-f', InputOption::VALUE_OPTIONAL, 'Compress an input css file', null),
            array('name', '-fn', InputOption::VALUE_OPTIONAL, 'Compress an input css file', null),
        );

    }

}
