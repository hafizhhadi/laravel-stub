<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\DistrictSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this -> call([
            DistrictSeeder::class,
        ]);
    }
}
