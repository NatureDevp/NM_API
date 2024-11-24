<?php

namespace Database\Seeders;

use App\Models\Remedy_Remedies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RemedyRemediesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        foreach ($this->remedyData() as $remedy) {
            Remedy_Remedies::create($remedy);
        }
    }

    private function remedyData(): array
    {
        $remedies = [
            //Kugon
            [
                'name' => 'Herbal Decoction',
                'description' => 'A decoction made from Kugon roots helps alleviate diarrhea by soothing the digestive system and reducing inflammation',
                'status' => 'Active',
                // 'ingredient' => ['5 chopped fresh roots', '2 glasses of water'],

                // 'step' => [
                //     '1. Boil 5 chopped fresh roots in 2 glasses of water for 15 minutes',
                //     '2. Strain the decoction to remove the roots'
                // ],

                // 'usage' => [
                //     'Adults: 1 cup, 3 times a day and after every loose bowel movement,Children (Babies): 1 tablespoon, 3 times a day and after every loose bowel movement,Children (2-6 yrs.): 1/4 cup, 3 times a day and after every loose bowel movement,Children (7-12 yrs.): 1/2 cup, 3 times a day and after every loose bowel movement',
                // ],

                'plant_id' => 1,
                'create_id' => 2,

            ],

            //Kamias
            [
                'name' => 'Poultice',
                'description' => 'A poultice made from chopped and mashed Kamias fruits helps to reduce swelling and relieve pain in the salivary glands.',
                'status' => 'Active',
                // 'ingredient' => ['Kamias fruits'],
                // 'step' => ['Chop and mash the Kamias fruits.'],
                // 'usage' => [
                //     'Apply the mashed fruits directly as a poultice on the swollen glands.',
                //     'Apply the poultice for 30 minutes, 3 times a day.'
                // ],

                'plant_id' => 2,
                'create_id' => 2,
            ],

            //Balimbing
            [
                'name' => 'Juice Extract',
                'description' => 'Juice extracted from Balimbing leaves helps to relieve itchiness and soothe the skin affected by chicken pox.',
                'status' => 'Active',
                // 'ingredient' => ['Young Balimbing leaves'],
                // 'step' => ['Crush or chop young Balimbing leaves to extract the juice.'],
                // 'usage' => [
                //     'Apply the juice on the skin or lesions to relieve itchiness.',
                //     'Apply the juice 3 times a day. Do not rub the juice on the skin.'
                // ],

                'plant_id' => 3,
                'create_id' => 2,
            ],

            //Kalatsutsi
            [
                'name' => 'Oil Infusion',
                'description' => 'An oil infusion made from Kalatsutsi leaves helps to treat scabies by reducing itching and killing the mites responsible for the infection.',
                'status' => 'Active',
                // 'ingredient' => [
                //     '1 cup of chopped fresh Kalatsutsi leaves',
                //     'Small branch of Kalatsutsi 1 cup of coconut oil'
                // ],
                // 'step' => [
                //     '1. Boil 1 cup of chopped fresh leaves and a small branch in 1 cup of coconut oil for 5 minutes',
                //     '2. Let the mixture cool and keep it in a bottle for future use.'
                // ],
                // 'usage' => ['Apply the oil infusion liberally on the infected body part after taking a bath.'],

                'plant_id' => 4,
                'create_id' => 2,
            ],

            //Kakawate
            [
                'name' => 'Juice Extract',
                'description' => 'The juice extracted from Kakawate leaves helps to treat scabies by reducing itching and killing the mites responsible for the infection.',
                'status' => 'Active',
                // 'ingredient' => ['Kakawate leaves'],
                // 'step' => ['Extract the juice from the Kakawate leaves.'],
                // 'usage' => [' Apply the juice on the affected parts after taking a bath and at bedtime.'],
                'plant_id' => 5,
                'create_id' => 2,
            ],

            //Comfrey
            [
                'name' => 'Juice Extract',
                'description' => 'The juice extracted from Comfrey leaves helps to relieve inflammation and promote healing of the affected skin.',
                'status' => 'Active',
                // 'ingredient' => ['Comfrey leaves'],
                // 'step' => [
                //     '1. Crush Comfrey leaves to extract the juice.',
                //     '2. Apply the juice on the affected skin'
                // ],
                // 'usage' => ['Apply the juice 3 times a day.'],
                'plant_id' => 6,
                'create_id' => 2,
            ],


            //Alugbati
            [
                'name' => 'Poultice',
                'description' => 'A poultice made from Alugbati leaves helps to draw out infection and reduce inflammation. Applying this herbal remedy to the affected area can provide relief from pain and swelling.',
                'status' => 'Active',
                // 'ingredient' => ['2 Alugbati leaves'],
                // 'step' => [
                //     '1. Crush 2 Alugbati leaves.',
                //     '2. Apply the crushed leaves directly on the abscess or boil. Cover with a clean cloth to hold the poultice in place.'
                // ],
                // 'usage' => ['Apply as a poultice, 2 times a day.'],
                'plant_id' => 7,
                'create_id' => 2,
            ],


            //Amarillo
            [
                'name' => 'Poultice',
                'description' => 'A poultice made from Amarillo leaves and flowers helps to soothe and heal abscesses and boils. The natural antiseptic properties of this plant aid in preventing infection and speeding up recovery.',
                'status' => 'Active',
                // 'ingredient' => ['3 Amarillo leaves ', '3 Amarillo leaves '],
                // 'step' => [
                //     '1.	Crush 3 Amarillo leaves and 2 flowers.',
                //     '2.	Apply the crushed mixture directly on the abscess or boil.',
                //     '3.	Cover with a clean cloth to hold the poultice in place.'
                // ],

                'plant_id' => 8,
                'create_id' => 2,
            ],

            //Rosemary
            [
                'name' => 'Juice Application',

                'description' => 'Applying rosemary juice helps to reduce pimples and acne. Rosemary has antimicrobial properties that help to clear the skin and prevent further breakouts.',
                'status' => 'Active',
                // 'ingredient' => ['5 rosemary leaves'],
                // 'step' => ['Crush 5 leaves and extract the juice.'],
                // 'usage' => [
                //     'Apply the juice on the face after washing with warm water.',
                //     'Leave it on overnight.'
                // ],
                'rating' => 0,
                'plant_id' => 9,
                'create_id' => 2,
            ],

            //oregano
            [
                'name' => 'Herbal Decoction',
                'description' => 'A herbal decoction made from oregano leaves helps to soothe the throat and alleviate cough. The essential oils in oregano leaves act as a natural expectorant, helping to clear mucus from the airways.',
                'status' => 'Active',
                // 'ingredient' => [
                //     '1 cup of chopped fresh oregano leaves ',
                //     '2 glasses of water'
                // ],
                // 'step' => [
                //     '1. Boil 1 cup of chopped fresh oregano leaves in 2 glasses of water for 15 minutes.',
                //     '2. Strain the decoction to remove the leaves.',
                //     '3. Allow the decoction to cool slightly before drinking.'
                // ],
                // 'usage' => [
                //     'Adults: 1/2 cup, 3 times a day.',
                //     'Children (babies): 1 teaspoon, 3 times a day.',
                //     'Children (2-6 yrs.): 2 tablespoons, 3 times a day.',
                //     'Children (7-12 yrs.): 1/4 cup, 3 times a day.'
                // ],
                'plant_id' => 10,
                'create_id' => 2,
            ],


            //Kulitis
            [
                'name' => 'Herbal Decoction ',
                'description' => 'A decoction made from Kulitis leaves and flowers helps reduce asthma symptoms by decreasing mucus production and inflammation in the airways.',
                'status' => 'Active',
                // 'ingredient' => [
                //     '5 chopped young Kulitis stems with flowers and leaves',
                //     '5 glasses of water'
                // ],
                // 'step' => [
                //     '1. Boil 5 chopped young stems with flowers and leaves in 5 glasses of water for 10 minutes',
                //     '2. Allow the decoction to cool before straining.'

                // ],
                // 'usage' => [
                //     'Adults: 1 cup, 4 times a day.',
                //     'Children: 1/2 cup, 4 times a day.',
                //     'Babies: 2 tsps, 4 times a day.',
                // ],
                'plant_id' => 11,
                'create_id' => 2,
            ],


            //Makabuhay
            [
                'name' => 'Hot Foot Bath',
                'description' => 'A hot foot bath made from Makabuhay vine helps relieve the symptoms of athlete\'s foot by reducing itching and killing the fungi responsible for the infection. ',
                'status' => 'Active',
                // 'ingredient' => [
                //     'One-foot long portion of Makabuhay vine',
                //     '5 glasses of water'
                // ],
                // 'step' => [
                //     '1. Chop a one-foot long portion of the vine.',
                //     '2. Boil the chopped vine in 5 glasses of water for 15 minutes.'
                // ],
                // 'usage' => [
                //     'Soak the infected foot in the hot decoction for 15 minutes or as can be tolerated. While the foot is soaked, rub between the toes with cotton applicators to remove dead skin and prick the vesicles. Soak for 10 more minutes after removing the dead skin.',
                //     'Soak foot 2 times a day for severe infections; otherwise, soak once a day only.'
                // ],

                'plant_id' => 12,
                'create_id' => 2,
            ],


            //Aloe vera
            [
                'name' => 'Aloe Vera Juice Extract',
                'description' => 'Aloe vera juice is known for its soothing and healing properties. Applying the juice to burns can help reduce pain and promote faster healing.',
                'status' => 'Active',
                // 'ingredient' => ['Sabila leaves'],
                // 'step' => [
                //     '1. Wash the leaves with soap and water.',
                //     '2. Pound the leaves and extract the juice.'
                // ],
                // 'usage' => [
                //     'Apply the juice on the burn area after soaking in a warm salt solution.',
                //     'Apply once a day.'
                // ],

                'plant_id' => 13,
                'create_id' => 2,
            ],

            //Aloe Vera
            [
                'name' => 'Sabila Leaves Poultice (Aloe Vera Poultice)',
                'description' => 'Aloe vera poultice is a natural remedy for sprained ankles or wrists. Aloe vera helps reduce swelling and promotes faster healing.',
                'status' => 'Active',
                // 'ingredient' => ['2-3 fresh Aloe Vera leaves'],
                // 'step' => [
                //     'Pound 2 to 3 fresh leaves of Aloe Vera.',
                //     'Apply directly as poultice on the ankle or wrist for 30 minutes, 3 times a day.',
                //     'Use a bandage to hold the poultice in place.'
                // ],
                // 'usage' => ['Apply poultice 3 times a day for 30 minutes.'],

                'plant_id' => 13,
                'create_id' => 2,
            ],


            //Aloe Vera
            [
                'name' => 'Aloe Vera Hair Mask',
                'description' => 'Aloe vera hair mask is known for its moisturizing properties, promoting hair growth, soothing irritation, and improving overall hair health.',
                'status' => 'Active',
                // 'ingredient' => ['3-4 tbsp Aloe Vera gel', '6-8 tbsp Coconut oil'],
                // 'step' => [
                //     'Start by preparing the Aloe Vera leaf, cut open the leaf to expose the gel. Scoop out the gel into a bowl.',
                //     'Mix the Aloe Vera gel with coconut oil. Blend until smooth.'
                // ],
                // 'usage' => [
                //     'Comb the mixture through the hair to ensure even coverage.',
                //     'Wash hair with mild shampoo after application.',
                //     'Repeat 2-3 times a week.'
                // ],

                'plant_id' => 13,
                'create_id' => 2,
            ],


            //Aloe Vera
            [
                'name' => 'Aloe Vera Oil for Hair Growth',
                'description' => 'Aloe Vera oil is used to promote hair growth, reduce dandruff, and improve scalp health, leading to thicker, shinier hair.',
                'status' => 'Active',
                // 'ingredient' => ['1 cup Aloe Vera', '1 cup Coconut Oil'],
                // 'step' => [
                //     'Rinse the Aloe Vera leaf and allow it to sit for 10-15 mins to drain yellow resin.',
                //     'Peel the sides of the leaf with a vegetable peeler.',
                //     'Chop the leaf into pieces and blend to a smooth paste.',
                //     'Simmer the paste in a saucepan on low flame until it clumps.',
                //     'Strain the oil through a cheesecloth and store in a clean bottle.'
                // ],
                // 'usage' => [
                //     'Massage the oil into the scalp and leave it on for 30 minutes before washing it off.',
                //     'Use twice a week for best results, or apply a small amount to clean hair to add shine.'
                // ],

                'plant_id' => 13,
                'create_id' => 2,
            ],

            //Bayabas
            [
                'name' => 'Herbal Decoction for Diarrhea',
                'description' => 'A decoction made from Bayabas leaves helps alleviate diarrhea by soothing the digestive system and reducing inflammation.',
                'status' => 'Active',
                // 'ingredient' => ['10 chopped Bayabas leaves', '2 glasses of water'],
                // 'step' => [
                //     'Boil 10 chopped Bayabas leaves in 2 glasses of water for 15 minutes.',
                //     'Strain the decoction to remove the leaves.'
                // ],
                // 'usage' => [
                //     'Adults: 1 cup, 3 times a day and after every loose bowel movement.',
                //     'Children (Babies): 1 tablespoon, 3 times a day and after every loose bowel movement.',
                //     'Children (2-6 yrs.): 1/4 cup, 3 times a day and after every loose bowel movement.',
                //     'Children (7-12 yrs.): 1/2 cup, 3 times a day and after every loose bowel movement.'
                // ],
                'plant_id' => 15,
                'create_id' => 2,
            ],

            //Bayabas
            [
                'name' => 'Herbal Decoction Bath for Ringworm',
                'description' => 'A daily bath with a decoction made from Guava leaves helps treat ringworm by reducing fungal infections and soothing the skin.',
                'status' => 'Active',
                // 'ingredient' => ['10 cups chopped fresh Bayabas leaves', '1 gallon of water'],
                // 'step' => [
                //     'Boil 10 cups of chopped fresh Bayabas leaves in 1 gallon of water for 15 minutes.',
                //     'Strain the decoction and add enough cold water to fill up one big pail. Bathe with this decoction while still hot.'
                // ],
                // 'usage' => [
                //     'Use this decoction for bathing daily until the ringworm is healed.'
                // ],

                'plant_id' => 15,
                'create_id' => 2,
            ],

            //Bayabas
            [
                'name' => 'Guava Herbal Inhalation for Respiratory Relief',
                'description' => 'Guava Herbal Inhalation utilizes the aromatic properties of fresh Bayabas leaves to provide soothing relief for respiratory discomfort.',
                'status' => 'Active',
                // 'ingredient' => ['Fresh Bayabas leaves'],
                // 'step' => [
                //     'Take a handful of fresh Bayabas leaves and crush them thoroughly to release their aroma.',
                //     'Bring the crushed leaves close to the patient\'s nose and instruct the patient to take deep breaths and smell the aroma of the leaves.',
                //     'If comfortable, gently place the crushed leaves over the patient\'s nose to enhance inhalation of the essence.',
                //     'Encourage the patient to continue inhaling the aroma until they feel relief from respiratory discomfort.'
                // ],
                // 'usage' => [
                //     'Use as needed, especially during episodes of coughing or difficulty breathing.'
                // ],

                'plant_id' => 15,
                'create_id' => 2,
            ],

            //Takip-kohol
            [
                'name' => 'Takip-kohol Poultice',
                'description' => 'Takip-kohol poultice is a natural remedy used to treat eczema. Takip-kohol is known for its anti-inflammatory and wound-healing properties, making it an effective treatment for skin conditions like eczema. The poultice, when applied to the skin, reduces itching, calms redness, and promotes faster healing of eczema-affected areas.',
                'status' => 'Active',
                // 'ingredient' => ['10 leaves of Takip-kohol (Centella asiatica)'],
                // 'step' => [
                //     'Wash the Takip-kohol leaves thoroughly to remove any dirt or debris.',
                //     'Pound the leaves into a soft paste.',
                //     'Apply the paste onto a clean cloth or directly on the skin.',
                //     'Secure the poultice in place with a bandage or wrap to ensure it stays in contact with the skin.',
                //     'Leave the poultice on the affected area overnight for best results.'
                // ],
                // 'usage' => [
                //     'Apply the poultice to the affected area after a hot compress or foot bath. Leave it on overnight to allow the healing properties of Takip-kohol to soothe eczema symptoms.'
                // ],

                'plant_id' => 14,
                'create_id' => 2,
            ],

            //Atis
            [
                'name' => 'Seed Oil Mixture',
                'description' => 'A mixture of crushed Atis seeds and oil is applied to the scalp and hair to eliminate lice. The treatment is left on overnight and washed off the next morning.',
                'status' => 'Active',
                // 'ingredient' => ['1/2 cup of Atis seeds', '1 cup of oil'],
                // 'step' => [
                //     'Pound 1/2 cup of Atis seeds.',
                //     'Mix the crushed seeds with 1 cup of oil.'
                // ],
                // 'usage' => [
                //     'Apply the mixture thoroughly over the scalp and hair.',
                //     'Wrap the hair and head with a piece of clean cloth and leave it on overnight.',
                //     'Shampoo the next morning and comb hair with a fine comb.',
                //     'Repeat the treatment daily for 3-5 days or until all lice and nits are gone.'
                // ],
                'plant_id' => 16,
                'create_id' => 2,
            ],

            //Atis
            [
                'name' => 'Atis Juice Extract',
                'description' => 'The juice extracted from unripe Atis fruit helps to reduce inflammation and promote healing of infected mosquito bites. The fruit contains compounds that soothe the skin and reduce itching.',
                'status' => 'Active',
                // 'ingredient' => ['1 unripe Atis fruit'],
                // 'step' => [
                //     'Pound and extract the juice from one unripe fruit.'
                // ],
                // 'usage' => [
                //     'Apply the juice directly on the infected bites.',
                //     'Apply the juice 3 times a day.'
                // ],

                'plant_id' => 16,
                'create_id' => 2,
            ],

            //Atis
            [
                'name' => 'Custard Apple Herbal Inhalation',
                'description' => 'The Custard apple (Atis) herbal inhalation remedy helps treat fainting spells and dizziness. By using fresh leaves from the Custard apple plant (Annona squamosa), this remedy uses the pleasant smell of the crushed leaves to revive the patient.',
                'status' => 'Active',
                // 'ingredient' => ['2 to 3 fresh Custard apple leaves (Annona squamosa)'],
                // 'step' => [
                //     'Crush the Custard apple leaves thoroughly to release their juice and aroma.',
                //     'Bring the crushed leaves close to the patient\'s nose.',
                //     'Let the patient inhale the aroma deeply.',
                //     'Continue to let the patient smell the leaves until the dizziness or fainting spell subsides.'
                // ],
                // 'usage' => [
                //     'This remedy is ideal when the patient is breathing and has a strong pulse but is experiencing fainting spells or dizziness. Crush fresh Custard apple leaves and allow the patient to inhale the aroma until they feel better.'
                // ],
                'plant_id' => 16,
                'create_id' => 2,
            ],



            //Balanoy
            [
                'name' => 'Juice Extract',
                'description' => "Juice extracted from Balanoy leaves helps to treat athlete's foot by reducing the fungal infection and soothing the affected skin",
                'status' => 'Active',
                // 'ingredient' => ['15-20 Balanoy fresh leaves ', 'Water(Enough to make a paste)'],

                // 'step' => [
                //     'Start by finely chop the 15-20 Balanoy leaves.',
                //     'Crush the chopped leaves to extract juice. You may use a mortar and pestle to aid in the extraction.'
                // ],

                // 'usage' => [
                //     'Clean the affected area and dry thoroughly',
                //     'Using a clean cotton pad, apply the extracted juice directly onto the affected skin',
                //     'Allow the juice to sit for 15-20 minutes, then rinse off with lukewarm water and dry completely',
                //     'Repeat the application 2-3 times daily until the infection clears up',

                // ],
                'plant_id' => 17,
                'create_id' => 1,

            ],


            //Young saging
            [
                'name' => 'Poultice',
                'description' => "A poultice made from young saging leaves can help to stop bleeding and promote healing. The juice from these leaves acts as a natural antiseptic to prevent infection.",
                'status' => 'Active',
                // 'ingredient' => ['Young saging leaves'],

                // 'step' => [
                //     'Start by pounding young saging leaves until they are soft and release juice.',
                //     'Squeeze some juice directly over the wound to begin disinfecting'
                // ],

                // 'usage' => [
                //     'Apply the pounded leaves with pressure over the wound.',
                //     'Bandage snugly but not too tight.',
                //     'If bleeding does not stop after 15 minutes, bring the patient to the nearest hospital or clinic for proper treatment.',
                // ],

                'plant_id' => 18,
                'create_id' => 1,

            ],

            //Akapulko

            [
                'name' => 'Digestive or Cleansing Aid',
                'description' => "Akapulko seeds are traditionally used for their medicinal properties. When dried and pulverized, they can be mixed with milk or water to create a remedy for digestive relief or cleansing purposes. This remedy is commonly used in both adults and children.",
                'status' => 'Active',
                // 'ingredient' => ['1 cup of dried Akapulko seeds', '1 cup of milk or water'],

                // 'step' => [
                //     'Start by roasting 1 cup of dried Akapulko seeds in a frying pan over low heat, without adding oil, until they are dry and aromatic.',
                //     'Allow the roasted seeds to cool, then pulverize them into a fine powder using a mortar and pestle or a grinder.',
                //     'Mix the pulverized seeds with 1 cup of milk or water until well-blended',

                // ],

                // 'usage' => [
                //     'Adults: 1 teaspoon, 2 hours after supper.',
                //     'Children Ages 7-9: ¼ teaspoon, 2 hours after supper.',
                //     'Children Ages 10-12: ½ teaspoon, 2 hours after supper.',
                // ],

                'plant_id' => 19,
                'create_id' => 1,

            ],

            //Akapulko
            [
                'name' => 'Ointment',
                'description' => "An ointment made from Akapulko leaves is effective in treating fungal infections like ringworm. The leaves are pounded and applied directly to the affected area.",
                'status' => 'Active',
                // 'ingredient' => ['Fresh, matured Akapulko leaves',],

                // 'step' => [
                //     'Start by Wash fresh leaves of Akapulko thoroughly and cut in small pieces.',
                //     'Add one glass of cooking oil or coconut oil to one glass of cut fresh leaves.',
                //     'Fry until crispy. Remove from the heat; strain.',
                //     'Cut 2 white candles into small pieces',
                //     'In a cooking pot, pour the strained oil together with the candle pieces',
                //     'Stir until the candle has melted.',
                //     'Pour the mixture into a clean container; cover when cool',
                //     'Apply the Akapulko herbal ointment to affected areas twice daily.',

                // ],

                // 'usage' => [
                //     'Apply the ointment to the affected area twice daily until the infection clears',

                // ],
                'plant_id' => 19,
                'create_id' => 1,

            ],

            //Akapulko
            [
                'name' => 'Decoction/ Boil',

                'description' => "A decoction made from Akapulko leaves can be used to wash the affected area to treat skin infections and eczema.",
                'status' => 'Active',
                // 'ingredient' => ['1 cup of chopped Akapulko leaves', '2 cups of water'],

                // 'step' => [
                //     'Start by boiling 1 cup of chopped Akapulko leaves in 2 cups of water for 10 minutes',
                //     'Let it cool and strain the liquid.',
                //     'Use the decoction to wash the affected area.',

                // ],

                // 'usage' => [
                //     'Use the decoction to wash the affected area twice daily until the condition improves.',
                // ],

                'plant_id' => 19,
                'create_id' => 1,

            ],


            //Kamantigi

            [
                'name' => 'Poultice ',

                'description' => "A poultice made from Kamantigul flowers can help reduce itching and inflammation associated with athlete's foot, promoting faster healing. ",
                'status' => 'Active',
                // 'ingredient' => ['Kamantigul flowers ',],

                // 'step' => [
                //     'Start by chopping the collected flower of Kamantigi',
                //     'Apply the chopped flowers as a poultice on the infected part'

                // ],

                // 'usage' => [
                //     'Clean and dry the affected area before application.',
                //     'Apply the poultice directly to the infected area and cover with a clean cloth or bandage to keep it in place.',
                //     'Leave the poultice on for 20-30 minutes, then remove and rinse with warm water.',
                //     'Repeat 2-3 times daily until the infection clears up or symptoms improve.'


                // ],
                'plant_id' => 20,
                'create_id' => 1,

            ],

            //Kamantigi
            [
                'name' => 'Compress or Poultice ',

                'description' => "A compress or poultice made from crushed Kamantigul flowers helps to reduce fungal infections and soothe the skin affected by ringworm.",
                'status' => 'Active',
                // 'ingredient' => ['5-10 Kamantigul flowers (amount depends on the size of the infection)',],

                // 'step' => [
                //     'Start by crushing 5-10 Kamantigi flowers until the juice is extracted.',
                //     'Apply the juice and flowers directly over the infected part as a compress.'

                // ],

                // 'usage' => [
                //     'Apply the compress for 30 minutes, 2 times a day. ',
                // ],

                'plant_id' => 20,
                'create_id' => 1,

            ],

            //Lagundi
            [
                'name' => 'Lagundi Tea',

                'description' => "An herbal tea made from Lagundi leaves helps relieve cough and asthma symptoms",
                'status' => 'Active',
                // 'ingredient' => ['6 tablespoons of fresh Lagundi leaves (or 2 tablespoons dried)', '2 cups of water', '(Optional) Honey or lemon for flavor'],

                // 'step' => [
                //     'Start by gathering fresh Lagundi leaves (around 6 tablespoons) or dried Lagundi leaves (about 2 tablespoons).',
                //     'Rinse the leaves thoroughly with clean water to remove any dirt or impurities.',
                //     'In a pot, add 2 cups of water and bring it to a boil.',
                //     'Once the water is boiling, add the Lagundi leaves to the pot.',
                //     'Let the leaves simmer in the boiling water for about 10-15 minutes, allowing the medicinal properties to infuse into the water.',
                //     'After simmering, remove the pot from heat and strain the tea to remove the leaves.',
                //     'Let the tea cool for a few minutes, then drink warm. You can add honey or lemon to taste if desired.',

                // ],

                // 'usage' => [
                //     'Drink 1 cup after breakfast and 1 cup after dinner for best results.',
                //     'Continue using for 5-7 days or until symptoms like cough and asthma subside'


                // ],
                'plant_id' => 21,
                'create_id' => 1,

            ],


            //Lagundi
            [
                'name' => 'Lagundi Herbal Decoction ',

                'description' => "An herbal decoction made from Lagundi leaves helps to reduce fever and provide relief from the symptoms of chicken pox. ",
                'status' => 'Active',
                // 'ingredient' => ['4 tablespoons of chopped dried Lagundi leaves or 6 tablespoons of chopped fresh Lagundi leaves', '2 glasses of water'],

                // 'step' => [
                //     'Start by boiling 4 tablespoons of chopped dried Lagundi leaves or 6 tablespoons of chopped fresh Lagundi leaves in 2 glasses of water for 15 minutes. ',
                //     'Strain the decoction to remove the leaves.'

                // ],

                // 'usage' => [
                //     'Adults: 1 cup, every 4 hours.',
                //     'Children (babies): 1 tablespoon, every 4 hours.',
                //     'Children (2-6 yrs.): 1/4 cup, every 4 hours.',
                //     'Children (7-12 yrs.): 1/2 cup, every 4 hours.'
                // ],
                'plant_id' => 21,
                'create_id' => 1,

            ],

            //Lagundi
            [
                'name' => 'Lagundi Tea',

                'description' => "Lagundi Tea is an herbal remedy made from Lagundi leaves, known for its anti-inflammatory and antipyretic properties, making it effective in reducing fever and alleviating respiratory issues.",
                'status' => 'Active',
                // 'ingredient' => ['4 tablespoons of chopped dried lagundi leaves or 6 tablespoons of fresh chopped lagundo leaves', '2 cups of purified water'],

                // 'step' => [
                //     'Start by washing fresh Lagundi leaves to remove dirt.',
                //     'In a pot, bring 2 cups of purified water to a boil.',
                //     'Add the chopped Lagundi leaves (fresh or dried) to the boiling water.',
                //     'Let it simmer for 15 minutes.',
                //     'Strain the tea into a cup. The tea is ready to serve.'

                // ],

                // 'usage' => [
                //     'Adults: Drink 1 cup every 4 hours.',
                //     'Children:Babies: 1 tablespoon every 4 hours. Ages 7-12 years: ½ cup every 4 hours'
                // ],
                'plant_id' => 21,
                'create_id' => 1,

            ],

            //Kataka-taka
            [
                'name' => 'Juice Extract',

                'description' => "The juice extracted from Kataka-taka leaves helps to reduce inflammation and promote healing of infected mosquito bites. The plant's natural compounds soothe the skin and reduce itching.",
                'status' => 'Active',
                // 'ingredient' => ['5-10 Kataka-taka leaves'],

                // 'step' => [
                //     'Start by gathering the katakataka leaves.',
                //     'Pound the 5-10 leaves and extract the juice.',
                //     'Apply the juice directly on the infected bites'

                // ],

                // 'usage' => [


                //     'Apply the juice 3 times a day.',



                // ],

                'plant_id' => 22,
                'create_id' => 1,

            ],

            //Pistula
            [
                'name' => 'Juice Extract',

                'description' => "Juice extracted from young Kanya Pistula leaves helps to treat athlete's foot by reducing the fungal infection and soothing the skin.",
                'status' => 'Active',
                // 'ingredient' => ['5-10 Young Kanya Pistula leaves '],

                // 'step' => [
                //     'Start by gathering the Kanya Pistula leaves.',
                //     'Crush the young leaves and extract the juice.',
                //     'Apply the juice directly on the affected part'

                // ],

                // 'usage' => [
                //     'Apply the juice 3 times a day.',

                // ],

                'plant_id' => 23,
                'create_id' => 1,

            ],

            //Bawang
            [
                'name' => 'Direct Application',

                'description' => "Applying crushed Bawang cloves directly to the affected area helps to reduce fungal infections and promote healing of the skin.",
                'status' => 'Active',
                // 'ingredient' => ['1 clove of Bawang(Garlic)'],

                // 'step' => [
                //     'Start by peeling and crushing one clove of Bawang.',
                //     'Rub the crushed clove on the affected part until it gets red.'
                // ],

                // 'usage' => [
                //     'Apply 2 times a day: in the morning after the morning bath and at bedtime.'
                // ],

                'plant_id' => 24,
                'create_id' => 1,
            ],

            //Bawang
            [
                'name' => 'Garlic Filling',
                'description' => "Garlic, known for its antibacterial and analgesic properties, can be used as a natural filling to relieve toothache. This remedy helps reduce pain and fight infection in the affected tooth by directly applying a small garlic piece to the cavity.",
                'status' => 'Active',
                // 'ingredient' => ['Fresh Bawang (Garlic) clove'],

                // 'step' => [
                //     'Start by slicing a small piece of garlic, just enough to fit inside the tooth cavity.',
                //     'Carefully place the garlic slice inside the cavity as a filling.',
                //     'Leave the garlic in place and renew the fillings twice a day for continuous relief.'
                // ],

                // 'usage' => [
                //     'Place the garlic filling inside the tooth cavity and replace it two times a day to help alleviate toothache and prevent infection.'
                // ],

                'plant_id' => 24,
                'create_id' => 1,
            ],

            //Bawang
            [
                'name' => 'Garlic Lozenges',

                'description' => "Garlic is known for its potent antibacterial and anti-inflammatory properties. Chewing garlic slowly helps release its beneficial compounds, which can soothe sore throats and provide temporary relief for toothache.",
                'status' => 'Active',
                // 'ingredient' => ['1 clove of fresh garlic'],

                // 'step' => [
                //     'Wash and peel a fresh clove of garlic.',
                //     'Place the garlic clove in your mouth and chew it slowly to release the juice.',
                //     'Swallow the juice gradually. Keep the clove in your mouth for as long as comfortable.'
                // ],

                // 'usage' => [
                //     'Chew the garlic clove slowly throughout the day, swallowing the juice for relief. Replace the garlic clove with a fresh one as needed.'
                // ],

                'plant_id' => 24,
                'create_id' => 1,
            ],


            //Mayana
            [
                'name' => 'Poultice',

                'description' => "A poultice made from Mayana leaves helps to stop bleeding and promote healing. The juice from the leaves acts as a natural antiseptic.",
                'status' => 'Active',
                // 'ingredient' => ['Young Mayana leaves'],

                // 'step' => [
                //     'Start by washing the young leaves.',
                //     'Crush and extract the juice from the leaves.',
                //     'Apply the crushed leaves as a poultice.'
                // ],

                // 'usage' => [
                //     'Drop a few drops of the juice directly on the wound.',
                //     'Bandage snugly but not too tightly to interfere with circulation. If bleeding does not stop after 15 minutes, bring the patient to the nearest hospital or clinic for proper treatment.'
                // ],
                'plant_id' => 25,
                'create_id' => 1,
            ],

            //Niyog-Niyogan
            [
                'name' => 'Digestive or Cleansing Aid',

                'description' => "Niyog-Niyogan seeds are a traditional remedy used to expel pinworms. The seeds are eaten raw, typically 2 hours after supper, to help eliminate the parasites from the body. This remedy is often repeated after one week if needed to ensure the worms are fully expelled.",
                'status' => 'Active',
                // 'ingredient' => ['Niyog-Niyogan seeds'],

                // 'step' => [
                //     'Cook 1 cup of dried Niyog-Niyogan seeds in a frying pan without oil.',
                //     'Pulverize the cooked seeds into a fine powder.',
                //     'Mix the pulverized seeds with 1 cup of milk or water.'
                // ],

                // 'dosage' => [
                //     'Adults: 10 seeds',
                //     'Children: ',
                //     'Ages 4-7: 4 seeds',
                //     'Ages 8-9: 6 seeds',
                //     'Ages 10-12: 7 seeds'
                // ],

                // 'usage' => [
                //     'Eat the required number of raw Niyog-Niyogan seeds 2 hours after supper. Repeat the dosage after one week if necessary.'
                // ],
                'plant_id' => 26,
                'create_id' => 1,
            ],

            //Niyog-Niyogan
            [
                'name' => 'Niyog-Niyogan Intestinal Worms Remediation',

                'description' => "The dried seeds of Niyog-niyogan are ingested to eliminate intestinal worms.",
                'status' => 'Active',
                // 'ingredient' => ['Dried Niyog-niyogan seeds', '1/2 or 1 glass of water.'],

                // 'step' => [
                //     'Start by collecting the seed from the parent plant and its withered fruit.',
                //     'Eat the seed; chew it well and follow with drinking a half or 1 glass of water.'
                // ],

                // 'usage' => [
                //     'Consume 5-7 dried seeds twice daily until the worms are expelled.'
                // ],
                'plant_id' => 26,
                'create_id' => 1,
            ],

            //Tsaang Gubat
            [
                'name' => 'Tea',

                'description' => "An herbal tea made from Tsaang Gubat leaves helps relieve stomach pains.",
                'status' => 'Active',
                // 'ingredient' => ['Fresh Tsaang Gubat leaves', '1 glass of water'],

                // 'step' => [
                //     'Start by gathering fresh Tsaang Gubat leaves.',
                //     'Rinse the leaves thoroughly with clean water.',
                //     'Boil the chopped and freshly picked forest tea (Tsaang Gubat) leaves in a pot containing 1 glass of water.',
                //     'Remove the cover of the pot when it boils.',
                //     'Measurement of chopped leaves based on age: 1 1/2 tablespoons for 7-12 years old; 3 tablespoons for 13 years old or older; not recommended for children below 7 years old.',
                //     'Let it cool and then strain.',
                //     'Drink. If stomach pain symptoms persist, consult your doctor.'
                // ],

                // 'usage' => [
                //     'Drink after meals for best results.',
                //     'Continue using until symptoms like stomach pains subside.'
                // ],

                'plant_id' => 27,
                'create_id' => 1,
            ],

            //Paragis
            [
                'name' => 'Paragis Smoothies',

                'description' => "This Paragis smoothie recipe is a delicious way to incorporate the health benefits of Paragis into your daily routine. It helps support kidney function, regulates blood pressure, and boosts the immune system.",
                'status' => 'Active',
                // 'ingredient' => ['3 bananas', '1 spoon of Paragis Powder', 'Ice cubes', '1 cup purified water'],

                // 'step' => [
                //     'Start by peeling the bananas and slice them into smaller pieces.',
                //     'In a blender, add the sliced bananas and 1 spoon of Paragis Powder.',
                //     'Pour in 1 cup of purified water and blend until smooth.',
                //     'Serve cold with ice cubes for a refreshing and nutritious smoothie.'
                // ],

                // 'usage' => [
                //     'Consume the Paragis smoothie once a day, preferably in the morning, to enjoy its full health benefits.',
                //     'Regular intake can support kidney health, help regulate blood pressure, and provide relief from flu symptoms while also boosting overall immunity.'
                // ],
                'plant_id' => 28,
                'create_id' => 1,
            ],

            //Paragis
            [
                'name' => 'Paragis Tea',

                'description' => "Paragis tea is an herbal remedy known for its ability to support kidney function, regulate blood pressure, and relieve flu symptoms. It's a simple, natural way to incorporate Paragis into your daily routine for health benefits.",
                'status' => 'Active',
                // 'ingredient' => ['3 cups of purified water', 'A bunch of Paragis leaves', '1 cup purified water (for serving adjustments)', 'Honey (optional)', 'Ice cubes (optional, for cold tea)'],

                // 'step' => [
                //     'Start by Bringing 3 cups of purified water to a boil.',
                //     'Once boiling, add a handful of Paragis leaves into the water.',
                //     'Let the mixture simmer on low heat for 5 minutes.',
                //     'Remove the pot from heat and allow the tea to cool.',
                //     'Strain the leaves and pour the tea into a cup.',
                //     'Serve warm or cold based on preference. For cold tea, add ice cubes and sweeten with honey if desired.'
                // ],

                // 'usage' => [
                //     'Drink 2 cups of Paragis tea daily—one in the morning and one in the evening for optimal health benefits.'
                // ],
                'plant_id' => 28,
                'create_id' => 1,
            ],

            //Ampalaya
            [
                'name' => 'Ampalaya Hemorrhoids Treatment',

                'description' => "Ampalaya is known for its anti-inflammatory and analgesic properties, making it a useful herbal remedy for alleviating the discomfort associated with hemorrhoids. The combination of its roots, fruits, and seeds can help reduce swelling and soothe irritation.",
                'status' => 'Active',
                // 'ingredient' => [
                //     '½ cup of chopped Ampalaya roots, fruits, and seeds',
                //     '2 tablespoons of oil (e.g., coconut oil or olive oil)'
                // ],

                // 'step' => [
                //     'Start by washing and chopping the Ampalaya roots, fruits, and seeds.',
                //     'Extract the juice from the chopped mixture.',
                //     'Mix the extracted juice with 2 tablespoons of oil.',
                //     'Wet a piece of cotton with the Ampalaya-oil mixture.'
                // ],

                // 'usage' => [
                //     'After a hot sitz bath, apply the wet cotton soaked in the Ampalaya-oil mixture directly to the hemorrhoids for relief.'
                // ],
                'plant_id' => 29,
                'create_id' => 1,
            ],

            //Ampalaya
            [
                'name' => 'Ampalaya Tea',

                'description' => "Ampalaya juice is known to help lower blood sugar levels. The fruit is juiced and consumed daily.",
                'status' => 'Active',
                // 'ingredient' => [
                //     'Fresh Ampalaya leaves'
                // ],

                // 'step' => [
                //     'Wash Ampalaya leaves.',
                //     'Boil 2 cups of sprouts in 2 glasses of water for around 15 minutes.'
                // ],

                // 'usage' => [
                //     'Drink 1/3 cup of the boiled water thrice a day, 30 minutes before meals.'
                // ],

                'plant_id' => 29,
                'create_id' => 1,
            ],


            //pansit-pansitan
            [
                'name' => 'Ulsimang Bato Tea',

                'description' => "This Ulsimang Bato (Peperomia pellucida) tea is a natural remedy traditionally used in the Philippines to help alleviate arthritis and inflammation. The plant, known locally as 'pansit-pansitan' or 'ulasimang-bato,' is valued for its analgesic and anti-hyperuricemic properties.",
                'status' => 'Active',
                // 'ingredient' => [
                //     '1 cup fresh Pansit-pansitan leaves and stems (washed thoroughly)',
                //     '2-3 cups water',
                //     'Honey or Lemon (Optional)'
                // ],

                // 'step' => [
                //     'Start by gathering fresh Pansit-pansitan leaves and stems. Wash them thoroughly under running water to remove any dirt or contaminants.',
                //     'In a pot, bring 2-3 cups of water to a boil.',
                //     'Once the water reaches a rolling boil, add the Pansit-pansitan leaves and stems.',
                //     'Reduce the heat and let the mixture simmer for about 10-15 minutes to allow the medicinal properties of the herb to infuse into the water.',
                //     'After simmering, remove the pot from the heat and strain the tea into a cup.',
                //     'Discard the leaves and transfer the tea into a serving cup. Honey or lemon can be added for taste.'
                // ],

                // 'usage' => [
                //     'Drink once or twice daily as a herbal remedy.'
                // ],

                'plant_id' => 30,
                'create_id' => 1,
            ],

            //pansit-pansitan
            [
                'name' => 'Ulsimang Bato Decoction',

                'description' => "Ulsimang Bato, also known as Pansit-Pansitan, is a herbal remedy known for its uric acid-lowering properties, making it effective in treating rheumatism and gout. This decoction provides a natural way to alleviate joint pain and inflammation.",
                'status' => 'Active',
                // 'ingredient' => [
                //     '1 ½ cups of Pansit-Pansitan leaves',
                //     '2 glasses of water'
                // ],

                // 'step' => [
                //     'Start by washing the leaves thoroughly to remove any dirt.',
                //     'Boil 1 ½ cups of the leaves in 2 glasses of water over low heat.',
                //     'Keep the pot uncovered while boiling.',
                //     'Once done, remove from heat and allow the mixture to cool.',
                //     'Strain the liquid to remove the leaves.'
                // ],

                // 'usage' => [
                //     'Divide the decoction into three parts.',
                //     'Drink one part three times a day after meals.'
                // ],

                'plant_id' => 30,
                'create_id' => 1,
            ],

            //pansit-pansitan
            [
                'name' => 'Ulsimang Bato Salad',

                'description' => "Ulsimang Bato Salad, made from fresh Pansit-Pansitan (Ulasimang Bato) leaves, helps manage uric acid levels and is used as a natural remedy for conditions like rheumatism and gout. This salad incorporates the healing properties of the plant into an easy-to-consume form.",
                'status' => 'Active',
                // 'ingredient' => [
                //     '1 ½ cups of fresh Pansit-Pansitan leaves (not tightly packed)'
                // ],

                // 'step' => [
                //     'Start by washing the leaves thoroughly.',
                //     'Divide the 1 ½ cups of leaves into three parts.',
                //     'Serve the leaves as a fresh salad.'
                // ],

                // 'usage' => [
                //     'Eat one portion of the salad three times a day.'
                // ],

                'plant_id' => 30,
                'create_id' => 1,
            ],

            //Tanglad
            [
                'name' => 'Tanglad Herbal Decoction',

                'description' => "A decoction made from Tanglad leaves helps to alleviate diarrhea by reducing intestinal inflammation and promoting digestive health. The addition of ginger and sugar enhances its therapeutic effect and taste.",
                'status' => 'Active',
                // 'ingredient' => [
                //     '10 young leaves',
                //     '2 glasses of water',
                //     '1 tablespoon sugar',
                //     '1 small piece of crushed ginger'
                // ],

                // 'step' => [
                //     'Start by boiling 10 young leaves in 2 glasses of water for 10 minutes.',
                //     'Add 1 tablespoon of sugar and one small piece of crushed ginger.',
                //     'Strain the decoction to remove the leaves and ginger.'
                // ],

                // 'usage' => [
                //     'Adults: 1 cup, 3 times a day and after every loose bowel movement.',
                //     'Children (Babies): 1 tablespoon, 3 times a day and after every loose bowel movement.',
                //     'Children (2-6 yrs.): 1/4 cup, 3 times a day and after every loose bowel movement.',
                //     'Children (7-12 yrs.): 1/2 cup, 3 times a day and after every loose bowel movement.'
                // ],

                'plant_id' => 31,
                'create_id' => 1,
            ],


            //Kamatsili
            [
                'name' => 'Kamatsili Herbal Decoction',

                'description' => "Kamatsili is a tropical tree with a spreading crown and sweet, edible pods. The leaves of Kamatsili are used in traditional medicine to aid digestion and treat various gastrointestinal issues. A decoction made from Kamatsili leaves helps to relieve indigestion by soothing the digestive tract and promoting healthy digestion.",
                'status' => 'Active',
                // 'ingredient' => [
                //     '1 cup of chopped Kamatsili leaves',
                //     '5 glasses of water',
                //     '1 teaspoon salt'
                // ],

                // 'step' => [
                //     'Start by boiling 1 cup of chopped leaves in 5 glasses of water for 10 minutes.',
                //     'Add 1 teaspoon of salt.',
                //     'Strain the decoction to remove the leaves.'
                // ],

                // 'usage' => [
                //     'Drink the decoction to relieve indigestion.'
                // ],

                'plant_id' => 32,
                'create_id' => 1,
            ],

            //Malunggay
            [
                'name' => 'Malunggay Dietary Intake',

                'description' => "Consuming cooked Malunggay leaves as part of a meal helps to relieve constipation due to their high fiber content.",
                'status' => 'Active',
                // 'ingredient' => [
                //     '1 cup of cooked Malunggay leaves'
                // ],

                // 'step' => [
                //     'Cook 1 cup of Malunggay leaves until tender.',
                //     'Incorporate the cooked leaves into meals.'
                // ],

                // 'usage' => [
                //     'Eat 1 cup of cooked Malunggay leaves with meals.'
                // ],
                'plant_id' => 33,
                'create_id' => 1,
            ],

            //Sambong
            [
                'name' => 'Poultice',

                'description' => "A poultice made from Sambong leaves helps to reduce inflammation and promote healing of abscesses and boils. The antimicrobial properties of the leaves make it an effective remedy for preventing infection",
                'status' => 'Active',
                // 'ingredient' => ['5 fresh Sambong leaves'],

                // 'step' => [
                //     'Chop 5 fresh Sambong leaves.',
                //     'Apply the chopped leaves directly on the abscess or boil.',
                //     'Cover with a clean cloth to hold the poultice in place.'
                // ],

                // 'usage' => [
                //     'Apply directly as poultice on abscess or boil, 2 times a day.'
                // ],

                'plant_id' => 34,
                'create_id' => 3,
            ],

            //Sambong
            [
                'name' => 'Herbal Decoction',

                'description' => "An herbal decoction made from Sambong leaves helps reduce inflammation and pain associated with cystitis. It also promotes urination, which aids in flushing out bacteria from the urinary tract.",
                'status' => 'Active',
                // 'ingredient' => ['1 cup of chopped fresh Sambong leaves', '2 glasses of water'],

                // 'step' => [
                //     'Boil 1 cup of chopped fresh Sambong leaves in 2 glasses of water for 15 minutes.',
                //     'Allow the decoction to cool before straining.',
                // ],

                // 'usage' => [
                //     'Adults: 1⁄2 cup, 3 times a day.',
                //     'Children (2-6 yrs.): 2 tablespoons, 3 times a day.'
                // ],

                'plant_id' => 34,
                'create_id' => 3,
            ],


            //Sambong
            [
                'name' => 'Sambong Leaf Application',

                'description' => "Sambong (Blumea balsamifera) leaves possess anti-inflammatory properties that can help alleviate headaches associated with sinusitis. The heat from the crushed leaves aids in relieving pressure and discomfort in the sinus areas.",
                'status' => 'Active',
                // 'ingredient' => ['5 fresh Sambong leaves', '2 glasses of water'],

                // 'step' => [
                //     'Start by crushing 5 leaves to release their properties.',
                //     'Heat each leaf directly over an open fire, one at a time, until warm.',
                //     'Apply the heated leaf directly over the forehead for frontal sinusitis and over the cheeks for maxillary sinusitis.',
                //     'Replace the cool leaf with a newly heated one until all 5 leaves have been used.'
                // ],

                // 'usage' => [
                //     'Perform this treatment 2 times a day to help relieve headaches due to sinusitis.'
                // ],
                'plant_id' => 34,
                'create_id' => 3,
            ],


            //Talumpunay
            [
                'name' => 'Herbal Cigarette ',

                'description' => "Talumpunay leaves, when dried and rolled into cigarettes, can help alleviate asthma symptoms by relaxing the bronchial muscles and easing breathing difficulties.",
                'status' => 'Active',
                // 'ingredient' => ['2 dried Talumpunay leaves'],

                // 'step' => [
                //     'Roll 2 dried Talumpunay leaves.',
                // ],

                // 'usage' => [
                //     'Use as a cigarette every 6 hours.'
                // ],

                'plant_id' => 35,
                'create_id' => 3,
            ],

            //Kantutay
            [
                'name' => 'Herbal Decoction',

                'description' => "A decoction made from Kantutay leaves and flowers helps to relieve cough and other respiratory symptoms. The plant's natural compounds have expectorant properties that aid in clearing mucus from the airways.",
                'status' => 'Active',
                // 'ingredient' => ['1 cup of chopped fresh leaves and flowers', '2 glasses of water'],

                // 'step' => [
                //     'Boil 1 cup of chopped fresh leaves and flowers in 2 glasses of water for 15 minutes.',
                //     'Strain the decoction to remove the leaves and flowers.'
                // ],

                // 'usage' => [
                //     'Adults: 1/2 cup, 3 times a day.',
                //     'Children (Babies): 1 teaspoon, 3 times a day.',
                //     'Children (2-6 yrs.): 2 tablespoons, 3 times a day.',
                //     'Children (7-12 yrs.): 3 tablespoons, 3 times a day.'
                // ],

                'plant_id' => 36,
                'create_id' => 3,
            ],

            //Alagaw
            [
                'name' => 'Herbal Decoction',

                'description' => "A decoction made from Alagaw leaves helps to relieve cough and soothe the throat. The addition of calamansi juice and sugar enhances its effectiveness and taste.",
                'status' => 'Active',
                // 'ingredient' => ['1 cup of chopped fresh leaves 2 glasses of water', '2 calamansi (for juice) 1 tablespoon sugar'],

                // 'step' => [
                //     'Boil 1 cup of chopped fresh leaves and flowers in 2 glasses of water for 15 minutes.',
                //     'Strain the decoction to remove the leaves.',
                //     'Drain and squeeze in the juice of 2 calamansi.',
                //     'Add 1 tablespoon of sugar. '
                // ],

                // 'usage' => [
                //     'Adults: 1 cup, every 4 hours.',
                //     'Children (Babies): 1 teaspoon, every 4 hours.',
                //     'Children (2-6 yrs.): 2 tablespoons, every 4 hours.',
                //     'Children (7-12 yrs.): 1/4 cup, every 4 hours.'
                // ],

                'plant_id' => 37,
                'create_id' => 3,
            ],


            //Kilaw
            [
                'name' => 'Juice Extract',

                'description' => "The juice extracted from Kilaw rhizomes helps to reduce dandruff by cleansing the scalp and preventing fungal infections. The juice also nourishes the hair and scalp, promoting healthier hair growth.",
                'status' => 'Active',
                // 'ingredient' => ['Kilaw rhizomes'],

                // 'step' => [
                //     'Pound the rhizomes to extract the juice.'
                // ],

                // 'usage' => [
                //     'Rub or massage the juice on the scalp and hair.',
                //     'Leave it on overnight and shampoo the next morning.'
                // ],

                'plant_id' => 38,
                'create_id' => 3,
            ],

            //Kilaw
            [
                'name' => 'Kilaw (Yellow Ginger) Tea',

                'description' => "Kilaw, or yellow ginger, is an effective natural remedy for relieving flatulence and gas pain. Its carminative properties help reduce the formation of gas in the stomach and intestines, offering quick relief from discomfort.",
                'status' => 'Active',
                // 'ingredient' => ['1 piece of Kilaw (yellow ginger), about 2 inches in size', '2 glasses of water'],

                // 'step' => [
                //     'Start by chop one 2-inch piece of Kilaw (yellow ginger).',
                //     'Boil the chopped ginger in 2 glasses of water for 10 minutes.',
                //     'Let the tea cool slightly before serving'
                // ],

                // 'usage' => [
                //     'Drink the ginger tea as recommended to relieve gas pain and flatulence. Regular consumption helps in reducing excessive gas buildup in the stomach and intestines.',
                //     'Adults: 1 cup every 4 hours.',
                //     'Children (Babies): 1 teaspoon, every 4 hours.',
                //     'Children (2-6 yrs.): 2 tablespoons, every 4 hours.',
                //     'Children (7-12 yrs.): 1/4 cup, every 4 hours.'
                // ],

                'plant_id' => 38,
                'create_id' => 3,
            ],

            //Gugo
            [
                'name' => 'Herbal Shampoo',

                'description' => "A shampoo made from Gugo bark helps cleanse the scalp, remove dandruff, and strengthen the hair. The natural saponins in the bark create a gentle lather that cleanses without stripping the hair of its natural oils.",
                'status' => 'Active',
                // 'ingredient' => ['Gugo bark', 'Juice of 3 calamansi'],

                // 'step' => [
                //     'Soak the Gugo bark in a basin of cold water for 30 minutes before the shampoo.',
                //     'Squeeze the juice in the water and add the juice of 3 calamansi.',
                // ],

                // 'usage' => [
                //     'Wet hair very well and use this as shampoo.',
                //     'Use vinegar as a conditioner if the water is hard.',
                // ],

                'plant_id' => 39,
                'create_id' => 3,
            ],

            //Kampanilya
            [
                'name' => 'Herbal Decoction',

                'description' => "An herbal decoction made from Kampanilya leaves helps to relieve constipation due to its laxative properties.",
                'status' => 'Active',
                // 'ingredient' => ['5 Kampanilya leaves', '2 glasses of water'],

                // 'step' => [
                //     'Boil 5 Kampanilya leaves in 2 glasses of water for 10 minutes.',
                //     'Strain the decoction to remove the leaves.',
                // ],

                // 'usage' => [
                //     'Adults: 1 glass, 2 times a day.',
                //     'Children (Babies): 1 teaspoon, 2 times a day.',
                //     'Children (7-12 yrs.): 1/2 cup, 2 times a day.'
                // ],

                'plant_id' => 40,
                'create_id' => 3,
            ],

            //Mansanilya
            [
                'name' => 'Herbal Decoction',

                'description' => "A decoction made from Mansanilya leaves and flowers helps soothe the throat and alleviate cough. Chamomile is known for its mild sedative effects, which can also promote relaxation.",
                'status' => 'Active',
                // 'ingredient' => ['1 cup of chopped dried leaves and flowers or 1½ cups of fresh leaves and flowers', '2 glasses of water'],

                // 'step' => [
                //     'Boil 1 cup of chopped dried leaves and flowers or 1½ cups of fresh leaves and flowers in 2 glasses of water for 15 minutes.',
                //     'Strain the decoction to remove the leaves and flowers.',
                // ],

                // 'usage' => [
                //     'Adults 1/2 cup, every 4 hours.',
                //     'Children (Babies): 1 teaspoon, every 4 hours.',
                //     'Children (2-6 yrs.): 2 tablespoons, every 4 hours.',
                //     'Children (7-12 yrs.): 1/4  cup, every 4 hours.'
                // ],
                'plant_id' => 41,
                'create_id' => 3,
            ],

            //Banaba
            [
                'name' => 'Banaba Tea',

                'description' => "Banaba Tea, made from the leaves of the Banaba plant, is traditionally used to support kidney and liver health, reduce blood sugar, aid weight loss, and provide anti-inflammatory and anti-parasitic benefits.",
                'status' => 'Active',
                // 'ingredient' => ['Fresh or dried leaves, flowers, root, or bark of Banaba (choose one or a mix)', '3 cups of water (adjust depending on desired tea strength)', 'Optional: A sprig of lemongrass or a few slices of local citrus like calamansi for flavor'],

                // 'step' => [
                //     'Rinse the Banaba leaves (or other parts) under running water if using fresh ingredients.',
                //     'Chop the leaves, flowers, root, or bark into smaller pieces for easier handling.',
                //     'Bring 3 cups of water to a boil in a pot',
                //     'Add the Banaba parts to the boiling water and reduce heat to low.',
                //     'Let the mixture simmer gently for about 15-20 minutes to extract the medicinal compounds.',
                //     'Optionally, add lemongrass or citrus for added flavor and health benefits.',
                //     'Remove from heat and let it cool slightly before straining.',
                //     'Strain the tea into a cup or teapot, discarding the solids.'
                // ],

                // 'usage' => [
                //     'For acute kidney pain or detox: Start with 4-6 cups per day for the first 4 days, then reduce to 3-4 cups daily until symptoms improve. , Continue maintenance with 1-2 cups daily for ongoing support.',
                //     'For blood sugar regulation and weight loss: Drink 1 cup before meals, 3 times daily. This may help modulate glucose levels and reduce appetite over time.',
                //     'For liver health and general detoxification: Drink 1-2 cups daily as a gentle cleanse.',
                //     'For urinary tract infections and anti-inflammatory support: Drink 3-4 cups daily, continuing for up to a week or until symptoms subside.'
                // ],
                'plant_id' => 42,
                'create_id' => 3,
            ],


            //Serpentina
            [
                'name' => 'Serpentina and Lemon Tea Recipe',

                'description' => "A soothing tea made with fresh Serpentina leaves and lemon, this recipe supports immune health, aids digestion, and helps manage blood pressure. Enjoy warm with optional honey for added sweetness",
                'status' => 'Active',
                // 'ingredient' => [
                //     '5-8 fresh Serpentina leaves',
                //     '1.5 cups of water',
                //     '1 slice of lemon or 1 teaspoon of fresh lemon juice (adjust to taste)',
                //     'Honey (optional, for sweetness)'
                // ],

                // 'step' => [
                //     'Rinse the Serpentina leaves under cool, running water to remove any dirt.',
                //     'Bring 1.5 cups of water to a boil in a pot.',
                //     'Lower the heat to a simmer and add the Serpentina leaves.',
                //     'Simmer for 10-15 minutes, allowing the leaves to infuse the water.',
                //     'Remove from heat and let the tea cool slightly. Add a slice of lemon or lemon juice.',
                //     'Optional: Add a small amount of honey to balance the bitterness. Stir well'
                // ],

                // 'usage' => [
                //     '1 cup, once daily.',
                //     'Drink warm, once a day. Adjust lemon and honey to taste as desired.'
                // ],
                'plant_id' => 43,
                'create_id' => 3,
            ],


            //Gisol
            [
                'name' => 'Poultice',

                'description' => "A poultice made from chopped Gisol rhizomes helps to reduce swelling and relieve pain in the salivary glands.",
                'status' => 'Active',
                // 'ingredient' => ['Gisol rhizomes'],

                // 'step' => [
                //     'Chop the Gisol rhizomes.',
                // ],

                // 'usage' => [
                //     'Apply the chopped rhizomes directly as a poultice on the swollen glands.',
                //     'Apply the poultice for 30 minutes, 3 times a day.'
                // ],

                'plant_id' => 44,
                'create_id' => 3,
            ],



            //Lumbang Bato
            [
                'name' => 'Hot Compress',

                'description' => "A hot compress made from Lumbang Bato leaves helps to reduce inflammation and relieve pain in the joints.",
                'status' => 'Active',
                // 'ingredient' => ['Lumbang Bato leaves'],

                // 'step' => [
                //     'Heat the leaves.',
                //     'Apply the leaves on the joints directly while still hot.'
                // ],

                // 'usage' => [
                //     'Apply the hot leaves for 15 minutes, 2 times a day.'
                // ],
                'plant_id' => 45,
                'create_id' => 3,
            ],

            //Tabako
            [
                'name' => 'Herbal Decoction Shampoo',

                'description' => "A shampoo made from a decoction of Tabako leaves helps to treat ringworm on the scalp by reducing fungal infections and cleansing the hair.",
                'status' => 'Active',
                // 'ingredient' => ['10 fresh Tabako leaves', '1/2 gallon of water'],

                // 'step' => [
                //     'Boil 10 fresh Tabako leaves in 1/2 gallon of water for 15 minutes.',
                //     'Cool and strain the decoction.',
                //     'Add enough water to fill up a 3-gallon pail.'
                // ],

                // 'usage' => [
                //     'Shampoo hair with this decoction once a day until healed.'
                // ],

                'plant_id' => 46,
                'create_id' => 3,
            ],

            //adelfia
            [
                'name' => 'Mixture with Coconut Oil',

                'description' => "A mixture of Adelfa bark, leaves, and coconut oil helps to reduce fungal infections and promote healing of the skin affected by ringworm.",
                'status' => 'Active',
                // 'ingredient' => ['One-foot long branch of Adelfa 1 cup of chopped fresh young leaves', '5 drops of coconut oil'],

                // 'step' => [
                //     'Chop a one-foot long branch of Adelfa.',
                //     'Mix with 1 cup of chopped fresh young leaves.',
                //     'Extract the juice and mix with 5 drops of coconut oil.'
                // ],

                // 'usage' => [
                //     'Apply the mixture on affected parts, 3 times a day.'
                // ],
                'plant_id' => 47,
                'create_id' => 3,
            ],

        ];

        return $remedies;
    }
}
