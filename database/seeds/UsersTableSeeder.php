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
          'name'=>'jhon',
          'email'=>'jhon54plex@gmail.com',
          'password'=> bcrypt('qwe123')
        ]);
        User::create([
          'name'=>'andres',
          'email'=>'andres@gmail.com',
          'password'=> bcrypt('qwe123')
        ]);
    }
}
