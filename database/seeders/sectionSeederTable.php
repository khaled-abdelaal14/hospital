<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class sectionSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Section::factory()->count(4)->create();

    }
}
