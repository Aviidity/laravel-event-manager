<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph,
            'location' => $this->faker->address,
            'date' => $this->faker->dateTimeBetween('+1 week', '+2 month'),
            'user_id' => DB::table('users')->inRandomOrder()->first()->id
        ];
    }
}
