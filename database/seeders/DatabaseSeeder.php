<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //\App\Models\User::factory(5)->create();

         $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@user.com'
         ]);

        Listing::factory(5)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'Laravel Junior Role',
        //     'tags' => 'Laravel, PHP',
        //     'company' => 'My Company',
        //     'location' => 'Lagos, Nigeria',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.mycompany.com',
        //     'description' => 'Lorem Ipsum'
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Mid-level Role',
        //     'tags' => 'Laravel, PHP, Backend, API',
        //     'company' => 'My Company',
        //     'location' => 'Lagos, Nigeria',
        //     'email' => 'email@email2.com',
        //     'website' => 'https://www.mycompany.com',
        //     'description' => 'Lorem Ipsum Dolor'
        // ]);
    }
}
