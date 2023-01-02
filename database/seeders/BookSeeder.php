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
        //1
        Book::Create([
            'name'=> 'Book Name 2',
            'description' =>'Book Description 2',
            'image_path'=> 'https://edit.org/photos/images/cat/book-covers-big-2019101610.jpg-1300.jpg'
        ]);
        //1
        Book::Create([
            'name'=> 'Book Name 3',
            'description' =>'Book Description 3',
            'image_path'=> 'https://edit.org/photos/images/cat/book-covers-big-2019101610.jpg-1300.jpg'
        ]);
        //1
        Book::Create([
            'name'=> 'Book Name 4',
            'description' =>'Book Description 4',
            'image_path'=> 'https://edit.org/photos/images/cat/book-covers-big-2019101610.jpg-1300.jpg'
        ]);
        Book::Create([
            'name'=> 'Book Name 5',
            'description' =>'Book Description 5',
            'image_path'=> 'https://edit.org/photos/images/cat/book-covers-big-2019101610.jpg-1300.jpg'
        ]);
        

        


    }
}
