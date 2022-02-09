<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Pizza;

class pizzas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 15; $i++) {
            $newpizza = new Pizza();
            $newpizza->name = $faker->word();
            $newpizza->description = $faker->sentence();
            $newpizza->price = $faker->randomFloat(2, 1, 50);
            $newpizza->vegetarian = $faker->boolean();
            $newpizza->save();
        }
    }
}
