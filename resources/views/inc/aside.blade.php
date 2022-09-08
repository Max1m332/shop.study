
@section('aside')    

<head>
<style type="text/css">
         div.aside {
    
    background: #ccc;
     border: solid 1px black; 
     position: absolute;
     height: 700px;
left: 0;

} 
</style>
</head>



<div class="aside">
        <h4>Боковая панель</h4>
        <input type="button" onclick="window.location.href = '/';" value="Главная"/>
        <input type="button" onclick="window.location.href = '/catalog';" value="Каталог"/>
        <input type="button" onclick="window.location.href = '/login';" value="Авторизация"/>
        <input type="button" onclick="window.location.href = '/about';" value="О нас"/>
        
        <p>Навигаторная панель, епт</p>
        
        
        @show
    </div>