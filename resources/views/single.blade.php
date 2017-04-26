@extends('layouts.layout')

@section('content')
<!-- Находим автора поста -->
        @php
            foreach ($users as $user)
            if ($user->id == $post->author_id) $curr_user = $user;
        @endphp

<!-- Отображаем пост -->
<div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8" id="target-content">
            <br>

            <div class="post1">
                <div class="title1">{{$post->title}}</div>
                <div class="image1"><img src="{{$post->image}}" width="750px"></div>
                <div class="text1">{{$post->text}}<br></div>
                <div class="left-col1">
                    Марка: {{$post->mark}}<br>
                    Модель: {{$post->model}}<br>
                    Объем двигателя: {{$post->size}} л.<br>
                    Пробег: {{$post->trial}} тыс. км.<br>
                    Количество владельцев: {{$post->owner}}<br>
                </div>
                <div class="right-col1">
                    Владелец {{$curr_user->name}}<br>
                    Область: {{$post->region}}<br>
                    Город: {{$post->town}}<br>
                    Обращаться на Email:<br> {{$curr_user->email}}
                </div>
            </div>
            <!-- Кнопка на главную-->
            <br><hr>
            <div class="add_btn" style="text-align: center; width:100%;">
            <a href="/" class="btn btn-default">На главную</a>
            </div>
        </div>
    <div class="col-md-2"></div>
</div><br>
@endsection