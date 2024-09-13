<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\TravelPackage;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
            $newTravel = new TravelPackage();
            $newTravel->name = $faker->word();
            $newTravel->destination = $faker->country();
            $newTravel->description = $faker->text(200);
            $newTravel->price = $faker->numberBetween(1500, 10000);
            $newTravel->departure_date = $faker->dateTimeBetween('now', '+1 year');
            $newTravel->return_date = $faker->dateTimeBetween('+1 week', '+1 year');
            $newTravel->available_seats = $faker->numberBetween(10, 50);
            $newTravel->is_included_flight = $faker->boolean(false);
            $newTravel->save();
        };
    }
}

            // $table->string('name', 30);
            // $table->string('destination', 50);
            // $table->text('description')->nullable();
            // $table->decimal('price', 8, 2);
            // $table->date('departure_date');
            // $table->date('return_date');
            // $table->integer('available_seats');
            // $table->boolean('is_included_flight')->default(false);
