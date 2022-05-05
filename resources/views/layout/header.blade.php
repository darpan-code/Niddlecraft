<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon link -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&family=Lobster&family=Red+Hat+Display:wght@400;500;600;700&family=Satisfy&display=swap" rel="stylesheet">

    <!-- jquery js -->
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js') }}"></script>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- font awesome css -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

    <!-- tailwind css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- mouse scroll animation css -->
    <link rel="stylesheet" href="{{ asset('css/mouse-scroll-animation.css') }}">

    <!-- custome css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        
    <!-- navbar scroll js -->
    <script src="{{ asset('js/scroll.js') }}"></script>

    <title>@stack('title')</title>
</head>
<body>