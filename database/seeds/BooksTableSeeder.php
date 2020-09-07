<?php

use Illuminate\Database\Seeder;
use App\Book;
use Faker\Generator as Faker;


class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 8 ; $i++) {
        $newBook = new Book ();
        $newBook->title = $faker->word();
        $newBook->author = $faker->lastName();
        $newBook->isbn = $faker->numberBetween();
        $newBook->summary = $faker->paragraph();
        $newBook->price = $faker->numberBetween(10, 50);
        $newBook->save();
      }

    }
}
