<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public function getAllMessages()
    {
        $messages = $this->hasMany(Message::class)->orderBy('updated_at');
        return $messages;
    }
}
