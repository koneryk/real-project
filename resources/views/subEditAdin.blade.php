    <form method="POST" action="{{route('subEditAdin_succes',['id'=>$submission->id])}}">
        @csrf
        <h2>{{$submission->id}}</h2>
        <p>{{$submission->place}}</p>
        <p>{{$submission->time}}</p>
        <p>{{$submission->pay}}</p>
        <select name="status" id="status">
            <option value="Новая">Новая</option>
            <option value="Мероприятие назначено">Мероприятие назначено</option>
            <option value="Завершено">Завершено</option>
        </select>
        <button type="submit">Сохранить</button>
    </form>
    <form action="{{redirect('/admin')}}"><button type="submit">Назад</button></form>
