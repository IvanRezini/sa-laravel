<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Util\LogConsulta;

class verUltimoAsseso extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:ultimoLog';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ver ultima atividade';

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
        $ultimo = $log->ultimoAcesso();
        $this->info($ultimo);
    }

}
