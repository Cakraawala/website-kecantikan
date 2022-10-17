<?php

namespace Database\Seeders;

use App\Models\CategoryProduct;
use App\Models\Delivery;
use App\Models\Payment;
use App\Models\Products;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            PaymentSeeder::class,
            DeliverySeeder::class,
            UserSeeder::class,
        ]);
    }
}
