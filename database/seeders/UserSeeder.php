<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Fake users

        User::create([

            'name' => 'Sergio Garcia',
            'email' => 'sergio@cbmostoles.com',
            'password' => bcrypt('12345678')
            
        ]);

        User::factory(99)->create();
    }
}
