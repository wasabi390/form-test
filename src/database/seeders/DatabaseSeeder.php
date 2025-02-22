<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            ContactsTableSeeder::class
        ]);
            Author::factory(35)->create();
    }
}
