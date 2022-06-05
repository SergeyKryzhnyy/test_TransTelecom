<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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


        session(['user_timeout'=>true]);
        $user = User::all()->where('id','==', Auth::id());
        foreach ($user as $value)
        {
            $user_role = $value['user_role'];
            $time_session = $value['session_start'];
        }

        if (time() - strtotime($time_session) > 7200)
        {
            session(['user_timeout'=>false]);
        }

       $messages =  DB::table('messages')->orderBy('updated_at', 'desc')->paginate(5);
       foreach ($messages as $message)
       {
           $id_users[] = $message->id_user;
       }

       $user_names = User::all();


       return view('index', ['messages'=>$messages, 'user_timeout'=>session('user_timeout'), 'user_role'=>$user_role, 'user_names'=>$user_names]);
    }

}
