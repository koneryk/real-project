@extends('layouts.main')

@section('title')
    Просмотр заявок
@endsection

@section('content')
<section>
    <div class="submissions">
        @foreach($submission as $el)
            <div class="submission">
                <h2>{{$el->place}}</h2>
                <p>{{$el->time}}</p>
                <p>{{$el->pay}}</p>
            </div>
        @endforeach
    </div>
</section>
@endsection

@section('footer')
    <a href="{{route('submission.create.form')}}">А это сслыка на dashboard</a>
@endsection
