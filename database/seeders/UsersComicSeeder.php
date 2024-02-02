<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class UsersComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics_db');

        foreach ($comics as $comicData) {
            $comic = new Comic([
                'title' => $comicData['title'],
                'description' => $comicData['description'],
                'thumb' => $comicData['thumb'],
                'price' => floatval($comicData['price']),
                'series' => $comicData['series'],
                'sale_date' => $comicData['sale_date'],
                'type' => $comicData['type'],
                'artists' => $comicData['artists'],
                'writers' => $comicData['writers'],
            ]);

            $comic->save();
        }
    }
}
