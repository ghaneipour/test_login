@extends('layouts.app2')

@section('content')

<br><br><br><br>
by pedram Greeting.blade.php

<html>
    <body>
    <h1>Hello, </h1>
    <h1>email: {{ $ke }}</h1>
    <h1>name: {{ $nm }}</h1>
     <hr><a href="/">home</a>  

     <audio controls  preload="auto"  autoplay="true">
         <source 
            type="audio/mpeg" 
            id="player" 
            src="https://www.mybia2music.com/download/114545878/?get=128"
            
         >
    </audio><br>
    <a href="https://www.mybia2music.com/category/mp3" target="_blank">دانلود آهنگ</a>

    </body>
</html> 


@endsection