<?php

namespace App\Jobs;

use App\Vehicle;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use App\Services\VeiculosMaringaService;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UpdatePortal implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 2;

    private $vehiclesId;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($vehiclesId)
    {
        $this->vehiclesId = $vehiclesId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $vehicles = Vehicle::find($this->vehiclesId);
        $veiculosMaringa = new VeiculosMaringaService();

        $veiculosMaringa->update($vehicles);
    }
}