<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;

class Message extends Model
{
    use HasFactory;

    public static function getAllMessages()
    {
        $messages =  DB::table('messages')->orderBy('updated_at', 'desc')->paginate(20);

        foreach ($messages  as $message)
        {
            $user_name = DB::table('users')->where('id', '=', $message->id_user)->value('name');
            $message->id_user = $user_name;
        }

        return $messages;
    }
}
