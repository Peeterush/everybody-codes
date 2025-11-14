<?php

namespace App\Console\Commands;

use App\Models\Camera;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;

class SearchCamera extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'camera:search {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Search for a camera by name';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Camera::where('name', 'like', '%' . $this->argument('name') . '%')
            ->orWhere('number', $this->argument('name'))
            ->get()
            ->each(function ($camera) {
                $this->info(
                    Collection::make([
                        $camera->number,
                        $camera->code . ' ' . $camera->name,
                        $camera->latitude,
                        $camera->longitude
                    ])->join(' | ')
                );
            });
    }
}
