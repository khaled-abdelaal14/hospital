<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class imageSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Image::factory()->count(30)->create();
    }
}
