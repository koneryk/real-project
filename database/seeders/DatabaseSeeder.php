<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'login'=>'Conf2027',
            'email'=>'Conf2027@email.com',
            'password'=>Hash::make('Demo77'),
            'FIO'=>'Conf2027',
            'telephone'=>'1232421',
            'role'=>'admin',
        ]);
    }
}
