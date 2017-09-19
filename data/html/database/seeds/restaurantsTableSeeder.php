<?php

use Illuminate\Database\Seeder;



class restaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'nom' => 'Lisboa',
            'adresse' => '80 Avenue Bollée',
            'cp' => '72000',
            'ville' => 'Le Mans',
            'tel' => '09.81.42.98.92',
            'horaire' => 'dimanche au samedi 11:00 - 21:00',
            'description' => 'Venez découvrir ici la cuisine portugaise traditionnelle. !',
            'dateouverture' => '2017-05-15 ',
        ]);

        DB::table('restaurants')->insert([
            'nom' => 'Auberge de Bagatelle',
            'adresse' => '43 rue d\'Arcole',
            'cp' => '72000',
            'ville' => 'Le Mans',
            'tel' => '02.43.24.55.91',
            'horaire' => 'Du jeudi au lundi le midi 12h00 à 13h30 et soir 19h00 à 20h30. Le dimanche sur reservation',
            'description' => 'Venez savourez nos meilleux plats. Menus de 14 € à 34 € ',
            'dateouverture' => '2017-03-29 ',
        ]);


        DB::table('restaurants')->insert([
            'nom' => 'La Fontaine des Saveurs',
            'adresse' => '93 Grande Rue',
            'cp' => '72000',
            'ville' => 'Le Mans',
            'tel' => '02.43.80.74.67',
            'horaire' => 'Du jeudi au lundi le midi 12h00 à 13h30 et soir 19h00 à 20h30. Le dimanche sur reservation',
            'description' => 'bon restaurant calme et chaleureux',
            'dateouverture' => '2014-12-12 ',
        ]);

        DB::table('restaurants')->insert([
            'nom' => 'La Plancha Gourmande',
            'adresse' => '93 Grande Rue',
            'cp' => '72000',
            'ville' => 'Le Mans',
            'tel' => '02.43.80.74.67',
            'horaire' => 'Non renseigné',
            'description' => 'bon restaurant calme et chaleureux',
            'dateouverture' => '2014-12-12 ',
        ]);

        DB::table('restaurants')->insert([
            'nom' => 'Le Bellifontain',
            'adresse' => '110 Avenue du Général Leclerc',
            'cp' => '72000',
            'ville' => 'Le Mans',
            'tel' => '02.43.24.65.38',
            'horaire' => 'Non renseigné',
            'description' => 'Notre restaurant vous propose une cuisine soignée riche en saveurs. !',
            'dateouverture' => '2013-05-12 ',
        ]);

        DB::table('restaurants')->insert([
            'nom' => 'Le Bistrot des Gourmets',
            'adresse' => '80 Avenue Bollée',
            'cp' => '72000',
            'ville' => 'Le Mans',
            'tel' => '09.81.42.98.92',
            'horaire' => 'Non renseigné',
            'description' => 'Tous nos plats sont élaborés avec des produits frais. Votre satisfaction est aussi la nôtre.',
            'dateouverture' => '2016-01-07 ',
        ]);

        DB::table('restaurants')->insert([
            'nom' => 'Le Grenier à Sel',
            'adresse' => '26 Place de l\'Éperon',
            'cp' => '72000',
            'ville' => 'Le Mans',
            'tel' => '02.43.23.26.30',
            'horaire' => 'Lundi, mardi, jeudi et vendredi 12h00-13h30  19h30-21h30 dimanche 19h30-21h30   ',
            'description' => 'Le restaurant Le Grenier à Sel, au Mans, vous propose une cuisine gastronomique et traditionnelle.',
            'dateouverture' => '2014-09-27 ',
        ]);

        DB::table('restaurants')->insert([
            'nom' => 'Le Nez Rouge',
            'adresse' => '107 Grande Rue',
            'cp' => '72000',
            'ville' => 'Le Mans',
            'tel' => '02.43.24.27.26',
            'horaire' => 'mardi au samedi de 12h00-14h30 et de 19h00-23h45',
            'description' => 'Venez déguster nos plats et spécialités, renouvelés à chaque saison.',
            'dateouverture' => '2015-04-16 ',
        ]);

        DB::table('restaurants')->insert([
            'nom' => 'Le Parvis Saint Hilaire',
            'adresse' => ' 7 Place Saint-Hilaire',
            'cp' => '72000',
            'ville' => 'Le Mans',
            'tel' => '02.43.28.92.55',
            'horaire' => 'mardi au samedi de 12h00-13h30 et de 19h30-21h15',
            'description' => 'Venez découvrir ici la cuisine portugaise traditionnelle. ',
            'dateouverture' => '2017-05-15 ',
        ]);

        DB::table('restaurants')->insert([
            'nom' => 'Le Tablier de Jaurès',
            'adresse' => '138 Avenue Jean Jaurès',
            'cp' => '72000',
            'ville' => 'Le Mans',
            'tel' => '02.43.78.93.81',
            'horaire' => 'dimanche au samedi 11:00 - 21:00',
            'description' => 'Non loin du centre-ville, cet agréable restaurant est niché dans une ancienne ',
            'dateouverture' => '2017-06-20 ',
        ]);

        DB::table('restaurants')->insert([
            'nom' => 'L\'un des Sens',
            'adresse' => '9 rue du Dr Leroy',
            'cp' => '72000',
            'ville' => 'Le Mans',
            'tel' => '02.43.80.94.81',
            'horaire' => 'dimanche au samedi 11:00 - 21:00',
            'description' => 'Connaissant la très bonne réputation de ce restaurant ',
            'dateouverture' => '2017-04-17 ',
        ]);

        DB::table('restaurants')->insert([
            'nom' => 'la vieille Porte',
            'adresse' => '12 rue de la vieille porte',
            'cp' => '72000',
            'ville' => 'Le Mans',
            'tel' => '02.43.24.03.76',
            'horaire' => 'Lundi, mardi, jeudi et vendredi 12h00-13h30  19h30-21h30 dimanche 19h30-21h30 ',
            'description' => 'Connaissant la très bonne réputation de ce restaurant ',
            'dateouverture' => '2016-07-25 ',
        ]);


    }


}
