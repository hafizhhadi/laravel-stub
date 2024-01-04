<?php

namespace Database\Seeders\Locations;

use App\Models\Locations\State;
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
                'state_id'      => State::where('state_code', 01) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'JOHOR BAHRU',
                'district_code' => '0102',
                'state_id'      => State::where('state_code', 01) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KLUANG',
                'district_code' => '0103',
                'state_id'      => State::where('state_code', 01) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KOTA TINGGI',
                'district_code' => '0104',
                'state_id'      => State::where('state_code', 01) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MERSING',
                'district_code' => '0105',
                'state_id'      => State::where('state_code', 01) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MUAR',
                'district_code' => '0106',
                'state_id'      => State::where('state_code', 01) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PONTIAN',
                'district_code' => '0107',
                'state_id'      => State::where('state_code', 01) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SEGAMAT',
                'district_code' => '0108',
                'state_id'      => State::where('state_code', 01) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KULAI',
                'district_code' => '0121',
                'state_id'      => State::where('state_code', 01) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TANGKAK',
                'district_code' => '0122',
                'state_id'      => State::where('state_code', 01) -> first() -> id,
            ],

            // Kedah
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KOTA SETAR',
                'district_code' => '0201',
                'state_id'      => State::where('state_code', 02) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUBANG PASU',
                'district_code' => '0202',
                'state_id'      => State::where('state_code', 02) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PADANG TERAP',
                'district_code' => '0203',
                'state_id'      => State::where('state_code', 02) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'LANGKAWI',
                'district_code' => '0204',
                'state_id'      => State::where('state_code', 02) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUALA MUDA',
                'district_code' => '0205',
                'state_id'      => State::where('state_code', 02) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'YAN',
                'district_code' => '0206',
                'state_id'      => State::where('state_code', 02) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SIK',
                'district_code' => '0207',
                'state_id'      => State::where('state_code', 02) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BALING',
                'district_code' => '0208',
                'state_id'      => State::where('state_code', 02) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KULIM',
                'district_code' => '0209',
                'state_id'      => State::where('state_code', 02) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BANDAR BAHARU',
                'district_code' => '0210',
                'state_id'      => State::where('state_code', 02) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PENDANG',
                'district_code' => '0211',
                'state_id'      => State::where('state_code', 02) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'POKOK SENA',
                'district_code' => '0212',
                'state_id'      => State::where('state_code', 02) -> first() -> id,
            ],

            // Kelantan
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BACHOK',
                'district_code' => '0301',
                'state_id'      => State::where('state_code', 03) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KOTA BHARU',
                'district_code' => '0302',
                'state_id'      => State::where('state_code', 03) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MACHANG',
                'district_code' => '0303',
                'state_id'      => State::where('state_code', 03) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PASIR MAS',
                'district_code' => '0304',
                'state_id'      => State::where('state_code', 03) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PASIR PUTEH',
                'district_code' => '0305',
                'state_id'      => State::where('state_code', 03) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TANAH MERAH',
                'district_code' => '0306',
                'state_id'      => State::where('state_code', 03) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TUMPAT',
                'district_code' => '0307',
                'state_id'      => State::where('state_code', 03) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'GUA MUSANG',
                'district_code' => '0308',
                'state_id'      => State::where('state_code', 03) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUALA KRAI',
                'district_code' => '0310',
                'state_id'      => State::where('state_code', 03) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'JELI',
                'district_code' => '0311',
                'state_id'      => State::where('state_code', 03) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KECIL LOJING',
                'district_code' => '0312',
                'state_id'      => State::where('state_code', 03) -> first() -> id,
            ],

            // Melaka
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MELAKA TENGAH',
                'district_code' => '0401',
                'state_id'      => State::where('state_code', 04) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'JASIN',
                'district_code' => '0402',
                'state_id'      => State::where('state_code', 04) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'ALOR GAJAH',
                'district_code' => '0403',
                'state_id'      => State::where('state_code', 04) -> first() -> id,
            ],

            // Negeri Sembilan
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'JELEBU',
                'district_code' => '0501',
                'state_id'      => State::where('state_code', 05) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUALA PILAH',
                'district_code' => '0502',
                'state_id'      => State::where('state_code', 05) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PORT DICKSON',
                'district_code' => '0503',
                'state_id'      => State::where('state_code', 05) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'REMBAU',
                'district_code' => '0504',
                'state_id'      => State::where('state_code', 05) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SEREMBAN',
                'district_code' => '0505',
                'state_id'      => State::where('state_code', 05) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TAMPIN',
                'district_code' => '0506',
                'state_id'      => State::where('state_code', 05) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'JEMPOL',
                'district_code' => '0507',
                'state_id'      => State::where('state_code', 05) -> first() -> id,
            ],

            // Pahang
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BENTONG',
                'district_code' => '0601',
                'state_id'      => State::where('state_code', 06) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'CAMERON HIGHLANDS',
                'district_code' => '0602',
                'state_id'      => State::where('state_code', 06) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'JERANTUT',
                'district_code' => '0603',
                'state_id'      => State::where('state_code', 06) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUANTAN',
                'district_code' => '0604',
                'state_id'      => State::where('state_code', 06) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'LIPIS',
                'district_code' => '0605',
                'state_id'      => State::where('state_code', 06) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PEKAN',
                'district_code' => '0606',
                'state_id'      => State::where('state_code', 06) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'RAUB',
                'district_code' => '0607',
                'state_id'      => State::where('state_code', 06) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TEMERLOH',
                'district_code' => '0608',
                'state_id'      => State::where('state_code', 06) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'ROMPIN',
                'district_code' => '0609',
                'state_id'      => State::where('state_code', 06) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MARAN',
                'district_code' => '0610',
                'state_id'      => State::where('state_code', 06) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BERA',
                'district_code' => '0611',
                'state_id'      => State::where('state_code', 06) -> first() -> id,
            ],

            // Pulau Pinang
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SEBERANG PERAI TENGAH',
                'district_code' => '0701',
                'state_id'      => State::where('state_code', 07) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SEBERANG PERAI UTARA',
                'district_code' => '0702',
                'state_id'      => State::where('state_code', 07) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SEBERANG PERAI SELATAN',
                'district_code' => '0703',
                'state_id'      => State::where('state_code', 07) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TIMOR LAUT',
                'district_code' => '0704',
                'state_id'      => State::where('state_code', 07) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BARAT DAYA',
                'district_code' => '0705',
                'state_id'      => State::where('state_code', 07) -> first() -> id,
            ],

            // Perak
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BATANG PADANG',
                'district_code' => '0801',
                'state_id'      => State::where('state_code', '08') -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MANJUNG',
                'district_code' => '0802',
                'state_id'      => State::where('state_code', '08') -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KINTA',
                'district_code' => '0803',
                'state_id'      => State::where('state_code', '08') -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KERIAN',
                'district_code' => '0804',
                'state_id'      => State::where('state_code', '08') -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUALA KANGSAR',
                'district_code' => '0805',
                'state_id'      => State::where('state_code', '08') -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'LARUT & MATANG',
                'district_code' => '0806',
                'state_id'      => State::where('state_code', '08') -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'HILIR PERAK',
                'district_code' => '0807',
                'state_id'      => State::where('state_code', '08') -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'HULU PERAK',
                'district_code' => '0808',
                'state_id'      => State::where('state_code', '08') -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SELAMA',
                'district_code' => '0809',
                'state_id'      => State::where('state_code', '08') -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PERAK TENGAH',
                'district_code' => '0810',
                'state_id'      => State::where('state_code', '08') -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KAMPAR',
                'district_code' => '0811',
                'state_id'      => State::where('state_code', '08') -> first() -> id,
            ],

            // Selangor
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Klang',
                'district_code' => '1001',
                'state_id'      => State::where('state_code', 10) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Kuala Langat',
                'district_code' => '1002',
                'state_id'      => State::where('state_code', 10) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Kuala Selangor',
                'district_code' => '1004',
                'state_id'      => State::where('state_code', 10) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Sabak Bernam',
                'district_code' => '1005',
                'state_id'      => State::where('state_code', 10) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Ulu Langat',
                'district_code' => '1006',
                'state_id'      => State::where('state_code', 10) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Ulu Selangor',
                'district_code' => '1007',
                'state_id'      => State::where('state_code', 10) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Petaling',
                'district_code' => '1008',
                'state_id'      => State::where('state_code', 10) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Gombak',
                'district_code' => '1009',
                'state_id'      => State::where('state_code', 10) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'Sepang',
                'district_code' => '1010',
                'state_id'      => State::where('state_code', 10) -> first() -> id,
            ],

            // Terengganu
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BESUT',
                'district_code' => '1101',
                'state_id'      => State::where('state_code', 11) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'DUNGUN',
                'district_code' => '1102',
                'state_id'      => State::where('state_code', 11) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KEMAMAN',
                'district_code' => '1103',
                'state_id'      => State::where('state_code', 11) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUALA TERENGGANU',
                'district_code' => '1104',
                'state_id'      => State::where('state_code', 11) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'HULU TERENGGANU',
                'district_code' => '1105',
                'state_id'      => State::where('state_code', 11) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MARANG',
                'district_code' => '1106',
                'state_id'      => State::where('state_code', 11) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SETIU',
                'district_code' => '1107',
                'state_id'      => State::where('state_code', 11) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUALA NERUS',
                'district_code' => '1108',
                'state_id'      => State::where('state_code', 11) -> first() -> id,
            ],

            // Sabah
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KOTA KINABALU',
                'district_code' => '1201',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PAPAR',
                'district_code' => '1202',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KOTA BELUD',
                'district_code' => '1203',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TUARAN',
                'district_code' => '1204',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUDAT',
                'district_code' => '1205',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'RANAU',
                'district_code' => '1206',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SANDAKAN',
                'district_code' => '1207',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'LABUK & SUGUT',
                'district_code' => '1208',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KINABATANGAN',
                'district_code' => '1209',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TAWAU',
                'district_code' => '1210',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'LAHAD DATU',
                'district_code' => '1211',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SEMPORNA',
                'district_code' => '1212',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KENINGAU',
                'district_code' => '1213',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TAMBUNAN',
                'district_code' => '1214',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PENSIANGAN',
                'district_code' => '1215',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TENOM',
                'district_code' => '1216',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BEAUFORT',
                'district_code' => '1217',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUALA PENYU',
                'district_code' => '1218',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SIPITANG',
                'district_code' => '1219',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PENAMPANG',
                'district_code' => '1221',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KOTA MARUDU',
                'district_code' => '1222',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PITAS',
                'district_code' => '1223',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUNAK',
                'district_code' => '1224',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'TONGOD',
                'district_code' => '1225',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PUTATAN',
                'district_code' => '1226',
                'state_id'      => State::where('state_code', 12) -> first() -> id,
            ],

            // Sarawak
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KUCHING',
                'district_code' => '1301',
                'state_id'      => State::where('state_code', 13) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SRI AMAN',
                'district_code' => '1302',
                'state_id'      => State::where('state_code', 13) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SIBU',
                'district_code' => '1303',
                'state_id'      => State::where('state_code', 13) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MIRI',
                'district_code' => '1304',
                'state_id'      => State::where('state_code', 13) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'LIMBANG',
                'district_code' => '1305',
                'state_id'      => State::where('state_code', 13) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SARIKEI',
                'district_code' => '1306',
                'state_id'      => State::where('state_code', 13) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'KAPIT',
                'district_code' => '1307',
                'state_id'      => State::where('state_code', 13) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'SAMARAHAN',
                'district_code' => '1308',
                'state_id'      => State::where('state_code', 13) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BINTULU',
                'district_code' => '1309',
                'state_id'      => State::where('state_code', 13) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'MUKAH',
                'district_code' => '1310',
                'state_id'      => State::where('state_code', 13) -> first() -> id,
            ],
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'BETONG',
                'district_code' => '1311',
                'state_id'      => State::where('state_code', 13) -> first() -> id,
            ],

            // Wilayah Persekutuan Putrajaya
            [
                'id'            => strtolower(Ulid::generate()),
                'name'          => 'PUTRAJAYA',
                'district_code' => '1601',
                'state_id'      => State::where('state_code', 16) -> first() -> id,
            ],

            // Perlis no district
            // Wilayah Persekutuan Kuala Lumpur no district
            // Wilayah Persekutuan Labuan no district
        ]);
    }
}
