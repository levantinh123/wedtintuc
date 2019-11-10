<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'boss',
            'email' => 'boss@gmail.canh',
            'password' => bcrypt('123456'),
            'quyen' => 1,
            'created_at' => new DateTime()
        ]);
    }
}
