<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\str;
use Illuminate\Support\Facades\{
    DB,
    Hash,
};

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {// fungsi DB untuk query seeder
        DB::table('users')->insert([
            'name' => str::random(10),
            'email' => str::random(10).'@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
