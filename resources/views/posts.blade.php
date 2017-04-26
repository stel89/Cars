<!-- Находим автора поста -->
@foreach ($posts as $post)
    @php
        foreach ($users as $user)
        if ($user->id == $post->author_id) $curr_user = $user;
    @endphp
@endforeach

<!-- Выводим циклом все посты -->

@foreach ($posts as $post)

    <div class="post">
        <div class="title">{{$post->title}}</div>
        <div class="image"><img src="{{$post->image}}" width="550px"></div>
        <div class="left-col">Марка: {{$post->mark}}<br>
            Модель: {{$post->model}}<br>
            Цена: {{$post->price}} $</div>
        <div class="right-col">Создал {{$curr_user->name}}<br>
            <a href ="/post/{{$post->id}}">Больше информации...</a></div>
    </div>

@endforeach

<!-- Показываем кнопки пагинации с учетом ajax'а и get параметров поиска -->

<div class="pagination" style="text-align: center; width:100%;">
{{ $posts->appends(Request::capture()->except('page'))->links() }}
</div>