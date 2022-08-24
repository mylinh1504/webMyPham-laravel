<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =
        [
            [
                'name'=>'Nước Hoa Nữ',
                'url'=>'nuoc-hoa-nu',
                'thumb'=>'/storage/nuochoatinhyeu.png',
                'sort_by'=>1,
                'active' =>1
            ],
           
           
        ];
        foreach($data as $value)
        {
            \App\Models\User::create($value);
        }
    }
}
