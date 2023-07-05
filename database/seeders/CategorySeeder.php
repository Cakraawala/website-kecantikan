<?php

namespace Database\Seeders;

use App\Models\CategoryProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryProduct::create(array('id' => '1', 'nm_category' => 'Shampoo', 'slug' => 'shampoo', 'image' => 'catpro-images/vWUD4OjgmK3b1LbGKtp1VOjRcUYFswjqqgSpouqB.jpg', 'description' => 'Berbagai macam jenis shampo yang mengandung banyak khasiat untuk rambut dan kepala', 'created_at' => '2022-09-13 14:35:51', 'updated_at' => '2022-09-13 14:35:51'));

        CategoryProduct::create(array('id' => '2', 'nm_category' => 'Conditioner', 'slug' => 'conditioner', 'image' => 'catpro-images/B07HuzncPn2S5z6KU2cbgUDBvu1r2QqZzDc1pWVU.jpg', 'description' => 'Conditioner', 'created_at' => '2022-09-13 15:03:08', 'updated_at' => '2022-09-13 15:03:08'));

        CategoryProduct::create(array('id' => '3', 'nm_category' => 'Facial wash', 'slug' => 'facial-wash', 'image' => 'catpro-images/8MDxfGsKKjTPqE3T70tIFjKv2hIv9cdPoRea3l05.jpg', 'description' => 'Sabun cuci muka', 'created_at' => '2022-09-13 15:10:40', 'updated_at' => '2022-09-13 15:10:40'));

        CategoryProduct::create(array('id' => '4', 'nm_category' => 'Essence', 'slug' => 'essence', 'image' => 'catpro-images/QjkdmgMgsuk9O1TEeM68iluTwy1Ylxl3MrUq7PzD.jpg', 'description' => NULL, 'created_at' => '2022-09-13 15:21:10', 'updated_at' => '2022-09-13 15:37:06'));

        CategoryProduct::create(array('id' => '5', 'nm_category' => 'Moisturizer', 'slug' => 'moisturizer', 'image' => 'catpro-images/VlJfuHMpi0tfTwSvgLbcmbSbK9SJFKJD4UKvfFrZ.jpg', 'description' => 'Moisturizer', 'created_at' => '2022-09-13 15:22:11', 'updated_at' => '2022-09-13 15:22:11'));

        CategoryProduct::create(array('id' => '6', 'nm_category' => 'Serum', 'slug' => 'serum', 'image' => 'catpro-images/kudMqfyr8orpyb8cVWQ0bM4j7E8fdBcYbB0yTYfS.jpg', 'description' => 'serum', 'created_at' => '2022-09-13 15:22:55', 'updated_at' => '2022-09-13 15:22:55'));

        CategoryProduct::create(array('id' => '7', 'nm_category' => 'Sunscreen', 'slug' => 'sunscreen', 'image' => 'catpro-images/qddRKWEwpk8WzP2Vl4rvjVVrc7FqGb1bMIz92tTi.jpg', 'description' => 'sunscreen', 'created_at' => '2022-09-13 15:23:43', 'updated_at' => '2022-09-13 15:23:43'));

        CategoryProduct::create(array('id' => '8', 'nm_category' => 'Hair Styling', 'slug' => 'hair-styling', 'image' => 'catpro-images/ixejK5UWChSWGjrjQQy2EgpzgIz3bpAOjLVLIBcq.jpg', 'description' => 'hair style', 'created_at' => '2022-09-13 15:24:41', 'updated_at' => '2022-09-13 15:25:23'));

        CategoryProduct::create(array('id' => '9', 'nm_category' => 'Body Wash', 'slug' => 'body-wash', 'image' => 'catpro-images/y5gnzz3bYnuIWnDyJpNiKYaCCzjAqhihPAmovNWY.jpg', 'description' => 'sabun', 'created_at' => '2022-09-13 15:26:08', 'updated_at' => '2022-09-13 15:26:08'));

        CategoryProduct::create(array('id' => '10', 'nm_category' => 'Toothbrush', 'slug' => 'toothbrush', 'image' => 'catpro-images/mnQ0u9B4H5vl8nUeqSTy0rVb1P95e1MoijxMkoNC.jpg', 'description' => 'toothbrush', 'created_at' => '2022-09-13 15:27:24', 'updated_at' => '2022-09-13 15:34:49'));

        CategoryProduct::create(array('id' => '11', 'nm_category' => 'Parfume', 'slug' => 'parfume', 'image' => 'catpro-images/HM9YacEdyglt8GVdOwTwunmkbvuNrmhFnqabp2NQ.jpg', 'description' => 'parfume', 'created_at' => '2022-09-13 15:28:01', 'updated_at' => '2022-09-13 15:28:01'));

        CategoryProduct::create(array('id' => '12', 'nm_category' => 'Body lotion', 'slug' => 'body-lotion', 'image' => 'catpro-images/qtaUpLto3rEK43cjacJ87eoLLGKG20CBP04MCwCU.jpg', 'description' => 'body lotion', 'created_at' => '2022-09-13 15:28:42', 'updated_at' => '2022-09-13 15:28:42'));

        CategoryProduct::create(array('id' => '13', 'nm_category' => 'Toothpaste', 'slug' => 'toothpaste', 'image' => 'catpro-images/7hFUKKgLEgQm7iak7yh4s9nRdMwZ7T0dpq99irwn.jpg', 'description' => 'toothpaste', 'created_at' => '2022-09-13 15:35:39', 'updated_at' => '2022-09-13 15:35:39'));

        CategoryProduct::create(array('id' => '14', 'nm_category' => 'Hair vitamin', 'slug' => 'hair-vitamin', 'image' => 'catpro-images/EDWTHf3Yr3j0kGo7i0aX6VACEomPD8dYcND6298M.jpg', 'description' => 'hair vitamin', 'created_at' => '2022-09-13 15:36:32', 'updated_at' => '2022-09-13 15:36:32'));

        CategoryProduct::create(array('id' => '15', 'nm_category' => 'Toner', 'slug' => 'toner', 'image' => 'catpro-images/gNm7UuigE4eqOxFMDKL8sLDkDBp0oisd3M98t0aa.jpg', 'description' => 'toner', 'created_at' => '2022-09-13 15:37:39', 'updated_at' => '2022-09-13 15:37:39'));

        CategoryProduct::create(array('id' => '16', 'nm_category' => 'Mask', 'slug' => 'mask', 'image' => 'catpro-images/l9Lf5XwWaxYYQoM04OiatpNaJKx0JOnIFPN2Yx7e.jpg', 'description' => 'mask', 'created_at' => '2022-09-13 15:40:01', 'updated_at' => '2022-09-13 15:40:01'));
    }
}
