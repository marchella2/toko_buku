<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'nama' => 'marchella',
            'alamat' => 'cigombong',
            'telpon' => '0895338964333',
            'status' => 'aktif',
            'username' => 'marchella',
            'password' => bcrypt('12345'),
            'akses' => 'admin',
        ]);

        User::insert([
            'nama' => 'mps',
            'alamat' => 'bogor',
            'telpon' => '0852',
            'status' => 'aktif',
            'username' => 'mps',
            'password' => bcrypt('12345'),
            'akses' => 'manager',
        ]);

        User::insert([
            'nama' => 'marchel',
            'alamat' => 'sukabumi',
            'telpon' => '0895',
            'status' => 'aktif',
            'username' => 'marchel',
            'password' => bcrypt('12345'),
            'akses' => 'kasir',
        ]);

    }
}
