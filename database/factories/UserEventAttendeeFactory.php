<?php

namespace Database\Factories;

use App\Models\UserEventAttendee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class UserEventAttendeeFactory extends Factory
{
    protected $model = UserEventAttendee::class;

    public function definition(): array
    {
        return [
            'user_id' => DB::table('users')->inRandomOrder()->first()->id,
            'event_id' => DB::table('events')->inRandomOrder()->first()->id
        ];
    }
}
