<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Guest;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\User;
use Database\Factories\BookingFactory;
use Database\Factories\GuestFactory;
use Database\Factories\HotelFactory;
use Database\Factories\RoomFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            CitySeeder::class,
        );

        Hotel::factory()->count(10)->create();
        Room::factory()->count(10)->create();
        Guest::factory()->count(10)->create();
        Booking::factory()->count(10)->create();
    }
}