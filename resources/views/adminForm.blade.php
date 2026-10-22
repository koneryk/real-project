<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Панель админа</title>
</head>
<body>
    <nav>
    </nav>
    <section>
        <a href="{{route('admin.rooms.add')}}">Проинициизировать аудиторию</a>
        <p>Будущая панель адмиена</p>
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
    <footer>
    </footer>
</body>
</html>
