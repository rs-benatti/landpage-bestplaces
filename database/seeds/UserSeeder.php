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
        $user = new User();
        $user->name = "francisco";
        $user->password = Hash::make(12345678);
        $user->email = "francisco@gmail.com";
        $user->save();
    }
}
