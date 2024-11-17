<?php

namespace Database\Seeders;

use App\Models\Plant_Local_Name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlantLocalNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->plantLocalNameData() as $plant) {
            Plant_Local_Name::create($plant);
        }
    }


    private function plantLocalNameData(): array
    {
        $plants_local_names = [
            //1
            [
                'name' => 'Kugon',
                'plant_id' => 1
            ],

            //2
            [
                'name' => 'Kamias',
                'plant_id' => 2,
            ],

            //3
            [
                'name' => 'Balimbing',
                'plant_id' => 3
            ],

            //4
            [
                'name' => 'Kalatsutsi',
                'plant_id' => 4
            ],

            //5
            [
                'name' => 'Kakawate',
                'plant_id' => 5
            ],

            //6
            [
                'name' => 'Komprey',
                'plant_id' => 6
            ],



            //7
            [
                'name' => 'Alugbati',
                'plant_id' => 7

            ],



            //8
            [
                'name' => 'Amarillo',
                'plant_id' => 8
            ],



            //9
            [
                'name' => 'Romero',
                'plant_id' => 9
            ],


            //10
            [
                'name' => 'Suganda',
                'plant_id' => 10
            ],

            //10
            [
                'name' => 'Kalabo',
                'plant_id' => 10
            ],


            //11
            [
                'name' => 'Kulitis',
                'plant_id' => 11
            ],


            //12
            [
                'name' => 'Makabuhay',
                'plant_id' => 12
            ],


            //13
            [
                'name' => 'Sabila',
                'plant_id' => 12
            ],


            //14
            [
                'name' => 'Takip-kohol',
                'plant_id' => 12
            ],

            //15
            [
                'name' => 'Bayabas',
                'plant_id' => 15
            ],


            //16
            [
                'name' => 'Atis',
                'plant_id' => 16
            ],



            //17
            [
                'name' => 'Balanoy',
                'plant_id' => 17
            ],

            //17
            [
                'name' => 'Solasi',
                'plant_id' => 17
            ],


            //--------------------------
            //18
            [
                'name' => 'Saging',
                'plant_id' => 18
            ],

            //19

            [
                'name' => 'Akapulko',
                'plant_id' => 19
            ],

            //19

            [
                'name' => 'Bayabas-bayabasan',
                'plant_id' => 19
            ],


            //20

            [
                'name' => 'Kamantigi',
                'plant_id' => 20
            ],

            //21
            [
                'name' => 'Lagundi',
                'plant_id' => 21
            ],


            //22
            [
                'name' => 'Katakataka',
                'plant_id' => 22
            ],

            //23
            [
                'name' => 'Kanya Pistula',
                'plant_id' => 23
            ],

            //24
            [
                'name' => 'Bawang',
                'plant_id' => 24
            ],

            //25
            [
                'name' => 'Mayana',
                'plant_id' => 25
            ],

            //26
            [
                'name' => 'Niyog-Niyogan',
                'plant_id' => 26
            ],


            //27
            [
                'name' => 'Tsaang Gubat',
                'plant_id' => 27
            ],
            //28
            [
                'name' => 'Paragis',
                'plant_id' => 28
            ],

            //29

            [
                'name' => 'Ampalaya',
                'plant_id' => 29
            ],

            //30
            [
                'name' => 'Ulsimang Bato',
                'plant_id' => 30
            ],

            //30
            [
                'name' => 'Pansit-pansitan',
                'plant_id' => 30
            ],

            //31
            [
                'name' => 'Tanglad',
                'plant_id' => 31
            ],

            //32
            [
                'name' => 'Kamatsili',
                'plant_id' => 32
            ],

            //33
            [
                'name' => 'Malunggay',
                'plant_id' => 33
            ],

            //--------------------------------


            //34
            [
                'name' => 'Sambong',
                'plant_id' => 34

            ],

            //35
            [
                'name' => 'Talumpunay',
                'plant_id' => 35
            ],

            //36
            [
                'name' => 'Kantutay',
                'plant_id' => 36
            ],

            //37
            [
                'name' => 'Alagaw',
                'plant_id' => 37
            ],

            //38
            [
                'name' => 'Kilaw',
                'plant_id' => 38
            ],

            //39
            [
                'name' => 'Gugo',
                'plant_id' => 39
            ],

            //40
            [
                'name' => 'Kampanilya',
                'plant_id' => 40
            ],

            //41
            [
                'name' => 'Mansanilya',
                'plant_id' => 41
            ],



            //42
            [
                'name' => 'Banaba',
                'plant_id' => 42
            ],

            //43
            [
                'name' => 'Serpetina',
                'plant_id' => 43
            ],



            //44
            [
                'name' => 'Gisol',
                'plant_id' => 44
            ],

            //45
            [
                'name' => 'Lumbang Bato',
                'plant_id' => 45
            ],

            //46
            [
                'name' => 'Tabako',
                'plant_id' => 46
            ],

            //47
            [
                'name' => 'Adelfa',
                'plant_id' => 47
            ]

        ];

        return $plants_local_names;
    }
}
