<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hotelId = Hotel::inRandomOrder()->first();
        return [
            "hotel_id"=> $hotelId-> id,
            "room_num"=> fake()-> numberBetween(101,1299),
            "type"=> fake()-> randomElement(["single", "double", "lux", "vip"]),
            "per_night_price"=> fake()-> randomFloat(2, 10, 1255),
            "is_available"=> fake()-> boolean(60)
        ];
    }
}
