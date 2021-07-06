<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body class="bg-dark">
    @include('partial.section1')
    @include('partial.section2')
    @include('partial.section3')
    @include('partial.section4')
    @include('partial.section5')
    @include('partial.section6')
    
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>