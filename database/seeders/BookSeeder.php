<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book; // Make sure to import the Book model

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample books
        Book::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'published_year' => 1925,
            'genre' => 'Fiction',
            'description' => 'A story about the American Dream and the Roaring Twenties.'
        ]);

        Book::create([
            'title' => '1984',
            'author' => 'George Orwell',
            'published_year' => 1949,
            'genre' => 'Dystopian',
            'description' => 'A novel about totalitarianism and surveillance.'
        ]);

        Book::create([
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'published_year' => 1960,
            'genre' => 'Fiction',
            'description' => 'A story about racial injustice in the American South.'
        ]);

        Book::create([
            'title' => 'No longer human',
            'author' => 'Osamui',
            'published_year' => 1986,
            'genre' => 'triller',
            'description' => 'testing'
        ]);

        // Add more books as needed...
    }
}
