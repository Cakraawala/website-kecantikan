<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = array(
            array('id' => '1', 'name' => 'Admin', 'username' => 'admin', 'email' => NULL, 'password' => bcrypt('admin'), 'no_wa' => '4560468', 'tgl_lhr' => NULL, 'jk' => '?', 'code_pos' => '1621312', 'address' => 'jakarta barat', 'is_admin' => '1', 'email_verified_at' => NULL, 'remember_token' => 'ZXuftQvXl99fAlLB0UXBI0ipFGXqK9vS8usXzOnNgguHcimF9QrvCSa1LoQF', 'created_at' => '2022-09-13 14:31:35', 'updated_at' => '2022-10-15 04:17:05'),
            array('id' => '2', 'name' => 'Customer', 'username' => 'customer', 'email' => NULL, 'password' => bcrypt('customer'), 'no_wa' => NULL, 'tgl_lhr' => NULL, 'jk' => '?', 'code_pos' => NULL, 'address' => NULL, 'is_admin' => '0', 'email_verified_at' => NULL, 'remember_token' => 'miEohScmSR397fv9NlCcABi2KfumwoGkzGdmA9fVHV12KjLW3zPO5PtnH5e1', 'created_at' => '2022-09-14 05:02:10', 'updated_at' => '2022-09-14 05:02:10'),
            array('id' => '3', 'name' => 'asd', 'username' => 'asd', 'email' => NULL, 'password' => '$2y$10$5GXN7vXlqAQErY03ZbbulOhCt8j/fCCQIckDHp0JhoW/qCwpDl89W', 'no_wa' => NULL, 'tgl_lhr' => NULL, 'jk' => '?', 'code_pos' => NULL, 'address' => NULL, 'is_admin' => '0', 'email_verified_at' => NULL, 'remember_token' => NULL, 'created_at' => '2022-09-14 05:09:39', 'updated_at' => '2022-09-14 05:09:39'),
            array('id' => '4', 'name' => 'tesses', 'username' => 'tesses', 'email' => NULL, 'password' => '$2y$10$DwQitEYpNTUm0cjfokWV/.GdZnvpR1oRUX7juJtYE1LndMLdWeCVa', 'no_wa' => NULL, 'tgl_lhr' => NULL, 'jk' => '?', 'code_pos' => NULL, 'address' => NULL, 'is_admin' => '0', 'email_verified_at' => NULL, 'remember_token' => NULL, 'created_at' => '2022-09-14 05:10:07', 'updated_at' => '2022-09-14 05:10:07')
        );

        User::create($user[0]);
        User::create($user[1]);
        User::create($user[2]);
        User::create($user[3]);
    }
}
