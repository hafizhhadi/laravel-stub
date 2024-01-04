<?php

namespace Database\Seeders\Locations;

use Illuminate\Database\Seeder;
use Symfony\Component\Uid\Ulid;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DistrictSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('districts') -> insert ([
            // Johor
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BATU PAHAT',
                'district_code' => '0101',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'JOHOR BAHRU',
                'district_code' => '0102',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KLUANG',
                'district_code' => '0103',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KOTA TINGGI',
                'district_code' => '0104',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MERSING',
                'district_code' => '0105',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MUAR',
                'district_code' => '0106',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PONTIAN',
                'district_code' => '0107',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SEGAMAT',
                'district_code' => '0108',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KULAI',
                'district_code' => '0121',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TANGKAK',
                'district_code' => '0122',
            ],

            // Kedah
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KOTA SETAR',
                'district_code' => '0201',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUBANG PASU',
                'district_code' => '0202',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PADANG TERAP',
                'district_code' => '0203',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'LANGKAWI',
                'district_code' => '0204',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUALA MUDA',
                'district_code' => '0205',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'YAN',
                'district_code' => '0206',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SIK',
                'district_code' => '0207',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BALING',
                'district_code' => '0208',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KULIM',
                'district_code' => '0209',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BANDAR BAHARU',
                'district_code' => '0210',
            ],

            // Kelantan
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BACHOK',
                'district_code' => '0301',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KOTA BHARU',
                'district_code' => '0302',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MACHANG',
                'district_code' => '0303',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PASIR MAS',
                'district_code' => '0304',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PASIR PUTEH',
                'district_code' => '0305',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TANAH MERAH',
                'district_code' => '0306',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TUMPAT',
                'district_code' => '0307',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'GUA MUSANG',
                'district_code' => '0308',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUALA KRAI',
                'district_code' => '0310',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'JELI',
                'district_code' => '0311',
            ],

            // Melaka
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MELAKA TENGAH',
                'district_code' => '0401',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'JASIN',
                'district_code' => '0402',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'ALOR GAJAH',
                'district_code' => '0403',
            ],

            // Negeri Sembilan
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'JELEBU',
                'district_code' => '0501',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUALA PILAH',
                'district_code' => '0502',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PORT DICKSON',
                'district_code' => '0503',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'REMBAU',
                'district_code' => '0504',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SEREMBAN',
                'district_code' => '0505',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TAMPIN',
                'district_code' => '0506',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'JEMPOL',
                'district_code' => '0507',
            ],

            // Pahang
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BENTONG',
                'district_code' => '0601',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'CAMERON HIGHLANDS',
                'district_code' => '0602',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'JERANTUT',
                'district_code' => '0603',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUANTAN',
                'district_code' => '0604',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'LIPIS',
                'district_code' => '0605',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PEKAN',
                'district_code' => '0606',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'RAUB',
                'district_code' => '0607',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TEMERLOH',
                'district_code' => '0608',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'ROMPIN',
                'district_code' => '0609',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MARAN',
                'district_code' => '0610',
            ],

            // Pulau Pinang
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SEBERANG PERAI TENGAH',
                'district_code' => '0701',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SEBERANG PERAI UTARA',
                'district_code' => '0702',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SEBERANG PERAI SELATAN',
                'district_code' => '0703',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TIMOR LAUT',
                'district_code' => '0704',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BARAT DAYA',
                'district_code' => '0705',
            ],

            // Perak
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BATANG PADANG',
                'district_code' => '0801',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MANJUNG',
                'district_code' => '0802',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KINTA',
                'district_code' => '0803',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KERIAN',
                'district_code' => '0804',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUALA KANGSAR',
                'district_code' => '0805',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'LARUT & MATANG',
                'district_code' => '0806',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'HILIR PERAK',
                'district_code' => '0807',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'HULU PERAK',
                'district_code' => '0808',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SELAMA',
                'district_code' => '0809',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PERAK TENGAH',
                'district_code' => '0810',
            ],

            // Selangor
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Klang',
                'district_code' => '1001',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Kuala Langat',
                'district_code' => '1002',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Kuala Selangor',
                'district_code' => '1004',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Sabak Bernam',
                'district_code' => '1005',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Ulu Langat',
                'district_code' => '1006',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Ulu Selangor',
                'district_code' => '1007',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Petaling',
                'district_code' => '1008',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Gombak',
                'district_code' => '1009',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Sepang',
                'district_code' => '1010',
            ],

            // Terangganu
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BESUT',
                'district_code' => '1101',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'DUNGUN',
                'district_code' => '1102',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KEMAMAN',
                'district_code' => '1103',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUALA TERENGGANU',
                'district_code' => '1104',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'HULU TERENGGANU',
                'district_code' => '1105',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MARANG',
                'district_code' => '1106',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SETIU',
                'district_code' => '1107',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUALA NERUS',
                'district_code' => '1108',
            ],

            // Sabah
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KOTA KINABALU',
                'district_code' => '1201',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PAPAR',
                'district_code' => '1202',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KOTA BELUD',
                'district_code' => '1203',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TUARAN',
                'district_code' => '1204',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUDAT',
                'district_code' => '1205',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'RANAU',
                'district_code' => '1206',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SANDAKAN',
                'district_code' => '1207',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'LABUK & SUGUT',
                'district_code' => '1208',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KINABATANGAN',
                'district_code' => '1209',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TAWAU',
                'district_code' => '1210',
            ],

            // Sarawak
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUCHING',
                'district_code' => '1301',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SRI AMAN',
                'district_code' => '1302',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SIBU',
                'district_code' => '1303',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MIRI',
                'district_code' => '1304',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'LIMBANG',
                'district_code' => '1305',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SARIKEI',
                'district_code' => '1306',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KAPIT',
                'district_code' => '1307',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SAMARAHAN',
                'district_code' => '1308',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BINTULU',
                'district_code' => '1309',
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MUKAH',
                'district_code' => '1310',
            ],

            // Wilayah Persekutuan Putrajaya
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PUTRAJAYA',
                'district_code' => '1601',
            ],

            // Perlis no district
            // Wilayah Persekutuan Kuala Lumpur no district
            // Wilayah Persekutuan Labuan no district
        ]);
    }
}
