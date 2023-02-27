<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            type_bornageSeeder::class,
            butSeeder::class,
            habilitationSeeder::class,
            Etat_sortiSeeder::class,
            EtapeSeeder::class,
            posteSeeder::class,
            adresseSeeder::class,
            personne_physiqueSeeder::class,
            personne_moraleSeeder::class,
            personnelSeeder::class,
            dossierSeeder::class,
            Etape_dossierSeeder::class,
            parcelleSeeder::class,
            profilSeeder::class,
            fichierSeeder::class,
            sortieSeeder::class,
            but_sortiSeeder::class,
            utilisateurSeeder::class,
            commentaire_dossierSeeder::class,
            role_personneSeeder::class,
            personne_dossierSeeder::class,
            commentaire_fichierSeeder::class,
            observationSeeder::class,
        ]);
    }
}
