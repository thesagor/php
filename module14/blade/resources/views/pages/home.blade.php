<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Homepage</h1>
@php
    $a=30;
    $b=30;
    $c=$a+$b;
@endphp

@foreach($students as $chatro)
    <ul>
        <li>This is our chatro name: {{$chatro['name']}} and age: {{$chatro['age']}}</li>
    </ul>
@endforeach
@include('pages.testimonial',['a'=>$a,'b'=>$b,]);
@for($i=0; $i<10; $i++)
    <h1>{{$i}}</h1>
@endfor

@if($a<$b)
    <h1>Yes</h1>
@elseif($a>$b)
    <h1>No</h1>
@else
    <h1>Equal</h1>
@endif

</body>
</html>
