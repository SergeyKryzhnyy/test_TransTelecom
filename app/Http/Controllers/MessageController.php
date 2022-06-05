<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function addNewMessage(Request $request)
    {

        $new_message = new  Message();
        $new_message->message =  $request->newMessage;

        if (Auth::check())
        {
            $new_message->id_user = Auth::id();
        }
        else
        {
            $new_message->id_user = 0;
        }

        $new_message->save();

        return redirect('/');
    }

    public function delMessage(Request $request)
    {
        Message::destroy($request->param);
        return redirect('/');
    }

    public function changeMessage(Request $request)
    {
        $message = Message::find($request->param);
        $message->message = $request->changeMessage;
        $message->save();
        return redirect('/');
    }

}

