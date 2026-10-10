<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main page</title>
</head>
<body>
<nav>
<div class="logo"><p>НАШЕ ЛОГО</p></div>
    <div class="nav-bar">
        <form action="{{route('logout')}}" method="post">
            <button type="submit">Разлогиниться</button>
        </form>
        <a>Будущие ссылки на ресурсы</a>
    </div>
</nav>
<section class="main-wrapper">

    <form action="{{route('submission')}}" method="post">
        <p>Формирование заявки</p>
        <input type="text" placeholder="Помещение" name="place" id="place">
        <input type="time" placeholder="Время" name="time" id="time">
        <p>Способы оплаты</p>
        <select name="pay" id="pay">
            <option>СБП</option>
            <option>При очном посещении</option>
        </select>
        <button type="submit">Отправить</button>
    </form>
</section>
<footer><p>Делал, конечно же я</p></footer>
</body>
</html>
