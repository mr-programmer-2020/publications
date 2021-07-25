<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insertOrIgnore(
            [
                [
                    'title' => 'Sport',
                    'parent_id' => null
                ],
                [
                    'title' => 'Woman sport',
                    'parent_id' => 1
                ]
            ]
        );
    }
}
