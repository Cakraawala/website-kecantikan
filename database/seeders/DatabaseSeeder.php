<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CategoryProduct;
use App\Models\Products;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(IndoRegionSeeder::class);

        CategoryProduct::create([
            'nm_category' => 'astaga putri'
        ]);
        CategoryProduct::create([
            'nm_category' => 'Kamu cantik'
        ]);
        CategoryProduct::create([
            'nm_category' => 'banget'
        ]);

        Products::create([
            'nm_products' => 'apa aja',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 1,
            'suppliers' => 'asdasd',
            'address' => 'asdasdas',

        ]);

        User::create([
            'name' => 'angger',
            'username' => 'anggercakra',
            'no_wa' => '081231231',
            'email' => 'dimasanjaymabar@gmail.com',
            'tgl_lhr' => '2022-10-30',
            'jk' => 'L',
            'province_id' => 32,
            'regency_id' =>3201,
            'district_id' => 3201180,
            'code_pos' => 16820,
            'address' => 'jonggol',
            'password' => 'angger',
        ]);
    }
}
