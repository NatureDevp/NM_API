<?php

namespace Database\Seeders;

use App\Models\Plant_Plants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlantPlantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        foreach ($this->plantData() as $plant) {
            Plant_Plants::create($plant);
        }
    }




    private function plantData(): array
    {
        $plants = [

            //1
            [
                'name' => 'Cogon Grass',
                'scientific_name' => 'Imperata cylindrica',
                'description' => 'Kugon, also known as cogon grass, is a hardy perennial grass found throughout the Philippines. Its roots have been used in traditional medicine for their diuretic and anti-inflammatory properties. They are especially effective for treating gastrointestinal issues such as diarrhea.',
                'create_id' => 2
            ],

            //2
            [
                'name' => 'Bilimbi',
                'scientific_name' => 'Averrhoa bilimbi',
                'description' => 'Kamias, also known as bilimbi, is a tropical fruit-bearing tree found in the Philippines. The tree produces small, cylindrical, green fruits with a sour taste. The fruits are rich in vitamin C and have anti-inflammatory properties. In traditional medicine, Kamias is used to treat various conditions, including swelling and pain.',

                'create_id' => 2
            ],

            //3
            [
                'name' => 'Starfruit',
                'scientific_name' => 'Averrhoa carambola',
                'description' => 'Balimbing, or starfruit, is a tropical fruit-bearing tree native to the Philippines. The young leaves of the Balimbing tree have medicinal properties and are traditionally used to treat skin conditions and reduce itchiness.',

                'create_id' => 2
            ],

            //4
            [
                'name' => 'Plumeria',
                'scientific_name' => 'Plumeria obtusa',
                'description' => 'Kalatsutsi, also known as plumeria, is a flowering plant native to tropical America but widely grown in the Philippines. The plant is known for its fragrant flowers and medicinal properties. The leaves and branches are used in traditional remedies to treat various skin conditions.',

                'create_id' => 2
            ],

            //5
            [
                'name' => 'Madre de Cacao',

                'scientific_name' => 'Gliricidia sepium',
                'description' => 'Kakawate, also known as Madre de Cacao, is a leguminous tree native to Central America but widely naturalized in the Philippines. The leaves are known for their insecticidal and antifungal properties, making them effective in treating various skin conditions, including scabies.',

                'create_id' => 2
            ],

            //6
            [
                'name' => 'Comfrey',

                'scientific_name' => 'Symphytum officinale',
                'description' => 'Comfrey is a herbaceous plant known for its large, hairy leaves and clusters of small, bell-shaped flowers. It is commonly found in temperate climates and has been used for centuries in traditional medicine. The leaves and roots of Comfrey contain allantoin, which promotes cell regeneration and helps soothe inflamed skin.',

                'create_id' => 2
            ],



            //7
            [
                'name' => 'Malabar spinach',

                'scientific_name' => 'Basella alba',
                'description' => 'Alugbati, also known as Malabar spinach, is a tropical vine widely used for its medicinal properties. It grows quickly and produces heart-shaped leaves that are rich in vitamins and minerals. Alugbati is known for its cooling and anti-inflammatory effects, which makes it effective in treating skin issues like boils and abscesses.',

                'create_id' => 2
            ],



            //8
            [
                'name' => 'Amaryllis',

                'scientific_name' => 'Tagetes erecta',
                'description' => 'Amarillo, also known as marigold, is a flowering plant known for its vibrant orange or yellow blossoms. It has antiseptic and healing properties, making it suitable for treating wounds, abscesses, and boils.',

                'create_id' => 2
            ],



            //9
            [
                'name' => 'Rosemary',

                'scientific_name' => 'Rosmarinus officinalis',
                'description' => 'Rosemary is a woody, perennial herb with fragrant, evergreen needle-like leaves. It is commonly used in cooking and traditional medicine. Rosemary has antiseptic and anti-inflammatory properties that make it effective for treating skin conditions like pimples and acne.',

                'create_id' => 2
            ],


            //10
            [
                'name' => 'Oregano',

                'scientific_name' => 'Origanum vulgare',
                'description' => 'Oregano is a perennial herb that is widely used in Filipino households for its culinary and medicinal properties. The leaves are rich in antioxidants and have antibacterial, antiviral, and anti-inflammatory properties. This makes oregano an effective natural remedy for coughs and respiratory ailments.',

                'create_id' => 2
            ],


            //11
            [
                'name' => 'Amaranth',

                'scientific_name' => 'Amaranthus spinosus',
                'description' => 'Kulitis, also known as spiny amaranth, is a leafy vegetable that grows in tropical regions. The leaves and flowers contain nutrients and compounds that can help reduce mucus production and relieve asthma symptoms.',

                'create_id' => 2
            ],


            //12
            [
                'name' => 'Tinospora rumphii',

                'scientific_name' => 'Tinospora crispa',
                'description' => 'Makabuhay, also known as Indian Tinospora, is a vine commonly found in tropical regions. It is recognized for its numerous health benefits, including its antifungal and antibacterial properties. The vine\'s bitter compounds are effective in treating skin infections like athlete\'s foot.',

                'create_id' => 2
            ],


            //13
            [
                'name' => 'Aloe Vera',

                'scientific_name' => 'Aloe vera',
                'description' => 'Aloe vera is a succulent plant known for its thick, fleshy leaves filled with a clear gel. This plant is widely cultivated in the Philippines for its medicinal properties, especially for treating burns and skin conditions.',

                'create_id' => 2
            ],


            //14
            [
                'name' => 'Indian pennywort',

                'scientific_name' => 'Centella asiatica',
                'description' => 'Takip kuhol, also known “the fountain of life”, is a perennial herbaceous plant common in moist tropical and subtropical regions of India and South America. Takip kuhol has been used for centuries as a medicinal herb, as far back as 3000 years ago in Indian Ayurvedic medicine, 2000 years ago in Chinese medicine, in the late 1800s in French pharmacopoeia. Contrary to its name, it contains no cola or caffeine.',

                'create_id' => 2
            ],


            //15
            [
                'name' => 'Guava',

                'scientific_name' => 'Psidium guajava',
                'description' => 'Guava, Bayabas(Local name) is a tropical fruit tree widely cultivated in the Philippines. The leaves of the guava tree are known for their medicinal properties, including their ability to treat diarrhea. The leaves contain antibacterial and anti-inflammatory compounds that help soothe the digestive system.',

                'create_id' => 2
            ],


            //16
            [
                'name' => 'Custard Apple',

                'scientific_name' => 'Anona Squamosa Linn',
                'description' => 'Custard apple also known as sugar apple, Atis(local name),  is a tropical tree native to the Americas but widely cultivated in the Philippines. The seeds of Atis have insecticidal properties and are used in traditional medicine to treat lice infestations.',

                'create_id' => 2
            ],



            //17
            [
                'name' => 'Sweet Basil',

                'scientific_name' => 'Ocimum basilicum Linn',
                'description' => 'Sweet basil is an aromatic herb with antibacterial and antifungal properties. The juice extracted from its leaves is used in traditional medicine to treat skin infections and promote healing. ',

                'create_id' => 1
            ],


            //--------------------------
            //18
            [
                'name' => 'Young Banana',

                'scientific_name' => 'Musa acuminata',
                'description' => 'The banana plant is a common tropical plant in the Philippines, known for its large leaves and sweet fruit. The young leaves of the banana plant have medicinal properties and are often used in traditional remedies to stop bleeding and promote healing. ',

                'create_id' => 1
            ],

            //19

            [
                'name' => 'Ringworm Bush',

                'scientific_name' => 'Cassia alata L.',
                'description' => 'It is also known as “bayabas-bayabasan” and “ringworm bush” in English, this herbal medicine is used to treat ringworms and skin fungal infections',

                'create_id' => 1
            ],
            //20

            [
                'name' => 'Touch-me-not Balsam',

                'scientific_name' => 'Impatiens balsamina',
                'description' => "Kamantigi, or balsam plant, is known for it's vibrant flowers and medicinal properties. The plant contains antifungal compounds that make it effective in treating skin infections like athlete's foot.",

                'create_id' => 1
            ],

            //21
            [
                'name' => 'Five-leaved chaste tree',

                'scientific_name' => 'Vitex negundo',
                'description' => 'Lagundi is a shrub native to the Philippines, known for its medicinal properties. The leaves of the Lagundi plant are used to treat various ailments, including fever, cough, and colds.',

                'create_id' => 1
            ],
            //22
            [
                'name' => 'Miracle Plant',

                'scientific_name' => 'Synsepalum dulcificum',
                'description' => 'Miracle Plant, also known as Kalanchoe pinnata, medicinal uses have been recognized in the herbal medicine industry for many years now. Also called katakataka, this succulent perennial plant is commonly used to treat wounds and minor illnesses.',

                'create_id' => 1
            ],
            //23
            [
                'name' => 'Golden Shower',

                'scientific_name' => 'Cassia fistula',
                'description' => "Golden Shower, also known as Kanya Pistula, is a tropical tree that produces long, hanging clusters of bright yellow flowers. The young leaves have antifungal and antibacterial properties, making them effective in treating skin infections like athlete's foot",

                'create_id' => 1
            ],
            //24
            [
                'name' => 'Garlic',

                'scientific_name' => 'Allium sativum',
                'description' => "Garlic, is a widely used culinary herb known for its powerful antifungal and antibacterial properties. It is used in traditional medicine to treat various skin infections, including ringworm. ",

                'create_id' => 1
            ],
            //25
            [
                'name' => 'Painted Nettle',

                'scientific_name' => 'Coleus blumei',
                'description' => "Painted Nettle is a colorful plant commonly found in gardens in the Philippines. The young leaves are known for their medicinal properties and are used in traditional remedies to stop bleeding and reduce inflammation.",

                'create_id' => 1
            ],
            //26
            [
                'name' => 'Rangoon creeper',

                'scientific_name' => 'Quisqualis Indica L',
                'description' => "Niyog-Niyogan is a vine known as 'Chinese honey suckle'. It is effective in the elimination of intestinal worms, particularly the Ascaris and Trichina. Only the dried matured
                seeds are medicinal -crack and ingest the dried seeds two hours after eating (5 to 7 seeds
                for children & 8 to 10 seeds for adults). ",

                'create_id' => 1
            ],
            //27
            [
                'name' => 'Scorpion bush',

                'scientific_name' => 'Carmona retusa',
                'description' => "Tsaang Gubat is a small shrub with shiny, dark green leaves. It is commonly found in the wild and is known for its ability to help with stomach problems like diarrhea and stomach pains.",

                'create_id' => 1
            ],
            //28
            [
                'name' => 'Indian Goosegrass',

                'scientific_name' => 'Eleusine indica',
                'description' => "Indian Goosegrass(Paragis) is a grass known for its medicinal properties, particularly in treating kidney problems, managing hypertension, and alleviating symptoms of influenza. When processed into a powder and consumed as a concoction or smoothie, Paragis can aid in promoting overall health and addressing various conditions.",

                'create_id' => 1
            ],

            //29

            [
                'name' => 'Bitter Melon',

                'scientific_name' => 'Momordica charantia',
                'description' => "Bitter Melon(Ampalaya) is a vine with green, bumpy fruits. It is widely used for its antidiabetic properties",

                'create_id' => 1
            ],

            //30
            [
                'name' => 'Pepper Elder',
                'scientific_name' => 'Peperomia pellucida',
                'description' => "Locally known as “ulasimang-bato” or “pansit-pansitan”, has long been used in Philippine traditional medicine for its analgesic, anti-inflammatory, and anti-hyperuricemic properties.",

                'create_id' => 1
            ],
            //31
            [
                'name' => 'Lemongrass',
                'scientific_name' => 'Cymbopogon citratus',
                'description' => "Tanglad, or lemongrass, is a tall, perennial grass known for its distinct lemon scent. It is widely cultivated in the Philippines and used in traditional medicine for its antibacterial, antifungal, and anti-inflammatory properties. Tanglad is effective in treating digestive issues, including diarrhea.",

                'create_id' => 1
            ],
            //32
            [
                'name' => 'Manila Tamarind',
                'scientific_name' => 'Pithecellobium Dulce Plant',
                'description' => "Manila tamarind, is a tropical tree with a spreading crown and sweet, edible pods. The leaves of Kamatsili are used in traditional medicine to aid digestion and treat various gastrointestinal issues",

                'create_id' => 1
            ],

            //33
            [
                'name' => 'Moringa',
                'scientific_name' => 'Moringa oleifera',
                'description' => "Moringa, is a tree native to the Philippines known for its highly nutritious leaves. The leaves are rich in vitamins, minerals, and fiber, making them effective in relieving constipation. ",

                'create_id' => 1
            ],

            //--------------------------------


            //34
            [
                'name' => 'Blumea camphor',
                'scientific_name' => 'Blumea balsamifera',
                'description' => 'Sambong is known for its medicinal properties and is commonly used for its diuretic effects and in traditional medicine to support kidney health.',
                'create_id' => 3
            ],

            //35
            [
                'name' => 'Devils Trumpet or Jimsonweed',
                'scientific_name' => 'Datura metel',
                'description' => 'Talumpunay is a plant with analgesic properties used traditionally for pain relief, though it requires careful handling due to its toxicity.',
                'create_id' => 3
            ],

            //36
            [
                'name' => 'Lantana or Wild Sage',
                'scientific_name' => 'Lantana camara',
                'description' => 'Kantutay is used in folk medicine for respiratory issues, fevers, and skin infections due to its antimicrobial and anti-inflammatory properties.',
                'create_id' => 3
            ],

            //37
            [
                'name' => 'Fragrant Premna',

                'scientific_name' => 'Premna odorata',
                'description' => 'Alagaw has been used traditionally as an expectorant for respiratory issues and for treating wounds and inflammation.',
                'create_id' => 3
            ],

            //38
            [
                'name' => 'Siamese ginger',

                'scientific_name' => 'Alpinia galanga',
                'description' => 'Kilaw, or Alpinia, has digestive and anti-inflammatory properties and is widely used in Asian cuisines and traditional medicine.',
                'create_id' => 3
            ],

            //39
            [
                'name' => 'St. Thomas bean or Entada vine',

                'scientific_name' => 'Entada phaseoloides',
                'description' => 'Gugo is commonly used as a natural shampoo and for hair growth stimulation due to its saponin content.',
                'create_id' => 3
            ],

            //40
            [
                'name' => 'Yellow Bell',

                'scientific_name' => 'Tecoma stans',
                'description' => 'Kampanilya is used traditionally to help with digestive issues and has antimicrobial properties.',
                'create_id' => 3
            ],

            //41
            [
                'name' => 'Chamomile',

                'scientific_name' => 'Matricaria chamomilla',
                'description' => 'Chamomile is widely recognized for its calming effects and is used to treat digestive issues and promote relaxation.',
                'create_id' => 3
            ],




            //42
            [
                'name' => 'Pride of India or Queenss Crape Myrtle',

                'scientific_name' => 'Lagerstroemia speciosa',
                'description' => 'Banaba leaves are known for their blood-sugar-lowering effects and are often used in herbal teas for diabetes management.',
                'create_id' => 3
            ],

            //43
            [
                'name' => 'Solanum',

                'scientific_name' => 'Rauvolfia serpentina',
                'description' => 'Serpetina has medicinal properties for treating high blood pressure, though it should be used cautiously.',
                'create_id' => 3
            ],



            //44
            [
                'name' => 'Ginger',

                'scientific_name' => 'Zingiber officinale',
                'description' => 'Ginger is widely recognized for its anti-inflammatory and digestive properties, and is commonly used to treat nausea and colds.',
                'create_id' => 3
            ],

            //45
            [
                'name' => 'Candlenut Tree',

                'scientific_name' => 'Aleurites moluccanus',
                'description' => 'Lumbang Bato is used in traditional medicine and for extracting oil used in soaps and other applications.',
                'create_id' => 3
            ],

            //46
            [
                'name' => 'Tobacco',

                'scientific_name' => 'Nicotiana tabacum',
                'description' => 'Tobacco has traditional uses in pest control and in herbal medicine for its analgesic properties, though its use is controversial due to health risks.',
                'create_id' => 3
            ],

            //47
            [
                'name' => 'Oleander',

                'scientific_name' => 'Nerium oleander',
                'description' => 'Oleander has toxic properties but is sometimes used cautiously in traditional medicine for heart-related ailments.',
                'create_id' => 3
            ]

        ];

        return $plants;
    }
}
