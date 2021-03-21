<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;


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

        Storage::makeDirectory('posts');

        User::create([

            'name' => 'Sergio Garcia',
            'email' => 'sergio@cbmostoles.com',
            'password' => bcrypt('12345678')
            
        ]);

        User::factory(99)->create();
    }
}
