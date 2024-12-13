<!DOCTYPE html>
<html>
<head>
    <title>{{$title}}</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" />
</head>
<body>
<nav>
    <ul>
        <li><a href="/cars">Home</a></li>
        <li><a href="/cars/add">Add</a></li>
        <li><a href="/cars/about">About</a></li>
    </ul>
</nav>
{{$slot}}
</body>
</html>
