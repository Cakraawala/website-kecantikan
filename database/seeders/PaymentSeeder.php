<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payments = array(
            array('id' => '1','nm_payment' => 'BCA','fee' => '5000','created_at' => '2022-09-13 14:31:35','updated_at' => '2022-09-13 14:31:35'),
            array('id' => '2','nm_payment' => 'BRI','fee' => '4500','created_at' => '2022-09-13 14:31:35','updated_at' => '2022-09-13 14:31:35'),
            array('id' => '3','nm_payment' => 'BNI','fee' => '4000','created_at' => '2022-09-13 14:31:35','updated_at' => '2022-09-13 14:31:35'),
            array('id' => '4','nm_payment' => 'MANDIRI','fee' => '3500','created_at' => '2022-09-13 14:31:35','updated_at' => '2022-09-13 14:31:35'),
            array('id' => '5','nm_payment' => 'BTN','fee' => '2000','created_at' => '2022-09-13 14:31:35','updated_at' => '2022-09-13 14:31:35'),
            array('id' => '6','nm_payment' => 'DANA','fee' => '1500','created_at' => '2022-09-13 14:31:35','updated_at' => '2022-09-13 14:31:35'),
            array('id' => '7','nm_payment' => 'OVO','fee' => '2500','created_at' => '2022-09-13 14:31:35','updated_at' => '2022-09-13 14:31:35'),
            array('id' => '8','nm_payment' => 'GOPAY','fee' => '1000','created_at' => '2022-09-13 14:31:35','updated_at' => '2022-09-13 14:31:35'),
            array('id' => '9','nm_payment' => 'SHOPEE PAY','fee' => '2500','created_at' => '2022-09-13 14:31:35','updated_at' => '2022-09-13 14:31:35'));

            Payment::create($payments[0]);
            Payment::create($payments[1]);
            Payment::create($payments[2]);
            Payment::create($payments[3]);
            Payment::create($payments[4]);
            Payment::create($payments[5]);
            Payment::create($payments[6]);
            Payment::create($payments[7]);
            Payment::create($payments[8]);
    }
}
