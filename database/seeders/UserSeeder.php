<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        $user->name = 'Agung Wahyudi';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        $userdua = new User();
        $userdua->name = 'Agung Wahyudi';
        $userdua->email = 'admin2@gmail.com';
        $userdua->password = Hash::make('12345678');
        $userdua->save();
    }
}
