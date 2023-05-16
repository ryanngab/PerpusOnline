<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Genre;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(4)->create();
        \App\Models\Book::factory(15)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\User::create([
            'name' => 'muhamad Ryan Firdaus',
            'No' => '0859102724182',
            'email' => 'firdausriyan402@gmail.com',
            'password' => bcrypt('12007948'),
            'address' => 'Kp peundeuy',
            'role' => 'Admin',
            'Admin' => '1',
        ]);

        \App\Models\Genre::create([
            'name' => 'Novel',
            'slug' => 'novel'
        ]);
        
        \App\Models\Genre::create([
            'name' => 'Mystery',
            'slug' => 'mystery'
        ]);
        
        \App\Models\Genre::create([
            'name' => 'Comedy',
            'slug' => 'comedy'
        ]);
        
        \App\Models\Genre::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);
        
        \App\Models\Genre::create([
            'name' => 'Cerpen',
            'slug' => 'cerpen'
        ]);
        
        \App\Models\Genre::create([
            'name' => 'Sejarah',
            'slug' => 'sejarah'
        ]);


    }

}
