<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //

    public function create(){

        $message = new Message();
        $message->title = $_POST['title'];
        $message->content = $_POST['content'];

        $message->save();

        return redirect('/');
    }

    public function view($id){

        $message = Message::findOrFail($id);

        return view('message', [
            'message' => $message
        ]);



    }
}
