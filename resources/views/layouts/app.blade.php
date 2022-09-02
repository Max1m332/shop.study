<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
     
    
</head>
<body>
    @yield('content')

    @include('inc.aside')


    @include('inc.footer')
</body>
</html>