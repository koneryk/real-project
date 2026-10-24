@extends('layouts.main')

@section('title')
Добавление аудитории
@endsection

@section('content')
<form method="post" action="{{route('admin.rooms.add.function')}}">
    <input type="text" name="name" id="name" placeholder="Введите какую аудиторию добавить">
    <input type="text" name="description" id="description" placeholder="Введите описание аудитории">
    <button type="submit">Добавить</button>
</form>
@endsection
