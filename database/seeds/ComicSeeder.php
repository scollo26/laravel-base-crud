<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $comic = new Comic();
            $comic ->title = $faker->words(2, true);
            $comic ->author = $faker->words(2, true);
            $comic ->price = $faker->randomFloat(2, 50, 200);
            $comic ->genre = $faker->words(3, true);
            $comic ->description = $faker->paragraph(5, false);
            $comic ->photo = $faker->imageUrl(640, 480,'comics', true);
            $comic->save();
        }
    }
}
