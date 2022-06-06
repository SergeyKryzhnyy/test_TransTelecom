<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $messages = ['сообщение1','сообщение2', 'сообщение3', 'сообщение4', 'сообщение5','сообщение6','сообщение7','сообщение8',
            'сообщение9','сообщение10','сообщение11','сообщение12'];
        $author =  ['автор1', 'автор2','автор3', 'автор4', 'автор5'];

        for($i=1;$i<10;$i++)
        {
            DB::table('users')->insert([
                'name' => $author[rand(0,4)],
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('secret'),
                'user_role'  => rand(2,3)
            ]);
        }
        for($i=1;$i<10;$i++)
        {
            DB::table('messages')->insert([
                'message' => $messages[rand(0,12)],
                'id_user' => $i,
            ]);

        }
    }
}
