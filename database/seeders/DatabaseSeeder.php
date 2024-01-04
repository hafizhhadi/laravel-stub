<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\Locations\StateSeeder;
use Database\Seeders\Locations\DistrictSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this -> call([
            StateSeeder::class,
            DistrictSeeder::class,
        ]);
    }
}
