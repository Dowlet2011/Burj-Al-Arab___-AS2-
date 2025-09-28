<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Room;
use App\Models\Guest;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roomId = Room::inRandomOrder()->first();
        $guestId = Guest::inRandomOrder()->first();

        $check_in = Carbon::createFromDate(2024, 1, 1)-> addDays(rand(0, 700));
        $check_out = (clone $check_in)->addDays(rand(2, 10));

        return [
            "room_id"=> $roomId,
            "guest_id"=> $guestId,
            "check_in"=> $check_in,
            "check_out"=> $check_out,
        ];
    }
}
