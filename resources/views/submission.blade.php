<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Просмотр заявки</title>
</head>
<body>
<nav>
</nav>
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
<footer>
А это прсмотр заявок
    <a href="{{route('main')}}">А это сслыка на dashboard</a>
</footer>
</body>
</html>
