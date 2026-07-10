<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyFresh extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'my:fresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Safely updates the database by running migrations and reloading template decks from seeds_data without deleting user data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting safe database update...');

        // 1. Run migrations safely
        $this->info('Running safe migrations...');
        $this->call('migrate');

        // 2. Seed template decks
        $this->info('Refreshing template decks from seeds_data...');
        $this->call('db:seed', [
            '--class' => 'Database\Seeders\TemplateDeckSeeder'
        ]);

        $this->info('Database successfully updated safely!');
        return 0;
    }
}
