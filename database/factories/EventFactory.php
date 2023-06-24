<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name=fake()->name();
        return [
            'title'=>$name,
            'description'=>fake()->text(),
            'file_url'=>$name,
            'event_link'=>$name,
    

        ];
    }
}
