@extends('layouts.main')

@section('title')
    Просмотр заявок
@endsection
@section('content')
    <section>
        <a href="{{route('admin.rooms.add')}}">Проинициизировать аудиторию</a>
        <form action="{{route('logout')}}" method="post">
            <button type="submit">Разлогиниться</button>
        </form>
    </section>
    <section>
        <div class="">
            @foreach($submission as $el)
                <form action="{{route('subEditAdin',['id' => $el->id])}}">
                    <h2>{{$el->id}}</h2>
                    <p>{{$el->place}}</p>
                    <p>{{$el->time}}</p>
                    <p>{{$el->pay}}</p>
                    <p>{{$el->status}}</p>
                    <button type="submit">Редактировать</button>
                </form>
            @endforeach
        </div>
    </section>
@endsection
