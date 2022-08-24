<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'name'=>'Nước Hoa',
                'parent_id'=>0,
                'description'=>'Nước hoa tình yêu',
                'content'=>' với nhiều dòng sản phẩm nước hoa cao cấp',
                'active'=>1,
            ],
            [
                'name'=>'Thương hiệu',
                'parent_id'=>0,
                'description'=>'Với nhiều thương hiệu uy tín, chất lượng',
                'content'=>'Afnan, Armaf, calvin, Klein... và nhiều dòng sản phẩm nước hoa ',
                'active'=>1,
            ],
            [
                'name'=>'Blog',
                'parent_id'=>0,
                'description'=>'Nước hoa Unisex',
                'content'=>'Afnan, Armaf, calvin, Klein',
                'active'=>1,
            ]

        ];
        foreach($data as $value)
        {
            \App\Models\Menus::create($value);
        }
    }
}
