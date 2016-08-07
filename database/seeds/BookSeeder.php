<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
        	'title' => 'Buku kece',
        	'author' => 'Dwi Hujianto',
        	'description' => 'Contoh deskripsi sembarangs'
        ]);
    }
}
