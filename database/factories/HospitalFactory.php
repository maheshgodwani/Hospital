<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hospital>
 */
class HospitalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name();
        $slug = $name."-".rand();
        return [
            'name'=>$name,
            'slug'=>Str::slug($slug),
            'mobile'=>fake()->phoneNumber,
            'disease'=>fake()->sentences(3, true),             
            'medicines'=>fake()->sentences(5, true)
        ];
    }
}
