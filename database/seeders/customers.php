<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class customers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
            'name' => Str::random(10),
            'address' => Str::random(20),
            'phone' => Str::random(10),
            'role_id' => 2,
            'email' =>  Str::random(10).'@gmail.com',
            'password' => Str::random(10)
        ],
        [
            'name' => Str::random(10),
            'address' => Str::random(20),
            'phone' => Str::random(10),
            'role_id' => 1,
            'email' =>  Str::random(10).'@gmail.com',
            'password' => Str::random(10)
        ]
     ]);
    }
}
