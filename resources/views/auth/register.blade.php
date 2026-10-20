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
    <input name="login" id="login" placeholder="Введите логин">
    <input name="email" id="email" placeholder="Введите email">
    <input name="password" id="password" placeholder="Введите пароль">
    <input name="FIO" id="FIO" placeholder="Введите ФИО">
    <input name="telephone" id="telephone" placeholder="Введите телефон">
    <a href="{{route('login.form')}}">Войти</a>
    <button type="submit">Зарегистрироваться</button>
</form>
