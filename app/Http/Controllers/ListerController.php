<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book as Book;
class ListerController extends Controller
{
    public function index() {
        $books = Book::all();
        $value = array();
        foreach ($books as $book) {
            array_push($value, ["title" => $book->title, "author" => $book->author,]);
        };
        return view('lister', ["books" => $value]);
    }
    public function ajoutlivre() {
        return view('ajoutlivre');
    }
    public function insertLivre(Request $request) {
        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->save();
        return redirect('/lister');
    }
}
