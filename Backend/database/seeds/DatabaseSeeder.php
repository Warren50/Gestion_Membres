<?php

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
        //$this->call(UserSeeder::class);
        DB::table('users')->insert([
            'firsName' => 'warren',
            'lastName' => 'FOTIE TABA',
            'email' => 'fotie2015@gmail.com',
            'password' =>bcrypt('admin'),
        ]);
    }
}
