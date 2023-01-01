<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        Book::Create([
            'name'=> 'Book Name 1',
            'description' =>'Book Description 1',
            'image_path'=> 'https://edit.org/photos/images/cat/book-covers-big-2019101610.jpg-1300.jpg'
        ]);
    }
}
