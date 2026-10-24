@extends('layouts.main')

@section('title')
Формирование заявки
@endsection
@section('content')
<section class="main-wrapper">

    <form action="{{route('submission.create.post')}}" method="post">
        <p>Формирование заявки</p>
        {{--<input type="text" placeholder="Помещение" name="place" id="place">--}}
        <select name="place" id="place">
            @foreach($rooms as $room)
                <option>{{$room->name}}</option>
            @endforeach
        </select>
        <input type="time" placeholder="Время" name="time" id="time">
        <p>Способы оплаты</p>
        <select name="pay" id="pay">
            <option>СБП</option>
            <option>При очном посещении</option>
        </select>
        <button type="submit">Отправить</button>
        <a class="submission" href="{{ route('submission.form') }}">Просмотр заявок</a>
    </form>
    <a href="{{route('submission.form')}}">Страница просмотра заявок</a>
</section>
@endsection
