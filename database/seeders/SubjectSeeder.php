<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'=>"Bangla",
            ],
            [
                'name'=>"English",
            ],
            [
                'name'=>"Math",
            ]


          ];
          DB::table('subjects')->insert($data);
    }
}
