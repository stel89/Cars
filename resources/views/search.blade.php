@extends('layouts.layout')

@section('content')


<div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8" id="target-content">
            <br>
            
            <!--Форма поиска-->
            
            <form class="form-inline" style="text-align: justify;" method="get" action="/search">
                {{ csrf_field() }}
                <caption><h2>Поиск по</h2></caption><br>
                <div class="form-group">
                    <select class="form-control" id="region" name="region" >
                        <option id="0" value="0">Область (неважно)</option>
                        <option id="1" value="Днепропетровская область">Днепропетровская область</option>
                        <option id="2" value="Закарпатская область">Закарпатская область</option>
                        <option id="3" value="Киевская область">Киевская область</option>
                        <option id="4" value="Одесская область">Одесская область</option>
                        <option id="5" value="Луганская область">Луганская область</option>
                        <option id="6" value="Сумская область">Сумская область</option>
                        <option id="7" value="Херсонская область">Херсонская область</option>
                        <option id="8" value="Черниговская область">Черниговская область</option>
                        <option id="9" value="Винницкая область">Винницкая область</option>
                        <option id="10" value="Донецкая область">Донецкая область</option>
                        <option id="11" value="Запорожская область">Запорожская область</option>
                        <option id="12" value="Кировоградская область">Кировоградская область</option>
                        <option id="13" value="Львовская область">Львовская область</option>
                        <option id="14" value="Полтавская область">Киевская область</option>
                        <option id="15" value="Тернопольская область">Тернопольская область</option>
                        <option id="16" value="Хмельницкая область">Хмельницкая область</option>
                        <option id="17" value="Черновицкая область">Черновицкая область</option>
                        <option id="18" value="Волынская область">Волынская область</option>
                        <option id="19" value="Житомирская область">Житомирская область</option>
                        <option id="20" value="Ивано-Франковская область">Ивано-Франковская область</option>
                        <option id="21" value="Курор Буковель">Курорт Буковель</option>
                        <option id="22" value="Николаевская область">Николаевская область</option>
                        <option id="23" value="Ровенская область">Ровенская область</option>
                        <option id="24" value="Харьковская область">Харьковская область</option>
                        <option id="25" value="Черкасская область">Черкасская область</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" id="town" name="town" >
                        <option id="0" value="0">Город (неважно)</option>
                        <option id="1" value="Киев">Киев</option>
                        <option id="2" value="Харьков">Харьков</option>
                        <option id="3" value="Одесса">Одесса</option>
                        <option id="4" value="Днепр">Днепр</option>
                        <option id="5" value="Донецк">Донецк</option>
                        <option id="6" value="Запорожье">Запорожье</option>
                        <option id="7" value="Львов">Львов</option>
                        <option id="8" value="Николаев">Николаев</option>
                        <option id="9" value="Кривой рог">Кривой рог</option>
                        <option id="10" value="Мариуполь">Мариуполь</option>
                        <option id="11" value="Луганск">Луганск</option>
                        <option id="12" value="Винница">Винница</option>
                        <option id="13" value="Макеевка">Макеевка</option>
                        <option id="14" value="Севастополь">Севастополь</option>
                        <option id="15" value="Симферополь">Симферополь</option>
                        <option id="16" value="Херсон">Херсон</option>
                        <option id="17" value="Чернигов">Чернигов</option>
                        <option id="18" value="Полтава">Полтава</option>
                        <option id="19" value="Черкассы">Черкассы</option>
                        <option id="20" value="Хмельницкий">Хмельницкий</option>
                        <option id="21" value="Суммы">Суммы</option>
                        <option id="22" value="Житомир">Житомир</option>
                        <option id="23" value="Черновцы">Черновцы</option>
                        <option id="24" value="Горловка">Горловка</option>
                        <option id="25" value="Ровно">Ровно</option>
                        <option id="26" value="Каменское">Каменское</option>
                        <option id="27" value="Кропивницкий">Кропивницкий</option>
                        <option id="28" value="Ивано-Франковск">Ивано-франковск</option>
                        <option id="29" value="Кременчуг">Кременчуг</option>
                        <option id="30" value="Тернополь">Тернополь</option>
                        <option id="31" value="Луцк">Луцк</option>
                        <option id="32" value="Белая Церковь">Белая Церковь</option>
                        <option id="33" value="Краматорск">Краматорск</option>
                        <option id="34" value="Мелитополь">Мелитополь</option>
                        <option id="35" value="Керчь">Керчь</option>
                        <option id="36" value="Никополь">Никополь</option>
                        <option id="37" value="Ужгород">Ужгород</option>
                        <option id="38" value="Славянск">Славянск</option>
                        <option id="39" value="Бердянск">Бердянск</option>
                        <option id="40" value="Алчевск">Алчевск</option>
                        <option id="41" value="Павлоград">Павлоград</option>
                        <option id="42" value="Северодонецк">Северодонецк</option>
                        <option id="43" value="Евпатория">Евпатория</option>
                        <option id="44" value="Каменец-Подольский">Каменец-Подольский</option>
                        <option id="45" value="Лисичанск">Павлоград</option>
                        <option id="46" value="Бровары">Бровары</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Модель" name="model">
                </div><br><br>
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Марка" name="mark">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Объем двигателя" name="size" style="width:222px;">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Количество хозяев" name="owner">
                </div><br><br>
                <div class="form-group">
                    <label for="region">Пробег(тыс. км.)</label>
                    <input type="text" class="form-control"  placeholder="От" name="trial_from">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="До" name="trial_to">
                </div>
                <button class="btn btn-default">Искать</button>
            </form>

            <!-- Выводим тачки ------------------------------------------------------------------------------------>

            <div class="posts">
                @include('posts')
            </div>

            <!-- Если не вошли покажем кнопку войти а если вошли то кнопку выйти-->



            <br><hr>
            <div class="add_btn" style="text-align: center; width:100%;">
                <a href="/" class="btn btn-default">На главную</a>
                @if (Auth::check())
                     <a href="/add" class="btn btn-success">Добавить объявление</a>
                    <a class="btn btn-danger" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                       Выйти
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    @else
                    <br><br>Чтобы оставлять объявления <a href="/login" class="btn btn-success">Войдите</a> или <a href="/register" class="btn btn-default">
                    Зарегестрируйтесь</a>
                    @endif
            </div>
        </div>
    <div class="col-md-2"></div>
</div><br>
<!-- Подключаем скрипты свои -->
<script src="/js/my.js"></script>

@endsection