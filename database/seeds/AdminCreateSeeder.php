<?php

use Illuminate\Database\Seeder;

class AdminCreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'role' => 'admin',
           'email' => 'admin@admin.com',
           'password' => Hash::make('qwerty'),
        ]);
    }
}

