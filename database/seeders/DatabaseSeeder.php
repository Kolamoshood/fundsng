<?php

namespace Database\Seeders;

use App\Models\Good;
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
        \App\Models\User::factory(10)->create();

        Good::factory(15)->create();

        // Good::create(
        //     [
        //         'title' => 'Biscuit',
        //         'label' => 'chocolate',
        //         'company' => 'Yale',
        //         'email' => 'yale@biscuits.com',
        //         'location' => 'Nigeria',
        //         'website' => 'https://www.yalebiscuits.com',
        //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, quam? Officia sit consequatur vel omnis sint iste facere non animi iusto cupiditate nesciunt, deleniti et'
        //     ]
        //     );

        // Good::create(
        //     [
        //         'title' => 'Sweet',
        //         'label' => 'Lollypop',
        //         'company' => 'Cadbury',
        //         'email' => 'cadbury@sweets.com',
        //         'location' => 'Nigeria',
        //         'website' => 'https://www.cadburysweets.com',
        //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, quam? Officia sit consequatur vel omnis sint iste facere non animi iusto cupiditate nesciunt'
        //     ]
        //     );
    }
}
