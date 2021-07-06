<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;

class HomeController extends Controller
{
    public function index()
    {
        $Messages = Message::all();

//        foreach ($Messages as $message){
//            echo $message->title;
//        }die;


        return view('home', [
            'messages' => $Messages
        ]);
    }
}
