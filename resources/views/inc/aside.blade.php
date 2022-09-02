
@section('aside')    

<head>
<style type="text/css">
         div.aside {
    width: 70px; 
    background: #ccc;
    padding: 15px;
    padding-right: 30px; 
    border: solid 1px black; 
    float: left;
} 
</style>
</head>



<div class="aside">
        <h4>Боковая панель</h4>
        <input type="button" onclick="window.location.href = '/';" value="Главная"/>
        <input type="button" onclick="window.location.href = '/catalog';" value="Каталог"/>
        <input type="button" onclick="window.location.href = '/register';" value="Регистрация"/>
        <input type="button" onclick="window.location.href = '/about';" value="О нас"/>
        
        <p>Навигаторная панель, епт</p>
        
        
        @show
    </div>