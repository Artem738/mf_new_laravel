<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgressTableSeeder extends Seeder
{
    public function run()
    {
        $progressRecords = [

        ];

        foreach ($progressRecords as $record) {
            DB::table('progress')->updateOrInsert(
                [
                    'flashcard_id' => $record['flashcard_id'],
                    'user_id' => $record['user_id'],
                ],
                $record
            );
        }
    }
}

