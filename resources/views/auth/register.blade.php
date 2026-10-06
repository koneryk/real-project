@if($errors->any())
    <div style="background: red; color: white; padding: 20px;">
        <ul>
            @foreach($errors->all() as $err)
                <li>{{$err}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('register')}}" method="POST">
    @csrf
    <input name="name" id="name" placeholder="name">
    <input name="email" id="email" placeholder="email">
    <input name="password" id="password" placeholder="password">
    <a href="{{route('login.form')}}">Войти</a>
    <button type="submit">Зарегистрироваться</button>
</form>
