<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insertOrIgnore(
            [
                [
                    'full_name' => 'Faisal',
                    'created_at' => now()
                ],
                [
                    'full_name' => 'Egor',
                    'created_at' => now()
                ]
            ]
        );
    }
}
