<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
          [
              'name'=>"One",
          ],
          [
              'name'=>"Two",
          ],
          [
              'name'=>"Three",
          ]


        ];
        DB::table('classes')->insert($data);
    }
}
