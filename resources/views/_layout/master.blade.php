<!DOCTYPE html>
<html>
<head>
    <title>{{env('APP_NAME')}}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>
<body>
<header>
    <div class="container">
        <div class="row">
            {{link_to(env('APP_URL'), env('APP_NAME'), [], null)}}
        </div>
    </div>
</header>
<div class="wrapper">
    <div class="container">
        @yield('content')
    </div>
</div>


<script src="{{asset('js/app.js')}}"> </script>


</body>
</html>
