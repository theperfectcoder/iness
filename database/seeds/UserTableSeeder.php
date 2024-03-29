<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Inessa Pogosyan',
            'email' => 'inessa@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
