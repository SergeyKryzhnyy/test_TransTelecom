<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Config;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       $messages =  Message::getAllMessages();//здесь я беру все сообщения и переписываю столбец user_id (пишу в него name из таблицы users)

       foreach ($messages as $message)
       {
           $id_users[] = $message->id_user;
           $created_at[] = $message->created_at;
       }

        for ($i=0;$i<count($created_at);$i++)
        {
            if (time() - strtotime($created_at[$i])>config('message_timeout'))
            {
                $message_timeout[] = false;
            }
            else
            {
                $message_timeout[] = true;
            }
        }

       return view('index', ['messages'=>$messages, 'message_timeout'=>$message_timeout]);
    }

}
