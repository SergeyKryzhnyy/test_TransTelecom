<div>
    @foreach($message  as $value)
        Создан пост от пользователя с id{{$message->id_user}}.<br>
        Содержимое поста:{{$message->text}}.<br>
        Время публикации:{{$message->created_at}}.<br>
    @endforeach
</div>


