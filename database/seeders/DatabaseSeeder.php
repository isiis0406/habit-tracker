<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tenant;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Création du tenant
        $tenant =Tenant::create(['id' => 'school1','name' => 'School1']);
        //Création du domaine du tenant
        $tenant->domains()->create(['domain' => 'school1.localhost']);
        //Création du tenant
        $tenant =Tenant::create(['id' => 'school2','name' => 'School2']);
        //Création du domaine du tenant
        $tenant->domains()->create(['domain' => 'school2.localhost']);

        tenancy()->runForMultiple(null, function () {
            // Création de l'utilisateur
            \App\Models\User::factory(1)->create();
            // Création des posts
            \App\Models\Post::factory(10)->create();
        });

      

        // $tenant->run(function () {
        //     \App\Models\Post::factory(10)->create();
        // });

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
