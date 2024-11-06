<?php

namespace Database\Seeders;

use App\Models\RequestPlant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequestPlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = User::where('role', 'admin')->get();
        $users = User::where('role', 'user')->get();

        // Define plant request data
        $requestPlantsData = [
            [
                'plant_name' => 'Aloe Vera',
                'scientific_name' => 'Aloe barbadensis miller',
                'description' => 'Aloe vera is known for its soothing and healing properties for skin conditions.',
                'additional_info' => 'Used in various skincare products for hydration.',
                'is_accepted' => true,
                'status' => 'In Progress',
                'request_by' => $users[0]->id,
                'accept_by' => $admins[0]->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plant_name' => 'Peppermint',
                'scientific_name' => 'Mentha piperita',
                'description' => 'Peppermint is used for treating headaches, digestive issues, and as a natural air freshener.',
                'additional_info' => 'Often used in teas and essential oils.',
                'is_accepted' => false,
                'status' => 'Pending',
                'request_by' => $users[1]->id,
                'accept_by' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plant_name' => 'Berries',
                'scientific_name' => 'Vaccinium uliginosum',
                'description' => 'Berries are often used in herbal remedies and treat skin conditions.',
                'additional_info' => 'Helps in sleep, digestion, and reducing anxiety.',
                'is_accepted' => true,
                'status' => 'In Progress',
                'request_by' => $users[2]->id,
                'accept_by' => $admins[1]->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plant_name' => 'Cucumber',
                'scientific_name' => 'Cucumis sativus',
                'description' => 'Cucumber is commonly used to treat cough, sore throat, and flu symptoms.',
                'additional_info' => 'Helps in sleep, digestion, and reducing anxiety.',
                'is_accepted' => true,
                'status' => 'Completed',
                'request_by' => $users[3]->id,
                'accept_by' => $admins[1]->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plant_name' => 'Lemon',
                'scientific_name' => 'Citrus limon',
                'description' => 'Lemon is commonly used to treat cough, sore throat, and flu symptoms.',
                'additional_info' => 'Helps in sleep, digestion, and reducing anxiety.',
                'is_accepted' => true,
                'status' => 'Completed',
                'request_by' => $users[3]->id,
                'accept_by' => $admins[1]->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plant_name' => 'Chamomile',
                'scientific_name' => 'Matricaria chamomilla',
                'description' => 'Chamomile is well-known for its relaxing effects and is often used in teas.',
                'additional_info' => 'Helps in sleep, digestion, and reducing anxiety.',
                'is_accepted' => true,
                'status' => 'In Progress',
                'request_by' => $users[2]->id,
                'accept_by' => $admins[1]->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plant_name' => 'Ginger',
                'scientific_name' => 'Zingiber officinale',
                'description' => 'Ginger is commonly used to reduce nausea, improve digestion, and fight infections.',
                'additional_info' => 'Often used in teas, soups, and remedies for colds.',
                'is_accepted' => true,
                'status' => 'In Progress',
                'request_by' => $users[3]->id,
                'accept_by' => $admins[0]->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plant_name' => 'Eucalyptus',
                'scientific_name' => 'Eucalyptus globulus',
                'description' => 'Eucalyptus is known for its respiratory benefits and often used in cough relief.',
                'additional_info' => 'Commonly found in throat lozenges and steam inhalations.',
                'is_accepted' => false,
                'status' => 'Pending',
                'request_by' => $users[4]->id,
                'accept_by' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert each request plant data
        foreach ($requestPlantsData as $data) {
            RequestPlant::create($data);
        }
    }
}
