<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i <50; $i++){
            $newPackage = new Package();

            $newPackage->name = $faker->sentence($nbWords = 3, $variableNbWords = true);
            $newPackage->description = $faker->paragraph(5, true);
            $newPackage->destination = $faker->country();
            $newPackage->days = $faker->numberBetween($min = 4, $max = 30);
            $newPackage->price = $faker->randomFloat(2, 100, 500);

            $newPackage->save();
        }
    }
}
