<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::factory()
            ->times(100)
            ->create();

        $categories = Category::all();
        Book::all()->each(function ($book) use ($categories) {
            $book->categories()->attach(
                $categories->random(2)->pluck('id')->toArray()
            );
        });

        $users = User::all();
        Book::all()->each(function ($book) use ($users) {
            $book->users()->attach(
                $users->random(rand(1, 2))->pluck('id')->toArray()
            );
        });
    }
}
