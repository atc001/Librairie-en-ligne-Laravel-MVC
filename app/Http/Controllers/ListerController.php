<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book as Book;
use App\Author as Author;
class ListerController extends Controller
{
    public function index() {
        $books = Book::all();
        $value = array();
        $i = 0;
        foreach ($books as $book) {
            array_push($value, ["title" => $book->title, "author" => array(), "id" => $book->id,]);
            foreach ($book->authors as $author) {
                array_push($value[$i]["author"], $author->author);
            }
            $i ++;
        };
        return view('lister', ["books" => $value]);
    }
    public function ajoutlivre() {
        $authors = Author::all();
        $authorList = array();
        foreach ($authors as $author) {
            $authorList[$author->id] = $author->author;
        }
        return view('ajoutlivre', ['authors' => $authorList]);
    }
    public function insertLivre(Request $request) {
        $book = new Book;
        $book->title = $request->title;
        $book->save();
        $book->authors()->attach($request->author);
        return redirect('/lister');
    }
    public function deletelivre(Request $request) {
        $book = Book::find($request->id);
        $book->delete();
        return redirect('/lister');
    }
    public function updatelivre(Request $request) {
        $book = Book::find($request->id);
        return view('updatelivre', ['title' => $book->title, 'author' => $book->author, 'id' => $book->id]);        
    }
    public function updatelivre_action(Request $request) {
        $book = Book::find($request->id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->save();
        return redirect('/lister');
    }
}
