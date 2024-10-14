<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequestPlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('request_plants')->insert([
            [
                'user_id' => 1,
                'plant_name' => 'Aloe Vera',
                'scientific' => 'Aloe barbadensis miller',
                'description' => 'Aloe Vera is known for its healing and soothing properties.',
                'handle_by' => null,
                'image_path' => 'images/aloe_vera.jpg',
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'plant_name' => 'Lavender',
                'scientific' => 'Lavandula angustifolia',
                'description' => 'Lavender is commonly used for aromatherapy and relaxation.',
                'handle_by' => 1,
                'image_path' => 'images/lavender.jpg',
                'status' => 'Ongoing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'plant_name' => 'Chamomile',
                'scientific' => 'Matricaria chamomilla',
                'description' => 'Chamomile is used for making tea that helps with sleep.',
                'handle_by' => null,
                'image_path' => 'images/chamomile.jpg',
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'plant_name' => 'Peppermint',
                'scientific' => 'Mentha piperita',
                'description' => 'Peppermint is often used for its refreshing flavor and digestive benefits.',
                'handle_by' => null,
                'image_path' => 'images/peppermint.jpg',
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'plant_name' => 'Rosemary',
                'scientific' => 'Rosmarinus officinalis',
                'description' => 'Rosemary is a popular herb in cooking and has medicinal properties.',
                'handle_by' => 1,
                'image_path' => 'images/rosemary.jpg',
                'status' => 'Ongoing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'plant_name' => 'Basil',
                'scientific' => 'Ocimum basilicum',
                'description' => 'Basil is widely used in culinary dishes, especially in Italian cuisine.',
                'handle_by' => 1,
                'image_path' => 'images/basil.jpg',
                'status' => 'Ongoing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'plant_name' => 'Thyme',
                'scientific' => 'Thymus vulgaris',
                'description' => 'Thyme is used for both culinary and medicinal purposes.',
                'handle_by' => null,
                'image_path' => 'images/thyme.jpg',
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'plant_name' => 'Sage',
                'scientific' => 'Salvia officinalis',
                'description' => 'Sage is an herb known for its earthy flavor and medicinal use.',
                'handle_by' => 1,
                'image_path' => 'images/sage.jpg',
                'status' => 'Ongoing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'plant_name' => 'Eucalyptus',
                'scientific' => 'Eucalyptus globulus',
                'description' => 'Eucalyptus leaves are used for their refreshing aroma and health benefits.',
                'handle_by' => null,
                'image_path' => 'images/eucalyptus.jpg',
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'plant_name' => 'Ginger',
                'scientific' => 'Zingiber officinale',
                'description' => 'Ginger is known for its spicy flavor and digestive benefits.',
                'handle_by' => null,
                'image_path' => 'images/ginger.jpg',
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
