<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookCategory;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = Book::factory()
                    ->count(50)
                    ->create();
        
        $book->each(function ($book) {
            BookCategory::factory()->count(1)->create(['id_book' => $book['id']]);
        });
    }
}
