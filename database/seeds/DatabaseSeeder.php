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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name'=>'ali',
            'email'=>'ali@gmail.com',
            'password'=>bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name'=>'abu',
            'email'=>'abu@gmail.com',
            'password'=>bcrypt('password')
        ]);
    }
}
