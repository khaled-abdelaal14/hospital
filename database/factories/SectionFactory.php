<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class SectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Section::class;
    public function definition()
    {
        return [
            'name' => $this->faker->unique->randomElement(['قسم الاطفال','قسم الجراحة','قسم المخ والاعصاب','قسم الباطنة']),
            'description'=> $this->faker->paragraph,
        ];
    }
}
