<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Devender Gupta",
            'email' => "degeta10@gmail.com",
            'password' => bcrypt("qwe123"),
        ]);
    }
}
