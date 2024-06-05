<?php

namespace Database\Seeders;

use App\Models\Meetings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Meetings::factory()->count(10)->create();
    }
}
