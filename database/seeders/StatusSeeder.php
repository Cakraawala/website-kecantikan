<?php

namespace Database\Seeders;

use App\Models\StatusProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $st = array(

            array('id' => '1','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '10','waktu' => '2021-11-10 15:57:47'),
            array('id' => '2','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '8','waktu' => '2021-11-15 15:57:47'),
            array('id' => '3','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '6','waktu' => '2021-11-19 15:57:47'),

            array('id' => '4','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '6','waktu' => '2021-11-20 15:57:47'),
            array('id' => '5','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '8','waktu' => '2021-11-21 15:57:47'),
            array('id' => '6','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '6','waktu' => '2021-11-22 15:57:47'),
            array('id' => '7','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '3','waktu' => '2021-12-05 15:57:47'),
            array('id' => '8','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '8','waktu' => '2021-12-10 15:57:47'),
            array('id' => '9','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '6','waktu' => '2021-12-11 15:57:47'),
            array('id' => '10','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '12','waktu' => '2021-12-16 15:57:47'),
            array('id' => '11','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '8','waktu' => '2021-12-17 15:57:47'),
            array('id' => '12','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '6','waktu' => '2021-12-19 15:57:47'),

            array('id' => '13','products_id' => '7','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '10','waktu' => '2022-01-01 14:45:15'),
            array('id' => '14','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '12','waktu' => '2022-01-03 15:57:47'),
            array('id' => '15','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '1','waktu' => '2022-01-06 15:57:47'),
            array('id' => '16','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '2','waktu' => '2022-01-10 15:57:47'),
            array('id' => '17','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '6','waktu' => '2022-01-15 15:57:47'),
            array('id' => '18','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '2','waktu' => '2022-01-19 15:57:47'),
            array('id' => '19','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '5','waktu' => '2022-01-20 15:57:47'),

            array('id' => '20','products_id' => '7','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '10','waktu' => '2022-02-01 14:45:15'),
            array('id' => '21','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '9','waktu' => '2022-02-05 15:57:47'),
            array('id' => '22','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '17','waktu' => '2022-02-09 15:57:47'),


            array('id' => '23','products_id' => '7','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '8','waktu' => '2022-03-01 14:45:15'),
            array('id' => '24','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '10','waktu' => '2022-03-05 15:57:47'),
            array('id' => '25','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '9','waktu' => '2022-03-15 15:57:47'),
            array('id' => '26','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '10','waktu' => '2022-03-26 15:57:47'),

            array('id' => '27','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '5','waktu' => '2022-04-05 15:57:47'),
            array('id' => '28','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '8','waktu' => '2022-04-09 15:57:47'),
            array('id' => '29','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '6','waktu' => '2022-04-10 15:57:47'),
            array('id' => '30','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '3','waktu' => '2022-04-15 15:57:47'),
            array('id' => '31','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '7','waktu' => '2022-04-16 15:57:47'),
            array('id' => '32','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '10','waktu' => '2022-04-30 15:57:47'),

            array('id' => '33','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '14','waktu' => '2022-05-05 15:57:47'),
            array('id' => '34','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '9','waktu' => '2022-05-09 15:57:47'),
            array('id' => '35','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '6','waktu' => '2022-05-10 15:57:47'),
            array('id' => '36','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '12','waktu' => '2022-05-15 15:57:47'),
            array('id' => '37','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '1','waktu' => '2022-05-16 15:57:47'),

            array('id' => '38','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '8','waktu' => '2022-06-05 15:57:47'),
            array('id' => '39','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '12','waktu' => '2022-06-09 15:57:47'),
            array('id' => '40','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '14','waktu' => '2022-06-10 15:57:47'),
            array('id' => '41','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '6','waktu' => '2022-06-15 15:57:47'),

            array('id' => '42','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '10','waktu' => '2022-07-05 15:57:47'),
            array('id' => '43','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '10','waktu' => '2022-07-05 15:57:47'),
            array('id' => '44','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '12','waktu' => '2022-07-09 15:57:47'),
            array('id' => '45','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '2','waktu' => '2022-07-10 15:57:47'),
            array('id' => '46','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '2','waktu' => '2022-07-15 15:57:47'),
            array('id' => '47','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '1','waktu' => '2022-07-19 15:57:47'),
            array('id' => '48','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '2','waktu' => '2022-07-21 15:57:47'),
            array('id' => '49','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '3','waktu' => '2022-07-26 15:57:47'),
            array('id' => '50','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '1','waktu' => '2022-07-28 15:57:47'),

            array('id' => '51','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '15','waktu' => '2022-08-04 15:57:47'),
            array('id' => '52','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '6','waktu' => '2022-08-05 15:57:47'),
            array('id' => '53','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '12','waktu' => '2022-08-09 15:57:47'),
            array('id' => '54','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '2','waktu' => '2022-08-10 15:57:47'),
            array('id' => '55','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '3','waktu' => '2022-08-15 15:57:47'),
            array('id' => '56','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '2','waktu' => '2022-08-25 15:57:47'),

            array('id' => '57','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '2','waktu' => '2022-09-04 15:57:47'),
            array('id' => '58','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '2','waktu' => '2022-09-05 15:57:47'),
            array('id' => '59','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '6','waktu' => '2022-09-09 15:57:47'),
            array('id' => '60','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '3','waktu' => '2022-09-10 15:57:47'),
            array('id' => '61','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '2','waktu' => '2022-09-12 15:57:47'),
            array('id' => '62','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '11','waktu' => '2022-09-14 15:57:47'),
            array('id' => '63','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '2','waktu' => '2022-09-15 15:57:47'),
            array('id' => '64','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '2','waktu' => '2022-09-16 15:57:47'),
            array('id' => '65','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '6','waktu' => '2022-09-17 15:57:47'),
            array('id' => '66','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '3','waktu' => '2022-09-18 15:57:47'),
            array('id' => '67','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '2','waktu' => '2022-09-20 15:57:47'),
            array('id' => '68','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '1','waktu' => '2022-09-25 15:57:47'),

            array('id' => '69','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '3','waktu' => '2022-10-09 15:57:47'),
            array('id' => '70','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '13','waktu' => '2022-10-10 15:57:47'),
            array('id' => '71','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '10','waktu' => '2022-10-15 15:57:47'),
            array('id' => '72','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '12','waktu' => '2022-10-15 15:57:47'),
            array('id' => '73','products_id' => '24','users_id' => '1','status' => 'Keluar','desc' => 'Checkout','jumlah' => '3','waktu' => '2022-10-29 15:57:47'),

        );
            StatusProduct::create($st[0]);
            StatusProduct::create($st[1]);
            StatusProduct::create($st[2]);
            StatusProduct::create($st[3]);
            StatusProduct::create($st[4]);
            StatusProduct::create($st[5]);
            StatusProduct::create($st[6]);
            StatusProduct::create($st[7]);
            StatusProduct::create($st[8]);
            StatusProduct::create($st[9]);
            StatusProduct::create($st[10]);

            StatusProduct::create($st[11]);
            StatusProduct::create($st[12]);
            StatusProduct::create($st[13]);
            StatusProduct::create($st[14]);
            StatusProduct::create($st[15]);
            StatusProduct::create($st[16]);
            StatusProduct::create($st[17]);
            StatusProduct::create($st[18]);
            StatusProduct::create($st[19]);
            StatusProduct::create($st[20]);

            StatusProduct::create($st[21]);
            StatusProduct::create($st[22]);
            StatusProduct::create($st[23]);
            StatusProduct::create($st[24]);
            StatusProduct::create($st[25]);
            StatusProduct::create($st[26]);
            StatusProduct::create($st[27]);
            StatusProduct::create($st[28]);
            StatusProduct::create($st[29]);
            StatusProduct::create($st[30]);

            StatusProduct::create($st[31]);
            StatusProduct::create($st[32]);
            StatusProduct::create($st[33]);
            StatusProduct::create($st[34]);
            StatusProduct::create($st[35]);
            StatusProduct::create($st[36]);
            StatusProduct::create($st[37]);
            StatusProduct::create($st[38]);
            StatusProduct::create($st[39]);
            StatusProduct::create($st[40]);

            StatusProduct::create($st[41]);
            StatusProduct::create($st[42]);
            StatusProduct::create($st[43]);
            StatusProduct::create($st[44]);
            StatusProduct::create($st[45]);
            StatusProduct::create($st[46]);
            StatusProduct::create($st[47]);
            StatusProduct::create($st[48]);
            StatusProduct::create($st[49]);
            StatusProduct::create($st[50]);

            StatusProduct::create($st[51]);
            StatusProduct::create($st[52]);
            StatusProduct::create($st[53]);
            StatusProduct::create($st[54]);
            StatusProduct::create($st[55]);
            StatusProduct::create($st[56]);
            StatusProduct::create($st[57]);
            StatusProduct::create($st[58]);
            StatusProduct::create($st[59]);
            StatusProduct::create($st[60]);

            StatusProduct::create($st[61]);
            StatusProduct::create($st[62]);
            StatusProduct::create($st[63]);
            StatusProduct::create($st[64]);
            StatusProduct::create($st[65]);
            StatusProduct::create($st[66]);
            StatusProduct::create($st[67]);
            StatusProduct::create($st[68]);
            StatusProduct::create($st[69]);
            StatusProduct::create($st[70]);
            StatusProduct::create($st[71]);
            StatusProduct::create($st[72]);
            // StatusProduct::create($st[73]);
    }
}
