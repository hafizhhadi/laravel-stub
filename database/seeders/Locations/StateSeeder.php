<?php

namespace Database\Seeders\Locations;

use Illuminate\Database\Seeder;
use Symfony\Component\Uid\Ulid;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('states') -> insert ([
            [
                'id'         => strtolower(Ulid::generate()),
                'name'       => 'JOHOR',
                'state_code' => '01',
            ],
            [
                'id'         => strtolower(Ulid::generate()),
                'name'       => 'KEDAH',
                'state_code' => '02',
            ],
            [
                'id'         => strtolower(Ulid::generate()),
                'name'       => 'KELANTAN',
                'state_code' => '03',
            ],
            [
                'id'         => strtolower(Ulid::generate()),
                'name'       => 'MELAKA',
                'state_code' => '04',
            ],
            [
                'id'         => strtolower(Ulid::generate()),
                'name'       => 'NEGERI SEMBILAN',
                'state_code' => '05',
            ],
            [
                'id'         => strtolower(Ulid::generate()),
                'name'       => 'PAHANG',
                'state_code' => '06',
            ],
            [
                'id'         => strtolower(Ulid::generate()),
                'name'       => 'PULAU PINANG',
                'state_code' => '07',
            ],
            [
                'id'         => strtolower(Ulid::generate()),
                'name'       => 'PERAK',
                'state_code' => '08',
            ],
            [
                'id'         => strtolower(Ulid::generate()),
                'name'       => 'PERLIS',
                'state_code' => '09',
            ],
            [
                'id'         => strtolower(Ulid::generate()),
                'name'       => 'SELANGOR',
                'state_code' => '10',
            ],
            [
                'id'         => strtolower(Ulid::generate()),
                'name'       => 'TERENGGANU',
                'state_code' => '11',
            ],
            [
                'id'         => strtolower(Ulid::generate()),
                'name'       => 'SABAH',
                'state_code' => '12',
            ],
            [
                'id'         => strtolower(Ulid::generate()),
                'name'       => 'SARAWAK',
                'state_code' => '13',
            ],
            [
                'id'         => strtolower(Ulid::generate()),
                'name'       => 'WILAYAH PERSEKUTUAN KUALA LUMPUR',
                'state_code' => '14',
            ],
            [
                'id'         => strtolower(Ulid::generate()),
                'name'       => 'WILAYAH PERSEKUTUAN LABUAN',
                'state_code' => '15',
            ],
            [
                'id'         => strtolower(Ulid::generate()),
                'name'       => 'WILAYAH PERSEKUTUAN PUTRAJAYA',
                'state_code' => '16',
            ],
        ]);
    }
}
