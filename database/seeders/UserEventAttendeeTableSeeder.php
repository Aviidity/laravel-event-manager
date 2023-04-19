<?php

namespace Database\Seeders;

use App\Models\UserEventAttendee;
use Illuminate\Database\Seeder;

class UserEventAttendeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserEventAttendee::factory()->count(5)->create();
    }
}
