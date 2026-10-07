@if($errors->any())
    <div style="background: red; color: white; padding: 20px;">
        <ul>
            @foreach($errors->all() as $err)
                <li>{{$err}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('login')}}" method="POST">
    @csrf
    <input name="email" id="email" placeholder="email">
    <input name="password" id="password" placeholder="password">
    <a href="{{route('register.form')}}">Зарегистрироваться</a>
    <button type="submit">Войти</button>
</form>
