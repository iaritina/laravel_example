<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Ny page en laravel tokony en .blade.php
         mba ahafana mampiasa ilay fonctionnalité propre an'ny blade --}}
    @foreach ($users as $user)
        <p>{{$user->pseudo}}</p>
    @endforeach
</body>
</html>