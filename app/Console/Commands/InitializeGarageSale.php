<?php namespace GarageSale\Console\Commands;

use GarageSale\Models\GarageSale;
use GarageSale\Repositories\GarageSaleRepository;
use Illuminate\Console\Command;
use Illuminate\Translation\Translator;

class InitializeGarageSale extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'garage-sale:initialize';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Initialize a garage sale.';

	/**
	 * @var Translator
	 */
	private $translator;

	/**
	 * @var GarageSaleRepository
	 */
	private $garageSaleRepository;

	/**
	 * Create a new command instance.
	 *
	 * @param Translator $translator
	 * @param GarageSaleRepository $garageSaleRepository
	 */
	public function __construct(Translator $translator, GarageSaleRepository $garageSaleRepository)
	{
		parent::__construct();

		$this->translator = $translator;
		$this->garageSaleRepository = $garageSaleRepository;
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$name = $this->ask($this->translator->get('garage-sale.ask_name'));

		$garageSale = GarageSale::initialize($name);

		if ($this->garageSaleRepository->save($garageSale))
			$this->info($this->translator->get('garage-sale.initialization_success'));
		else
			$this->error($this->translator->get('garage-sale.initialization_error'));
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [];
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [];
	}

}
