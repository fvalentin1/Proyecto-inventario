<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $carBrands = ['Toyota', 'Honda', 'Ford', 'Chevrolet', 'Nissan', 'BMW', 'Mercedes-Benz', 'Volkswagen', 'Audi', 'Hyundai', 'MG', 'Mazda', 'Kia', 'Jeep', 'Subaru', 'Volvo', 'Porsche', 'Land Rover', 'Jaguar', 'Fiat', 'Peugeot', 'Renault', 'Citroën', 'Suzuki', 'Chery', 'Geely', 'BYD', 'Great Wall', 'Changan', 'JAC', 'Haval', 'Dongfeng', 'BAIC', 'SAAB', 'Foton'];

        for ($i = 0; $i < 25; $i++) {
            DB::table('cars')->insert([
                'brand' => $faker->randomElement($carBrands),
                'model' => ucfirst($faker->word),
                'year' => $faker->year,
                'price' => $faker->randomFloat(2, 10000, 50000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
