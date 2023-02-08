<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                "id" => 1,
                "name" => "Icecream - Dstk Super Cone",
                "price" => 55.53,
                "country" => "Mexico"
            ],
            [
                "id" => 2,
                "name" => "Tea - Lemon Scented",
                "price" => 83.89,
                "country" => "Ukraine"
            ],
            [
                "id" => 3,
                "name" => "Wine - Two Oceans Cabernet",
                "price" => 74.88,
                "country" => "Sweden"
            ],
            [
                "id" => 4,
                "name" => "Chips Potato Reg 43g",
                "price" => 63.11,
                "country" => "France"
            ],
            [
                "id" => 5,
                "name" => "Syrup - Chocolate",
                "price" => 95.76,
                "country" => "Turkmenistan"
            ],
            [
                "id" => 6,
                "name" => "Chicken - Base",
                "price" => 34.8,
                "country" => "Greece"
            ],
            [
                "id" => 7,
                "name" => "Sage - Rubbed",
                "price" => 31.31,
                "country" => "China"
            ],
            [
                "id" => 8,
                "name" => "Mix Pina Colada",
                "price" => 92.71,
                "country" => "Vietnam"
            ],
            [
                "id" => 9,
                "name" => "Wakami Seaweed",
                "price" => 79.98,
                "country" => "China"
            ],
            [
                "id" => 10,
                "name" => "Pear - Packum",
                "price" => 12.05,
                "country" => "Czech Republic"
            ],
            [
                "id" => 11,
                "name" => "Sprite - 355 Ml",
                "price" => 26.51,
                "country" => "South Africa"
            ],
            [
                "id" => 12,
                "name" => "Wine - Zonnebloem Pinotage",
                "price" => 11.5,
                "country" => "Brazil"
            ],
            [
                "id" => 13,
                "name" => "Bread - Crusty Italian Poly",
                "price" => 92,
                "country" => "China"
            ],
            [
                "id" => 14,
                "name" => "Sesame Seed",
                "price" => 32.45,
                "country" => "Tanzania"
            ],
            [
                "id" => 15,
                "name" => "Wine - Saint Emilion Calvet",
                "price" => 3.67,
                "country" => "Philippines"
            ],
            [
                "id" => 16,
                "name" => "Pork - Ham, Virginia",
                "price" => 13.56,
                "country" => "Russia"
            ],
            [
                "id" => 17,
                "name" => "Tomatoes Tear Drop",
                "price" => 1.5,
                "country" => "China"
            ],
            [
                "id" => 18,
                "name" => "Vermouth - Sweet, Cinzano",
                "price" => 21.21,
                "country" => "Estonia"
            ],
            [
                "id" => 19,
                "name" => "Longos - Chicken Wings",
                "price" => 27.98,
                "country" => "Sweden"
            ],
            [
                "id" => 20,
                "name" => "Port - 74 Brights",
                "price" => 42.09,
                "country" => "Russia"
            ],
            [
                "id" => 21,
                "name" => "Leeks - Large",
                "price" => 28.93,
                "country" => "United States"
            ],
            [
                "id" => 22,
                "name" => "Beer - Upper Canada Lager",
                "price" => 48.55,
                "country" => "Indonesia"
            ],
            [
                "id" => 23,
                "name" => "Cloves - Ground",
                "price" => 98.85,
                "country" => "Indonesia"
            ],
            [
                "id" => 24,
                "name" => "Russian Prince",
                "price" => 91.57,
                "country" => "Portugal"
            ],
            [
                "id" => 25,
                "name" => "Juice - Clam, 46 Oz",
                "price" => 61.26,
                "country" => "China"
            ],
            [
                "id" => 26,
                "name" => "Syrup - Golden, Lyles",
                "price" => 19.81,
                "country" => "United States"
            ],
            [
                "id" => 27,
                "name" => "Oil - Coconut",
                "price" => 96.61,
                "country" => "Brazil"
            ],
            [
                "id" => 28,
                "name" => "Toamtoes 6x7 Select",
                "price" => 51.19,
                "country" => "Indonesia"
            ],
            [
                "id" => 29,
                "name" => "Lid - High Heat, Super Clear",
                "price" => 59.14,
                "country" => "Poland"
            ],
            [
                "id" => 30,
                "name" => "Salami - Genova",
                "price" => 55.95,
                "country" => "Indonesia"
            ],
            [
                "id" => 31,
                "name" => "Sambuca - Opal Nera",
                "price" => 76.42,
                "country" => "Colombia"
            ],
            [
                "id" => 32,
                "name" => "Wine - Sicilia Igt Nero Avola",
                "price" => 55.51,
                "country" => "Madagascar"
            ],
            [
                "id" => 33,
                "name" => "Syrup - Pancake",
                "price" => 75.31,
                "country" => "Russia"
            ],
            [
                "id" => 34,
                "name" => "Pork - Ham, Virginia",
                "price" => 1.26,
                "country" => "Philippines"
            ],
            [
                "id" => 35,
                "name" => "Pepper - Red Thai",
                "price" => 80.95,
                "country" => "Ukraine"
            ],
            [
                "id" => 36,
                "name" => "Wine - Blue Nun Qualitatswein",
                "price" => 80.08,
                "country" => "Azerbaijan"
            ],
            [
                "id" => 37,
                "name" => "Coconut - Shredded, Sweet",
                "price" => 96.69,
                "country" => "Russia"
            ],
            [
                "id" => 38,
                "name" => "Tea - Decaf Lipton",
                "price" => 67.6,
                "country" => "Vietnam"
            ],
            [
                "id" => 39,
                "name" => "Lid Coffee Cup 8oz Blk",
                "price" => 22.5,
                "country" => "China"
            ],
            [
                "id" => 40,
                "name" => "Ice - Clear, 300 Lb For Carving",
                "price" => 77.83,
                "country" => "Poland"
            ],
            [
                "id" => 41,
                "name" => "Everfresh Products",
                "price" => 14.16,
                "country" => "Russia"
            ],
            [
                "id" => 42,
                "name" => "Tart - Raisin And Pecan",
                "price" => 6.07,
                "country" => "China"
            ],
            [
                "id" => 43,
                "name" => "Veal - Nuckle",
                "price" => 82.93,
                "country" => "Brazil"
            ],
            [
                "id" => 44,
                "name" => "Mushroom - Morels, Dry",
                "price" => 68.95,
                "country" => "Malaysia"
            ],
            [
                "id" => 45,
                "name" => "Cheese - Sheep Milk",
                "price" => 46.53,
                "country" => "Indonesia"
            ],
            [
                "id" => 46,
                "name" => "Grapefruit - White",
                "price" => 86.29,
                "country" => "Finland"
            ],
            [
                "id" => 47,
                "name" => "Cheese - Parmesan Cubes",
                "price" => 61.36,
                "country" => "Libya"
            ],
            [
                "id" => 48,
                "name" => "Absolut Citron",
                "price" => 44.01,
                "country" => "United States"
            ],
            [
                "id" => 49,
                "name" => "Ecolab Silver Fusion",
                "price" => 75.55,
                "country" => "Japan"
            ],
            [
                "id" => 50,
                "name" => "Oneshot Automatic Soap System",
                "price" => 54.42,
                "country" => "Bolivia"
            ],
            [
                "id" => 51,
                "name" => "Beef - Top Butt Aaa",
                "price" => 82.36,
                "country" => "Armenia"
            ],
            [
                "id" => 52,
                "name" => "Lemonade - Mandarin, 591 Ml",
                "price" => 84.82,
                "country" => "Indonesia"
            ],
            [
                "id" => 53,
                "name" => "Lemon Balm - Fresh",
                "price" => 60.71,
                "country" => "Serbia"
            ],
            [
                "id" => 54,
                "name" => "Campari",
                "price" => 32.15,
                "country" => "El Salvador"
            ],
            [
                "id" => 55,
                "name" => "Parsley Italian - Fresh",
                "price" => 67.36,
                "country" => "Philippines"
            ],
            [
                "id" => 56,
                "name" => "Turkey Leg With Drum And Thigh",
                "price" => 31.02,
                "country" => "Russia"
            ],
            [
                "id" => 57,
                "name" => "Sobe - Green Tea",
                "price" => 57.29,
                "country" => "Indonesia"
            ],
            [
                "id" => 58,
                "name" => "Pate Pans Yellow",
                "price" => 48.08,
                "country" => "Uzbekistan"
            ],
            [
                "id" => 59,
                "name" => "Breakfast Quesadillas",
                "price" => 12.21,
                "country" => "Russia"
            ],
            [
                "id" => 60,
                "name" => "Burger Veggie",
                "price" => 36.43,
                "country" => "Indonesia"
            ],
            [
                "id" => 61,
                "name" => "Blue Curacao - Marie Brizard",
                "price" => 44.93,
                "country" => "China"
            ],
            [
                "id" => 62,
                "name" => "Sole - Dover, Whole, Fresh",
                "price" => 65.36,
                "country" => "Portugal"
            ],
            [
                "id" => 63,
                "name" => "Cheese - Grie Des Champ",
                "price" => 7.16,
                "country" => "China"
            ],
            [
                "id" => 64,
                "name" => "Cookies - Oreo, 4 Pack",
                "price" => 26.02,
                "country" => "China"
            ],
            [
                "id" => 65,
                "name" => "Lobster - Base",
                "price" => 80.76,
                "country" => "Colombia"
            ],
            [
                "id" => 66,
                "name" => "Wild Boar - Tenderloin",
                "price" => 13.54,
                "country" => "Honduras"
            ],
            [
                "id" => 67,
                "name" => "Soup - Campbellschix Stew",
                "price" => 45.24,
                "country" => "Comoros"
            ],
            [
                "id" => 68,
                "name" => "Spinach - Spinach Leaf",
                "price" => 23.12,
                "country" => "China"
            ],
            [
                "id" => 69,
                "name" => "Energy Drink - Franks Pineapple",
                "price" => 97.64,
                "country" => "Japan"
            ],
            [
                "id" => 70,
                "name" => "Muffin Batt - Ban Dream Zero",
                "price" => 19.39,
                "country" => "Indonesia"
            ],
            [
                "id" => 71,
                "name" => "Veal - Insides, Grains",
                "price" => 53.94,
                "country" => "New Zealand"
            ],
            [
                "id" => 72,
                "name" => "Alize Sunset",
                "price" => 44.83,
                "country" => "Venezuela"
            ],
            [
                "id" => 73,
                "name" => "Steamers White",
                "price" => 20,
                "country" => "Indonesia"
            ],
            [
                "id" => 74,
                "name" => "Flour - Buckwheat, Dark",
                "price" => 19.76,
                "country" => "Faroe Islands"
            ],
            [
                "id" => 75,
                "name" => "Spinach - Frozen",
                "price" => 35.08,
                "country" => "China"
            ],
            [
                "id" => 76,
                "name" => "Shrimp - 16 - 20 Cooked, Peeled",
                "price" => 88.05,
                "country" => "France"
            ],
            [
                "id" => 77,
                "name" => "Tortillas - Flour, 10",
                "price" => 81.98,
                "country" => "Philippines"
            ],
            [
                "id" => 78,
                "name" => "Peas - Frozen",
                "price" => 22.93,
                "country" => "France"
            ],
            [
                "id" => 79,
                "name" => "Cheese - Feta",
                "price" => 42,
                "country" => "China"
            ],
            [
                "id" => 80,
                "name" => "Brocolinni - Gaylan, Chinese",
                "price" => 40.2,
                "country" => "Portugal"
            ],
            [
                "id" => 81,
                "name" => "Beef - Tender Tips",
                "price" => 53.94,
                "country" => "Japan"
            ],
            [
                "id" => 82,
                "name" => "Mustard - Seed",
                "price" => 77.86,
                "country" => "Belarus"
            ],
            [
                "id" => 83,
                "name" => "Iced Tea Concentrate",
                "price" => 69.25,
                "country" => "Portugal"
            ],
            [
                "id" => 84,
                "name" => "Island Oasis - Wildberry",
                "price" => 89.34,
                "country" => "China"
            ],
            [
                "id" => 85,
                "name" => "Beans - French",
                "price" => 8.55,
                "country" => "Philippines"
            ],
            [
                "id" => 86,
                "name" => "Tea - Herbal - 6 Asst",
                "price" => 31.84,
                "country" => "Philippines"
            ],
            [
                "id" => 87,
                "name" => "Dill Weed - Fresh",
                "price" => 29.07,
                "country" => "Macedonia"
            ],
            [
                "id" => 88,
                "name" => "Glaze - Clear",
                "price" => 82.2,
                "country" => "China"
            ],
            [
                "id" => 89,
                "name" => "Beef - Kobe Striploin",
                "price" => 66.56,
                "country" => "China"
            ],
            [
                "id" => 90,
                "name" => "Lady Fingers",
                "price" => 91.3,
                "country" => "Kazakhstan"
            ],
            [
                "id" => 91,
                "name" => "Bread Cranberry Foccacia",
                "price" => 74.01,
                "country" => "Peru"
            ],
            [
                "id" => 92,
                "name" => "Leeks - Baby, White",
                "price" => 71.16,
                "country" => "Indonesia"
            ],
            [
                "id" => 93,
                "name" => "The Pop Shoppe - Cream Soda",
                "price" => 14.07,
                "country" => "Thailand"
            ],
            [
                "id" => 94,
                "name" => "Glycerine",
                "price" => 70.65,
                "country" => "Greece"
            ],
            [
                "id" => 95,
                "name" => "Wine - Black Tower Qr",
                "price" => 18.24,
                "country" => "Argentina"
            ],
            [
                "id" => 96,
                "name" => "Carrots - Mini Red Organic",
                "price" => 75.87,
                "country" => "Canada"
            ],
            [
                "id" => 97,
                "name" => "Mop Head - Cotton, 24 Oz",
                "price" => 47.23,
                "country" => "Ukraine"
            ],
            [
                "id" => 98,
                "name" => "Shrimp - Tiger 21/25",
                "price" => 97.22,
                "country" => "China"
            ],
            [
                "id" => 99,
                "name" => "Cookies Almond Hazelnut",
                "price" => 54.04,
                "country" => "China"
            ],
            [
                "id" => 100,
                "name" => "Chocolate - White",
                "price" => 73.52,
                "country" => "Ireland"
            ]
        ];

        DB::table('products')->insert($products);
        
    }
}
