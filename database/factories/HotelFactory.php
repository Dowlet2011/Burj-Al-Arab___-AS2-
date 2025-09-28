<?php

namespace Database\Factories;

use App\Models\City;
use Database\Seeders\CitySeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cityId = City::inRandomOrder()->first();

        return [
            "city_id"=> $cityId-> id,
            "name"=> fake()-> name,
            "address"=> fake()-> address,
            "phone_num"=> fake()-> phoneNumber(),
            "email"=> fake()-> email,
            "star"=> fake()-> numberBetween(1,5),
        ];
    }
}
