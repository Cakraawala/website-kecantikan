<?php

namespace Database\Seeders;

use App\Models\Delivery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Delivery::create(array('id' => '1','nm_deliver' => 'J&T EMPRESS','estimasi' => '6','ongkir' => '10000','created_at' => '2022-09-13 14:31:35','updated_at' => '2022-09-13 14:31:35'));
        Delivery::create(array('id' => '2','nm_deliver' => 'TAKA','estimasi' => '5','ongkir' => '9000','created_at' => '2022-09-13 14:31:35','updated_at' => '2022-09-13 14:31:35'));
        Delivery::create(array('id' => '3','nm_deliver' => 'SHOPA EXPRESS','estimasi' => '7','ongkir' => '8000','created_at' => '2022-09-13 14:31:35','updated_at' => '2022-09-13 14:31:35'));
    }
}
