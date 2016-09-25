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
        //
        DB::table('users')->truncate();
        DB::table('users')->insert([
          [
            'name'=>'jhon',
            'email'=>'jhon@mail.com',
            'password'=>bcrypt('jhon')
          ],
          [
            'name'=>'jane',
            'email'=>'jane@mail.com',
            'password'=>bcrypt('jane')
          ]
        ]);
    }
}
