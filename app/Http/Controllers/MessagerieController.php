<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use App\Message as Message;
class MessagerieController extends Controller
{
    public function index() {
        $messages = Message::all();
        $value = array();
        $i = 0;
        foreach ($messages as $message) {
            array_push($value, ["emetteur" => $message->emetteur, "message" => $message->message, "id" => $message->id,]);
            foreach ($book->authors as $author) {
                array_push($value[$i]["author"], $author->author);
            }
            $i ++;
        };
        return view('messagerie', ["books" => $value]);
    }
    public function ecrire() {
        $names = User::all();
        $nameList = array();
        foreach ($names as $name) {
            $nameList[$name->id] = $name->name;
        }
        return view('ecrire', ['names' => $nameList]);
    }
}
