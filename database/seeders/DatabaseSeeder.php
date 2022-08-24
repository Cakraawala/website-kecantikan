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
        Payment::create([
            'nm_payment' => 'BCA',
            'fee' => 5000
        ]);

        Payment::create([
            'nm_payment' => 'BRI',
            'fee' => 4500
        ]);
        Payment::create([
            'nm_payment' => 'BNI',
            'fee' => 4000
        ]);
        Payment::create([
            'nm_payment' => 'MANDIRI',
            'fee' => 3500
        ]);
        Payment::create([
            'nm_payment' => 'BTN',
            'fee' => 2000
        ]);
        Payment::create([
            'nm_payment' => 'DANA',
            'fee' => 1500
        ]);
        Payment::create([
            'nm_payment' => 'OVO',
            'fee' => 2500
        ]);
        Payment::create([
            'nm_payment' => 'GOPAY',
            'fee' => 1000
        ]);
        Payment::create([
            'nm_payment' => 'SHOPEE PAY',
            'fee' => 2500
        ]);
        Payment::create([
            'nm_payment' => 'INDOMART',
            'fee' => 1000
        ]);
        Payment::create([
            'nm_payment' => 'ALFAMART',
            'fee' => 1000
        ]);
        Delivery::create([
            'nm_deliver' => 'J&T EMPRESS',
            'estimasi'=> 6,
            'ongkir' => 10000
        ]);
        Delivery::create([
            'nm_deliver' => 'TAKA',
            'estimasi'=> 5,
            'ongkir' => 9000
        ]);
        Delivery::create([
            'nm_deliver' => 'SHOPA EXPRESS',
            'estimasi'=> 7,
            'ongkir' => 8000
        ]);

        CategoryProduct::create([
            'nm_category' => 'Hair',
            'slug' => 'hair'
        ]);
        CategoryProduct::create([
            'nm_category' => 'Face',
            'slug' => 'face'
        ]);
        CategoryProduct::create([
            'nm_category' => 'Tooth',
            'slug' => 'tooth'
        ]);

        CategoryProduct::create([
            'nm_category' => 'Body',
            'slug' => 'body'
        ]);

        Products::create([
            'nm_products' => 'Barang Pertama',
            'slug' => 'barang-pertama',
            'category_products_id' => 1,
            'quantity' => 110,
            'price' => 123000,
            // 'address' => 'asdasdas',
            'deskripsi' => 'Deskripsi Produk KUALITAS TOKO DAN PRODUK KAMI, DISINI KAMI HANYA MENERIMA KOMPLENAN YANG MELAKUKAN VIDIO UNBOXING SAJA (VIDIO BUKA PAKET)
            '
        ]);


        Products::create([
            'nm_products' => 'Barang kedua',
            'slug' => 'barang-kedua',
            'category_products_id' => 1,
            'quantity' => 121,
            'price' => 150000,
            // 'address' => 'asdasdas',

        ]);

        Products::create([
            'nm_products' => 'Barang ketiga',
            'slug' => 'barang-ketiga',
            'category_products_id' => 1,
            'quantity' => 10,
            'price' => 100000,
            // 'address' => 'asdasdas',

        ]);
        Products::create([
            'nm_products' => 'Barang keduabelas',
            'slug' => 'barang-keduabelas',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 1,
            // 'address' => 'asdasdas',

        ]);

        Products::create([
            'nm_products' => 'Barang ketigabelas',
            'slug' => 'barang-ketigabelas',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 1,
            // 'address' => 'asdasdas',

        ]);
        Products::create([
            'nm_products' => 'Barang keempatbelas',
            'slug' => 'barang-keempatbelas',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 1,
            // 'address' => 'asdasdas',

        ]);

        Products::create([
            'nm_products' => 'Barang kelimabelas',
            'slug' => 'barang-kelimabelas',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 1,
            // 'address' => 'asdasdas',

        ]);
        Products::create([
            'nm_products' => 'Barang keenambelas',
            'slug' => 'barang-keenambelas',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 1,
            // 'address' => 'asdasdas',

        ]);

        Products::create([
            'nm_products' => 'Barang ketujuhbelas',
            'slug' => 'barang-ketujuhbelas',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 1,
            // 'address' => 'asdasdas',

        ]);
        Products::create([
            'nm_products' => 'Barang kedelapanbelas',
            'slug' => 'barang-kedelapanbelas',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 1,
            // 'address' => 'asdasdas',

        ]);

        Products::create([
            'nm_products' => 'Barang kesembilanbelas',
            'slug' => 'barang-kesembilanbelas',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 1,
            // 'address' => 'asdasdas',

        ]);
        Products::create([
            'nm_products' => 'Barang keduapuluh',
            'slug' => 'barang-keduapuluh',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 1,
            // 'address' => 'asdasdas',

        ]);

        Products::create([
            'nm_products' => 'Barang keduapuluhsatu',
            'slug' => 'barang-keduapuluhsatu',
            'category_products_id' => 1 ,
            'quantity' => 1,
            'price' => 1,
            // 'address' => 'asdasdas',

        ]);
        Products::create([
            'nm_products' => 'Barang keempat',
            'slug' => 'barang-keempat',
            'category_products_id' => 2,
            'quantity' => 1,
            'price' => 1123213,
            // 'address' => 'asdasdas',

        ]);

        Products::create([
            'nm_products' => 'Barang kelima',
            'slug' => 'barang-kelima',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 100000000,
            // 'address' => 'asdasdas',

        ]);

        Products::create([
            'nm_products' => 'Barang keenam',
            'slug' => 'barang-keenam',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 13333333333,
            // 'address' => 'asdasdas',

        ]);

        Products::create([
            'nm_products' => 'Barang ketujuh',
            'slug' => 'barang-ketujuh',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 1,
            // 'address' => 'asdasdas',

        ]);

        Products::create([
            'nm_products' => 'Barang kedelapan',
            'slug' => 'barang-kedelapan',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 1,
            // 'address' => 'asdasdas',

        ]);

        Products::create([
            'nm_products' => 'Barang kesembilan',
            'slug' => 'barang-kesembilan',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 1,
            // 'address' => 'asdasdas',

        ]);

        Products::create([
            'nm_products' => 'Barang kesepuluh',
            'slug' => 'barang-kesepuluh',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 1,
            // 'address' => 'asdasdas',

        ]);

        Products::create([
            'nm_products' => 'Barang kesebelas',
            'slug' => 'barang-kesebelas',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 1,
            // 'address' => 'asdasdas',

        ]);

        Products::create([
            'nm_products' => 'Barang keduapuluhdua',
            'slug' => 'barang-keduapuluhdua',
            'category_products_id' => 1,
            'quantity' => 1,
            'price' => 1,
            // 'address' => 'asdasdas',

        ]);

        User::create([
            'name' => 'angger',
            'username' => 'anggercakra',
            'no_wa' => '081231231',
            'email' => 'dimasanjaymabar@gmail.com',
            'tgl_lhr' => '2022-10-30',
            'jk' => 'L',
            'code_pos' => 16820,
            'address' => 'jonggol',
            'password' => bcrypt('angger'),
        ]);

        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'is_admin' => 1
        ]);
    }
}
