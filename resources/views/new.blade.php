<!DOCTYPE html>
@php
 const tittle = "TEST LARAVEL";
@endphp
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ tittle}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
       <a href="/newdeux" target="_blank" rel="noopener noreferrer">
        <h1>
            {{ tittle}}
        </h1></a>
    </header>

</body>
</html>