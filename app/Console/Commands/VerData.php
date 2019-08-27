<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Util\LogConsulta;

class VerData extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:verdata {formato? : Formato da data}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Possibilita ver a data atual da aplicaçâo';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $caminho = 'storage/app';
        $log = new LogConsulta($caminho);
        $data = $log->registrar();
        $this->info($data);
    }

}
