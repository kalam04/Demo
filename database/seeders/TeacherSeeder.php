<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
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
                'name'=>"Mr. Abdur Rahim",
            ],
            [
                'name'=>"Mr. Abdul Kuddus",
            ],
            [
                'name'=>"Mr. Abdul Rhaman",
            ]


          ];
          DB::table('teachers')->insert($data);
    }
}
