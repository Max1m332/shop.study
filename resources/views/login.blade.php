@extends('layouts.app')

@section('title-block')Авторизация@endsection

@section('content')
<style> h4 {
        text-align: center;
    }
    div.form-group {
        text-align: center;
    }

</style>


<h1> Авторизация </h1>
<h4>Введите свои данные</h4>

<form action="{{ route('login-form')}}" method="post">
    
        
        
         <div class="form-group">
         @csrf
         <label for="email">Введите Почту</label>
        <input type="text" name="email" placeholder="Почта" id="email" class="form-control"><br>
        <label for="password">Введите Пароль</label>
        <input type="text" name="password" placeholder="Пароль" id="password" class="form-control"><br>       
        
        <button type="submit" class="btn btn success">Отправить</button>
    </div>
        
    
</form>

@error('login')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

@endsection

@section('aside')
 @parent
 @endsection