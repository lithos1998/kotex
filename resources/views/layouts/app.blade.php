<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0, minimum-scale-1.0, user-scalable=no">
    <meta name="author" content="Osole">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://kit.fontawesome.com/aa47ff6f99.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">  
    <title>Kotex</title>
</head>
<body>
    
    @include('components.nav')

    <section class="main">        
        @yield('content')        
    </section>

    @include('components.footer')
     <!-- jquery -->
    <script   src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>
    <script src="https://kit.fontawesome.com/dfa42ae890.js" crossorigin="anonymous"></script>
</body>