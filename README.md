<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Pengenalan Konsep Aplikasi


Project Website Kecantikan berkonsep website Eccomerce yang dimiliki oleh satu perusahaan yang fokus pada penjualan produk kecantikan. Melalui website ini, perusahaan dapat mempromosikan dan menjual berbagai produk kecantikan kepada pelanggan mereka. Website ini menawarkan informasi terperinci tentang produk, foto-foto berkualitas tinggi. Selain itu, website ini menyediakan fitur pemesanan online yang aman dan nyaman bagi pelanggan. Dengan adanya "website kecantikan" ini, perusahaan dapat memperluas jangkauan mereka secara online dan memberikan pengalaman belanja yang lebih baik kepada pelanggan.


## Authentikasi 
Aplikasi ini menyediakan 2 role berikut :
### Admin
Admin memiliki tugas yang sangat kompleks, seperti membuat, mengedit dan menghapus data Produk,Kategori Produk,User,Metode Pembayaran, Metode Delivery, bahkan Transaksi sekaligus.
- Username : admin
- Password : admin (same as username)

### Konsumen
Siswa berperan sebagai konsumen, siswa dapat melihat history pembayaran dan profile nya sendiri.
- Username : customer
- Password : customer  (same as username)

## Setting UP
Menyiapkan dan mensetting project website kecantikan (laravel 9) require (Composer v2.2.4 ,Git, MYSQL PHP > v5 (v8.1.1))
- Buka CMD atau Aplikasi Command lainnya
- Masuk ke Directory apa saja untuk menyiapkan folder project. Contoh (cd C:\xampp\htdocs)
- Download / Clone Project ini dengan cara git clone https://github.com/Cakraawala/website-kecantikan.git atau dengan mendownload langsung file zip dan pindahkan ke directory yang telah disiapkan.
- Setelah project berhasil di download ekstrak jika file berupa zip, lalu ketikan Composer install di CMD dan tunggu hingga selesai diunduh.
- Buat database MYSQL dan Buka project website-kecantikan, Cari file dengan nama .envexample kemudian edit nama file tersebut menjadi .env dan buka file tersebut.
- Setelah file dibuka, Ubah Database_name dan lainnya sesuai dengan database yang baru dibuat.
- Buka CMD kembali Ketik php artisan key:generate dan php artisan migrate --seed / php artisan migrate:fresh --seed. Setelah data berhasil di dapatkan lalu jalankan Project dengan PHP ARTISAN SERVE.
- Project Berhasil DiClone.

## Asset Foto
[![indexhome](https://user-images.githubusercontent.com/97875134/251057796-7ad740bb-8929-4a0b-a640-e4cfc3e69394.PNG)
![2indexproduk](https://user-images.githubusercontent.com/97875134/251057841-fd3bd266-57e7-4fd7-a7ac-a71fbb744868.PNG)
![3indexkategory](https://user-images.githubusercontent.com/97875134/251057909-6f68aa85-d360-43aa-b135-4f81298a061b.PNG)
![4produk](https://user-images.githubusercontent.com/97875134/251058085-62c1c16c-3cf7-4aa9-80c8-058011e59855.PNG)
![5dashboard](https://user-images.githubusercontent.com/97875134/251058198-d130f153-e0cb-48f3-9d5d-1a6461424ea5.PNG)
![6cart](https://user-images.githubusercontent.com/97875134/251058211-688063c7-7ed5-467b-afe4-98586a7f061f.PNG)
![7checkout](https://user-images.githubusercontent.com/97875134/251058221-eb3c64ff-e4b1-48ba-8526-f104cd89c8cb.PNG)
![8editprofile](https://user-images.githubusercontent.com/97875134/251058231-0aa109f6-101b-4740-b165-7a5a50ea36dc.PNG)
![9historycheckout](https://user-images.githubusercontent.com/97875134/251058236-131bf405-1c61-40ff-ad4c-9361e9404aaa.PNG)
![10detailhistory](https://user-images.githubusercontent.com/97875134/251058247-8dbcf5fe-bf66-4f35-b4c0-df7dbe213712.PNG)


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
