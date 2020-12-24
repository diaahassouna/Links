<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Link::factory()->count(5)->create();
       // factory(App\Models\Link::class, 5)->create(); // Old Version Syntax
    }
}
