<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Produit;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Produit::create([
            'nom' => 'Collier Élégance',
            'slug' => Str::slug('Collier Élégance'),
            'description' => 'Un collier élégant pour toutes les occasions.',
            'prix' => 49.99,
            'image' => 'images/collier1.png',
            'categorie_id' => 1 // Associe au collier
        ]);

        Produit::create([
            'nom' => 'Bracelet Raffiné',
            'slug' => Str::slug('Collier Élégance'),
            'description' => 'Un bracelet raffiné et intemporel.',
            'prix' => 39.99,
            'image' => 'images/bracelet1.png',
            'categorie_id' => 2 // Associe au bracelet
        ]);

        Produit::create([
            'nom' => 'Boucles Élégantes',
            'slug' => Str::slug('Collier Élégance'),
            'description' => 'Des boucles d\'oreilles modernes et élégantes.',
            'prix' => 29.99,
            'image' => 'images/boucle1.png',
            'categorie_id' => 3 // Associe aux boucles
        ]);
    }
}
