<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RemedySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $remedies = [
            [
                'plant_id' => 1, // Aloe Vera
                'name' => 'Aloe Vera Gel',
                'category' => 'Topical',
                'description' => 'A soothing gel for burns and skin irritations.',
                'image' => 'https://example.com/aloe_vera_gel.jpg',
                'ingredients' => 'Fresh Aloe Vera leaves',
                'prep_time' => 10,
                'frequency' => 'As needed',
                'side_effects' => 'May cause skin irritation in some individuals.',
                'rating' => '4.5',
                'instructions' => 'Extract gel from leaves and apply directly to the skin.',
                'storage' => 'Refrigerate after opening.',
                'dosage' => 'Apply as needed.',
                'approved' => true,
                'source' => 'https://www.healthline.com/aloe-vera'
            ],
            [
                'plant_id' => 2, // Lavender
                'name' => 'Lavender Tea',
                'category' => 'Beverage',
                'description' => 'A calming tea to help with anxiety and sleep.',
                'image' => 'https://example.com/lavender_tea.jpg',
                'ingredients' => 'Dried lavender flowers, water, honey (optional)',
                'prep_time' => 5,
                'frequency' => '1-2 cups per day',
                'side_effects' => 'May cause drowsiness.',
                'rating' => '4.7',
                'instructions' => 'Steep lavender in boiling water for 5 minutes.',
                'storage' => 'Keep dried lavender in a cool, dark place.',
                'dosage' => '1 tsp of dried lavender per cup of water.',
                'approved' => true,
                'source' => 'https://www.healthline.com/lavender-tea'
            ],
            [
                'plant_id' => 3, // Peppermint
                'name' => 'Peppermint Oil',
                'category' => 'Aromatherapy',
                'description' => 'An essential oil used for digestive relief and headaches.',
                'image' => 'https://example.com/peppermint_oil.jpg',
                'ingredients' => '100% pure peppermint oil',
                'prep_time' => 0,
                'frequency' => 'Use as needed',
                'side_effects' => 'May cause skin irritation.',
                'rating' => '4.8',
                'instructions' => 'Dilute with a carrier oil for topical use.',
                'storage' => 'Store in a cool, dark place.',
                'dosage' => '2-3 drops for topical use.',
                'approved' => true,
                'source' => 'https://www.healthline.com/peppermint-oil'
            ],
            [
                'plant_id' => 4, // Basil
                'name' => 'Basil Pesto',
                'category' => 'Culinary',
                'description' => 'A flavorful sauce made with basil, perfect for pasta.',
                'image' => 'https://example.com/basil_pesto.jpg',
                'ingredients' => 'Fresh basil, olive oil, garlic, pine nuts, parmesan cheese',
                'prep_time' => 15,
                'frequency' => 'As needed for cooking',
                'side_effects' => 'Generally safe.',
                'rating' => '4.6',
                'instructions' => 'Blend all ingredients until smooth.',
                'storage' => 'Refrigerate for up to a week.',
                'dosage' => 'Use as desired in recipes.',
                'approved' => true,
                'source' => 'https://www.healthline.com/basil-pesto'
            ],
            [
                'plant_id' => 5, // Ginger
                'name' => 'Ginger Tea',
                'category' => 'Beverage',
                'description' => 'A warm drink that aids digestion and reduces nausea.',
                'image' => 'https://example.com/ginger_tea.jpg',
                'ingredients' => 'Fresh ginger, water, honey (optional)',
                'prep_time' => 10,
                'frequency' => '1-3 cups per day',
                'side_effects' => 'May cause heartburn in some individuals.',
                'rating' => '4.9',
                'instructions' => 'Slice ginger and steep in boiling water for 10 minutes.',
                'storage' => 'Keep ginger root in the fridge.',
                'dosage' => '1-2 inches of ginger per cup.',
                'approved' => true,
                'source' => 'https://www.healthline.com/ginger-tea'
            ],
            // New remedies
            [
                'plant_id' => 6, // Turmeric
                'name' => 'Turmeric Golden Milk',
                'category' => 'Beverage',
                'description' => 'A warm drink with anti-inflammatory properties.',
                'image' => 'https://example.com/turmeric_golden_milk.jpg',
                'ingredients' => 'Turmeric powder, milk, honey, black pepper',
                'prep_time' => 5,
                'frequency' => '1 cup daily',
                'side_effects' => 'May cause stomach upset in some individuals.',
                'rating' => '4.8',
                'instructions' => 'Mix all ingredients and heat until warm.',
                'storage' => 'Drink fresh, do not store.',
                'dosage' => '1 tsp turmeric powder per cup.',
                'approved' => true,
                'source' => 'https://www.healthline.com/turmeric-golden-milk'
            ],
            [
                'plant_id' => 7, // Eucalyptus
                'name' => 'Eucalyptus Oil Vapor Rub',
                'category' => 'Topical',
                'description' => 'A rub for relieving cough and muscle pain.',
                'image' => 'https://example.com/eucalyptus_vapor_rub.jpg',
                'ingredients' => 'Eucalyptus oil, coconut oil, beeswax',
                'prep_time' => 15,
                'frequency' => 'As needed',
                'side_effects' => 'May cause skin irritation.',
                'rating' => '4.5',
                'instructions' => 'Melt beeswax, mix in oils, and cool.',
                'storage' => 'Store in a cool, dark place.',
                'dosage' => 'Apply a small amount to chest or muscles.',
                'approved' => true,
                'source' => 'https://www.healthline.com/eucalyptus-oil'
            ],
            [
                'plant_id' => 8, // Rosemary
                'name' => 'Rosemary Hair Rinse',
                'category' => 'Hair Care',
                'description' => 'A rinse to promote hair growth and health.',
                'image' => 'https://example.com/rosemary_hair_rinse.jpg',
                'ingredients' => 'Fresh rosemary, water, apple cider vinegar',
                'prep_time' => 10,
                'frequency' => 'After shampooing',
                'side_effects' => 'Generally safe.',
                'rating' => '4.7',
                'instructions' => 'Steep rosemary in boiling water, cool, and mix with vinegar.',
                'storage' => 'Refrigerate for up to a week.',
                'dosage' => 'Use as a final rinse.',
                'approved' => true,
                'source' => 'https://www.healthline.com/rosemary-hair-rinse'
            ],
            [
                'plant_id' => 9, // Chamomile
                'name' => 'Chamomile Sleep Spray',
                'category' => 'Aromatherapy',
                'description' => 'A calming spray to promote sleep.',
                'image' => 'https://example.com/chamomile_sleep_spray.jpg',
                'ingredients' => 'Chamomile essential oil, water, spray bottle',
                'prep_time' => 5,
                'frequency' => 'Spray before bed',
                'side_effects' => 'Generally safe, may cause allergic reactions.',
                'rating' => '4.6',
                'instructions' => 'Mix oil and water in a spray bottle.',
                'storage' => 'Store in a cool, dark place.',
                'dosage' => 'Spray lightly on pillow.',
                'approved' => true,
                'source' => 'https://www.healthline.com/chamomile-spray'
            ],
            [
                'plant_id' => 10, // Lemon Balm
                'name' => 'Lemon Balm Extract',
                'category' => 'Supplement',
                'description' => 'An extract used for reducing stress and anxiety.',
                'image' => 'https://example.com/lemon_balm_extract.jpg',
                'ingredients' => 'Fresh lemon balm leaves, alcohol',
                'prep_time' => 20,
                'frequency' => '1-2 teaspoons daily',
                'side_effects' => 'May cause drowsiness.',
                'rating' => '4.4',
                'instructions' => 'Soak leaves in alcohol for 2 weeks, strain.',
                'storage' => 'Store in a cool, dark place.',
                'dosage' => '1-2 teaspoons as needed.',
                'approved' => true,
                'source' => 'https://www.healthline.com/lemon-balm'
            ],
            [
                'plant_id' => 11, // Oregano
                'name' => 'Oregano Oil',
                'category' => 'Supplement',
                'description' => 'An oil used for its antimicrobial properties.',
                'image' => 'https://example.com/oregano_oil.jpg',
                'ingredients' => 'Oregano leaves, olive oil',
                'prep_time' => 15,
                'frequency' => 'As needed',
                'side_effects' => 'May cause gastrointestinal upset.',
                'rating' => '4.3',
                'instructions' => 'Mix oil with oregano leaves and let sit.',
                'storage' => 'Store in a cool, dark place.',
                'dosage' => '1-2 drops in food or drink.',
                'approved' => true,
                'source' => 'https://www.healthline.com/oregano-oil'
            ],
            // Additional Remedies
            [
                'plant_id' => 12, // Ginseng
                'name' => 'Ginseng Tea',
                'category' => 'Beverage',
                'description' => 'A herbal tea known for its energy-boosting effects.',
                'image' => 'https://example.com/ginseng_tea.jpg',
                'ingredients' => 'Ginseng root, water',
                'prep_time' => 5,
                'frequency' => '1-2 cups per day',
                'side_effects' => 'May cause insomnia in some individuals.',
                'rating' => '4.5',
                'instructions' => 'Steep sliced ginseng root in boiling water for 5-10 minutes.',
                'storage' => 'Keep dried ginseng in a cool, dark place.',
                'dosage' => '1-2 grams of root per cup.',
                'approved' => true,
                'source' => 'https://www.healthline.com/ginseng-tea'
            ],
            [
                'plant_id' => 13, // Thyme
                'name' => 'Thyme Infusion',
                'category' => 'Culinary',
                'description' => 'A flavorful infusion for soups and stews.',
                'image' => 'https://example.com/thyme_infusion.jpg',
                'ingredients' => 'Fresh thyme, water',
                'prep_time' => 5,
                'frequency' => 'As needed',
                'side_effects' => 'Generally safe.',
                'rating' => '4.7',
                'instructions' => 'Steep thyme in boiling water for 5 minutes.',
                'storage' => 'Keep fresh thyme in the fridge.',
                'dosage' => '1 tsp of thyme per cup of water.',
                'approved' => true,
                'source' => 'https://www.healthline.com/thyme-infusion'
            ],
            [
                'plant_id' => 14, // Sage
                'name' => 'Sage Tea',
                'category' => 'Beverage',
                'description' => 'A tea known for its antioxidant properties.',
                'image' => 'https://example.com/sage_tea.jpg',
                'ingredients' => 'Dried sage leaves, water',
                'prep_time' => 5,
                'frequency' => '1-2 cups per day',
                'side_effects' => 'May cause digestive upset in large amounts.',
                'rating' => '4.6',
                'instructions' => 'Steep sage leaves in boiling water for 5 minutes.',
                'storage' => 'Keep dried sage in a cool, dark place.',
                'dosage' => '1 tsp per cup of water.',
                'approved' => true,
                'source' => 'https://www.healthline.com/sage-tea'
            ],
            [
                'plant_id' => 15, // Cinnamon
                'name' => 'Cinnamon Water',
                'category' => 'Beverage',
                'description' => 'A drink that may help regulate blood sugar levels.',
                'image' => 'https://example.com/cinnamon_water.jpg',
                'ingredients' => 'Cinnamon stick, water',
                'prep_time' => 10,
                'frequency' => '1 cup daily',
                'side_effects' => 'May cause mouth sores in large amounts.',
                'rating' => '4.8',
                'instructions' => 'Boil cinnamon stick in water for 10 minutes.',
                'storage' => 'Drink fresh, do not store.',
                'dosage' => '1 cinnamon stick per cup.',
                'approved' => true,
                'source' => 'https://www.healthline.com/cinnamon-water'
            ],
            [
                'plant_id' => 16, // Nettle
                'name' => 'Nettle Soup',
                'category' => 'Culinary',
                'description' => 'A nutritious soup made with nettle leaves.',
                'image' => 'https://example.com/nettle_soup.jpg',
                'ingredients' => 'Fresh nettle leaves, vegetable broth, onions, garlic',
                'prep_time' => 30,
                'frequency' => 'As needed',
                'side_effects' => 'May cause allergic reactions in some individuals.',
                'rating' => '4.7',
                'instructions' => 'Cook nettle leaves with broth and blend until smooth.',
                'storage' => 'Store in the fridge for up to 3 days.',
                'dosage' => '1 bowl per serving.',
                'approved' => true,
                'source' => 'https://www.healthline.com/nettle-soup'
            ],
            [
                'plant_id' => 17, // Dandelion
                'name' => 'Dandelion Tea',
                'category' => 'Beverage',
                'description' => 'A herbal tea that supports liver health.',
                'image' => 'https://example.com/dandelion_tea.jpg',
                'ingredients' => 'Dried dandelion roots, water',
                'prep_time' => 10,
                'frequency' => '1-3 cups per day',
                'side_effects' => 'May cause digestive upset.',
                'rating' => '4.5',
                'instructions' => 'Steep roots in boiling water for 10 minutes.',
                'storage' => 'Keep dried roots in a cool, dark place.',
                'dosage' => '1-2 grams per cup.',
                'approved' => true,
                'source' => 'https://www.healthline.com/dandelion-tea'
            ],
            [
                'plant_id' => 18, // Fennel
                'name' => 'Fennel Seed Tea',
                'category' => 'Beverage',
                'description' => 'A tea known for its digestive benefits.',
                'image' => 'https://example.com/fennel_seed_tea.jpg',
                'ingredients' => 'Fennel seeds, water',
                'prep_time' => 5,
                'frequency' => '1-2 cups per day',
                'side_effects' => 'May cause allergic reactions in some individuals.',
                'rating' => '4.6',
                'instructions' => 'Steep fennel seeds in boiling water for 5 minutes.',
                'storage' => 'Keep fennel seeds in a cool, dark place.',
                'dosage' => '1 tsp of seeds per cup.',
                'approved' => true,
                'source' => 'https://www.healthline.com/fennel-seed-tea'
            ],
            [
                'plant_id' => 19, // Cilantro
                'name' => 'Cilantro Pesto',
                'category' => 'Culinary',
                'description' => 'A refreshing sauce made with cilantro.',
                'image' => 'https://example.com/cilantro_pesto.jpg',
                'ingredients' => 'Fresh cilantro, olive oil, garlic, nuts',
                'prep_time' => 15,
                'frequency' => 'As needed for cooking',
                'side_effects' => 'May cause allergic reactions in some individuals.',
                'rating' => '4.4',
                'instructions' => 'Blend all ingredients until smooth.',
                'storage' => 'Refrigerate for up to a week.',
                'dosage' => 'Use as desired in recipes.',
                'approved' => true,
                'source' => 'https://www.healthline.com/cilantro-pesto'
            ],
            [
                'plant_id' => 20, // Catnip
                'name' => 'Catnip Tea',
                'category' => 'Beverage',
                'description' => 'A tea that can help with relaxation and sleep.',
                'image' => 'https://example.com/catnip_tea.jpg',
                'ingredients' => 'Dried catnip leaves, water',
                'prep_time' => 5,
                'frequency' => '1-2 cups per day',
                'side_effects' => 'Generally safe.',
                'rating' => '4.6',
                'instructions' => 'Steep leaves in boiling water for 5 minutes.',
                'storage' => 'Keep dried catnip in a cool, dark place.',
                'dosage' => '1 tsp of leaves per cup.',
                'approved' => true,
                'source' => 'https://www.healthline.com/catnip-tea'
            ],
            [
                'plant_id' => 21, // Hawthorn
                'name' => 'Hawthorn Berry Tincture',
                'category' => 'Supplement',
                'description' => 'A tincture used for heart health support.',
                'image' => 'https://example.com/hawthorn_berry_tincture.jpg',
                'ingredients' => 'Hawthorn berries, alcohol',
                'prep_time' => 30,
                'frequency' => 'As needed',
                'side_effects' => 'May cause gastrointestinal upset.',
                'rating' => '4.5',
                'instructions' => 'Mix berries with alcohol and let sit for 4-6 weeks.',
                'storage' => 'Store in a cool, dark place.',
                'dosage' => '10-20 drops in water.',
                'approved' => true,
                'source' => 'https://www.healthline.com/hawthorn-berry-tincture'
            ],
            [
                'plant_id' => 22, // Peppermint
                'name' => 'Peppermint Oil',
                'category' => 'Supplement',
                'description' => 'An oil known for its soothing effects on digestion.',
                'image' => 'https://example.com/peppermint_oil.jpg',
                'ingredients' => 'Peppermint leaves, olive oil',
                'prep_time' => 15,
                'frequency' => 'As needed',
                'side_effects' => 'May cause allergic reactions in some individuals.',
                'rating' => '4.7',
                'instructions' => 'Mix oil with peppermint leaves and let sit.',
                'storage' => 'Store in a cool, dark place.',
                'dosage' => '1-2 drops in food or drink.',
                'approved' => true,
                'source' => 'https://www.healthline.com/peppermint-oil'
            ],
            [
                'plant_id' => 23, // Lavender
                'name' => 'Lavender Oil',
                'category' => 'Supplement',
                'description' => 'An oil used for its calming effects.',
                'image' => 'https://example.com/lavender_oil.jpg',
                'ingredients' => 'Lavender flowers, olive oil',
                'prep_time' => 15,
                'frequency' => 'As needed',
                'side_effects' => 'May cause skin irritation in some individuals.',
                'rating' => '4.8',
                'instructions' => 'Mix oil with lavender flowers and let sit.',
                'storage' => 'Store in a cool, dark place.',
                'dosage' => '1-2 drops in food or drink.',
                'approved' => true,
                'source' => 'https://www.healthline.com/lavender-oil'
            ],
            [
                'plant_id' => 24, // Valerian
                'name' => 'Valerian Root Tea',
                'category' => 'Beverage',
                'description' => 'A tea that promotes relaxation and sleep.',
                'image' => 'https://example.com/valerian_root_tea.jpg',
                'ingredients' => 'Valerian root, water',
                'prep_time' => 10,
                'frequency' => '1 cup before bedtime',
                'side_effects' => 'May cause drowsiness.',
                'rating' => '4.5',
                'instructions' => 'Steep root in boiling water for 10 minutes.',
                'storage' => 'Keep dried valerian in a cool, dark place.',
                'dosage' => '2-3 grams of root per cup.',
                'approved' => true,
                'source' => 'https://www.healthline.com/valerian-root-tea'
            ],
            [
                'plant_id' => 25, // Ashwagandha
                'name' => 'Ashwagandha Powder',
                'category' => 'Supplement',
                'description' => 'A powder known for its adaptogenic properties.',
                'image' => 'https://example.com/ashwagandha_powder.jpg',
                'ingredients' => 'Ashwagandha root, no additives',
                'prep_time' => 5,
                'frequency' => '1-2 times daily',
                'side_effects' => 'May cause digestive upset in some individuals.',
                'rating' => '4.6',
                'instructions' => 'Mix with water or smoothies.',
                'storage' => 'Store in a cool, dark place.',
                'dosage' => '1-2 teaspoons daily.',
                'approved' => true,
                'source' => 'https://www.healthline.com/ashwagandha-powder'
            ]
            // Add more remedies for the other plants as needed
        ];

        foreach ($remedies as &$remedy) {
            $remedy['created_at'] = now();
            $remedy['updated_at'] = now();
        }

        DB::table('remedies')->insert($remedies);
    }
}
