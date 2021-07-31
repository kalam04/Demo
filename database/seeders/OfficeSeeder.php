<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeSeeder extends Seeder
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
                'office_name' => 'Dhaka',
                'office_address' => 'Polibiddut, Saver, Dhaka',
                'image'=>null,
            ],
            [
                'office_name' => 'Savar',
                'office_address' => 'Savar Bazer Road, Savar, Dhaka',
                'image'=>null,
            ],
            [
                'office_name' => 'Motijheel',
                'office_address' => '1/1 Motijheel, Dhaka 1200',
                'image'=>null,
            ],


        ];
        DB::table('offices')->insert($data);

    }
}
