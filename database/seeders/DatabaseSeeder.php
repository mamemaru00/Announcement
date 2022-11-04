<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Team;
use App\Models\User;
use App\Models\Address;
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
        $this->call(AnnouncementsTableSeeder::class); 
    }
}
