<?php


namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function fillBook() {
        $book = new Book();
        $uuid = (string)Str::uuid();
        $book->fill([
            'id' => 20,
            'uuid' =>  $uuid,
            'name' => 'FillBook',
            'price' => 1500,
        ]) ;
        $book->save();
    }

     public function createBook() {
        $uuid = (string)Str::uuid();
        Book::create([
            'id' => 20,
            'uuid' =>  $uuid,
            'name' => 'CreateBook',
            'price' => 1200,
        ]);
    } 

    public function insertBook() { 
        $book = new Book();
        $uuid = (string)Str::uuid();
        $book::insert([
            'id' => 20,
            'uuid' =>  $uuid,
            'name' => 'InsertBook',
            'price' => 1800,
        ]);
}
