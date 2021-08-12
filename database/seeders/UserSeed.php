<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'Username'=>'Shafiq Sam',
            'Email'=>'Shafiqshamsuri@gmail.com',
            'Password'=>Hash::make('12345')
        ]);
    }
}
