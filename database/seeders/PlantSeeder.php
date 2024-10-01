<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plants = [
            // 20 Herbal Plants
            [
                'name' => 'Aloe Vera',
                'scientific' => 'Aloe barbadensis miller',
                'description' => 'A succulent plant species used for its medicinal and healing properties.',
                'likes' => 50,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7d/Aloe_Vera_in_India.jpg',
            ],
            [
                'name' => 'Lavender',
                'scientific' => 'Lavandula',
                'description' => 'A flowering plant known for its soothing fragrance and use in aromatherapy.',
                'likes' => 75,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e6/Lavender_flower_in_Meknes%2C_Morocco.jpg',
            ],
            [
                'name' => 'Peppermint',
                'scientific' => 'Mentha × piperita',
                'description' => 'An herb used for medicinal purposes, including digestive health.',
                'likes' => 65,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/a/ab/Peppermint.JPG',
            ],
            [
                'name' => 'Basil',
                'scientific' => 'Ocimum basilicum',
                'description' => 'A culinary herb used in various dishes, known for its aromatic flavor.',
                'likes' => 80,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/88/Ocimum_basilicum1.jpg',
            ],
            [
                'name' => 'Rosemary',
                'scientific' => 'Salvia rosmarinus',
                'description' => 'An evergreen herb with fragrant needle-like leaves, used in cooking and medicinally.',
                'likes' => 60,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/a/a4/Rosemary.jpg',
            ],
            [
                'name' => 'Thyme',
                'scientific' => 'Thymus vulgaris',
                'description' => 'A herb with culinary uses, known for its strong flavor and aroma.',
                'likes' => 70,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/f/f1/Thyme-Bouquet.jpg',
            ],
            [
                'name' => 'Chamomile',
                'scientific' => 'Matricaria chamomilla',
                'description' => 'A flowering plant known for its calming properties and use in teas.',
                'likes' => 55,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/42/Matricaria_recuitita.JPG',
            ],
            [
                'name' => 'Ginger',
                'scientific' => 'Zingiber officinale',
                'description' => 'A flowering plant whose rhizome is widely used as a spice and for its health benefits.',
                'likes' => 90,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/2c/Zingiber_officinale_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-146.jpg',
            ],
            [
                'name' => 'Turmeric',
                'scientific' => 'Curcuma longa',
                'description' => 'A flowering plant known for its bright yellow rhizome used as a spice and medicinally.',
                'likes' => 88,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/4d/Turmeric_plant.jpg',
            ],
            [
                'name' => 'Mint',
                'scientific' => 'Mentha',
                'description' => 'A group of aromatic herbs used in cooking, teas, and for medicinal purposes.',
                'likes' => 72,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7f/Mentha_arvensis_-_Flickr_-_lalithamba.jpg',
            ],
            [
                'name' => 'Cilantro',
                'scientific' => 'Coriandrum sativum',
                'description' => 'An herb used in various cuisines for its fresh flavor and culinary versatility.',
                'likes' => 78,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/5d/Coriandrum_sativum_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-168.jpg',
            ],
            [
                'name' => 'Sage',
                'scientific' => 'Salvia officinalis',
                'description' => 'A herb known for its earthy flavor and medicinal properties.',
                'likes' => 67,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/53/Salvia_officinalis_Schwebfliege.jpg',
            ],
            [
                'name' => 'Echinacea',
                'scientific' => 'Echinacea purpurea',
                'description' => 'A flowering plant known for its immune-boosting properties and use in herbal remedies.',
                'likes' => 85,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/25/EchinaceaPurpurea.jpg',
            ],
            [
                'name' => 'Catnip',
                'scientific' => 'Nepeta cataria',
                'description' => 'A herb known for its effects on cats and used in herbal medicine.',
                'likes' => 40,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/2e/Nepeta_cataria_001.jpg',
            ],
            [
                'name' => 'Hibiscus',
                'scientific' => 'Hibiscus sabdariffa',
                'description' => 'A flowering plant known for its vibrant flowers and use in teas.',
                'likes' => 66,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/43/Hibiscus_sabdariffa.jpg',
            ],
            [
                'name' => 'Lemon Balm',
                'scientific' => 'Melissa officinalis',
                'description' => 'An herb known for its lemon scent and calming properties.',
                'likes' => 54,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/54/Melissa_officinalis_2015.jpg',
            ],
            [
                'name' => 'Oregano',
                'scientific' => 'Origanum vulgare',
                'description' => 'A culinary herb used in Italian dishes, known for its robust flavor.',
                'likes' => 74,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/a/a1/Origanum_vulgare_-_oregano.jpg',
            ],
            [
                'name' => 'Fennel',
                'scientific' => 'Foeniculum vulgare',
                'description' => 'A flowering plant with a sweet, anise-like flavor used in cooking.',
                'likes' => 62,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/48/Foeniculum_vulgare_-_fruits.jpg',
            ],
            [
                'name' => 'Parsley',
                'scientific' => 'Petroselinum crispum',
                'description' => 'An herb commonly used as a garnish and for its culinary versatility.',
                'likes' => 77,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/45/Petroselinum_crispum.jpg',
            ],

            // 10 DOH-Approved Herbal Plants
            [
                'name' => 'Akapulko',
                'scientific' => 'Cassia alata',
                'description' => 'Known for its anti-fungal properties, commonly used for skin conditions.',
                'likes' => 60,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/80/Starr_080117-2162_Cassia_alata.jpg',
            ],
            [
                'name' => 'Ampalaya',
                'scientific' => 'Momordica charantia',
                'description' => 'Used for its anti-diabetic properties and promoting healthy blood sugar levels.',
                'likes' => 75,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/f/ff/Momordica_charantia_fruit_in_Kolkata_W_IMG_2903.jpg',
            ],
            [
                'name' => 'Bayabas',
                'scientific' => 'Psidium guajava',
                'description' => 'Used as an antiseptic to treat wounds.',
                'likes' => 68,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/d/d6/Guava_image.jpg',
            ],
            [
                'name' => 'Lagundi',
                'scientific' => 'Vitex negundo',
                'description' => 'Used for treating coughs, asthma, and respiratory ailments.',
                'likes' => 88,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/61/Vitex_negundo_plant.jpg',
            ],
            [
                'name' => 'Sambong',
                'scientific' => 'Blumea balsamifera',
                'description' => 'Used for kidney stones and hypertension.',
                'likes' => 70,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/8c/Blumea_balsamifera_plant.jpg',
            ],
            [
                'name' => 'Tsaang Gubat',
                'scientific' => 'Ehretia microphylla',
                'description' => 'Used for gastrointestinal problems like diarrhea and stomach ache.',
                'likes' => 77,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/27/Carmona_retusa.jpg',
            ],
            [
                'name' => 'Yerba Buena',
                'scientific' => 'Clinopodium douglasii',
                'description' => 'Used as an analgesic for body pains and aches.',
                'likes' => 85,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7f/Clinopodium_douglasii.jpg',
            ],
            [
                'name' => 'Ulasimang Bato',
                'scientific' => 'Peperomia pellucida',
                'description' => 'Used for lowering uric acid in gout.',
                'likes' => 92,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7d/Peperomia_pellucida_4.jpg',
            ],
            [
                'name' => 'Niyog-Niyogan',
                'scientific' => 'Quisqualis indica',
                'description' => 'Used for eliminating intestinal parasites.',
                'likes' => 67,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/87/Quisqualis_indica.jpg',
            ],
            [
                'name' => 'Kalamansi',
                'scientific' => 'Citrus microcarpa',
                'description' => 'A small, citrus fruit commonly used in the Philippines for colds, coughs, and sore throat.',
                'likes' => 83,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/51/Calamondin_fruit.jpg',
            ],
            [
                'name' => 'Malunggay',
                'scientific' => 'Moringa oleifera',
                'description' => 'Known as the "miracle tree," it is rich in vitamins and minerals and used to boost nutrition.',
                'likes' => 95,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/a/a3/Moringa_oleifera.jpg',
            ],
            [
                'name' => 'Papaya',
                'scientific' => 'Carica papaya',
                'description' => 'Used for its enzyme papain, which aids in digestion, and for skin health.',
                'likes' => 82,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Carica_papaya_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-031.jpg',
            ],
            [
                'name' => 'Sabila',
                'scientific' => 'Aloe vera',
                'description' => 'A succulent plant used for treating burns, wounds, and skin issues.',
                'likes' => 88,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7d/Aloe_Vera_in_India.jpg',
            ],
            [
                'name' => 'Tanglad',
                'scientific' => 'Cymbopogon citratus',
                'description' => 'Also known as lemongrass, used for digestive health and reducing high blood pressure.',
                'likes' => 79,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Cymbopogon_citratus_in_Tanzania.jpg',
            ],

        ];


        foreach ($plants as &$plant) {
            $plant['created_at'] = now();
            $plant['updated_at'] = now();
        }

        DB::table('plants')->insert($plants);
    }
}
