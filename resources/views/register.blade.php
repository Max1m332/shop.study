@extends('layouts.app')

@section('title-block')Регистрация@endsection

@section('content')
<style> h4 {
        text-align: center;
    }
    div.form-group {
        text-align: center;
    }

</style>


<h1> Регистрация </h1>
<h4>Введите свои данные</h4>

<form action="/register/submit" method="post">
    <div class="form-group">
        <label for="email">Введите Почту</label>
        <input type="text" name="email" placeholder="Почта" id="email"><br>&nbsp
        <label for="password">Введите Пароль</label>
        <input type="text" name="password" placeholder="Пароль" id="password"><br>&nbsp
        <label for="name">Введите Имя</label>
        <input type="text" name="name" placeholder="Имя" id="name">
    </div>
</form>



@endsection

@section('aside')
 @parent
 @endsection