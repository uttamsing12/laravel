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
         'name'=>'uttam singh',
         'email'=>'uttamsingh12u@gmail.com',
         'password'=>bcrypt('1234'),
      ]);  
    }
}
