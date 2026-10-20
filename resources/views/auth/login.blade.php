<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
</head>
<body>
@if($errors->any())
    <div style="background: red; color: white; padding: 20px;">
        <ul>
            @foreach($errors->all() as $err)
                <li>{{$err}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="d-flex justify-content-center align-items-center min-vh-100">
            <form class="col-auto" action="{{route('login')}}" method="POST">
                <div class="mb-4">
                    <input class="form-control" name="login" id="login" placeholder="Введите логин">
                    <input class="form-control" name="password" id="password" placeholder="Введите пароль">
                    <a href="{{route('register.form')}}">Зарегистрироваться</a>
                    <button type="submit">Войти</button>
                </div>
                @csrf

            </form>


</div>

</body>

