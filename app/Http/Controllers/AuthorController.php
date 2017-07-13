<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author as Author;

class AuthorController extends Controller
{
    public function ajoutauthor() {
        $authors = Author::all();
        $return = array();
        foreach ($authors as $author) {
            array_push($return, $author->author);
        }
        return view('ajoutauthor', ['authors' => $return]);
    }
    public function insertauthor(Request $request) {
        $author = new Author;
        $author->author = $request->author;
        $author->save();
        return redirect('/ajoutauthor');
    }
}
