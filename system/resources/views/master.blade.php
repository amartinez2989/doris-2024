<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>{{config('cms.app_name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    <meta name="SubRouteName" content="@yield('subRouter')">
    @section('custom_meta')
    @show

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ url('/static/css/mdalert.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ url('/static/css/core.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ url('/static/css/style.css?v='.time()) }}">

    <script src="https://kit.fontawesome.com/8a747a52ac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="{{ url('/static/js/lang.js?='.time())}}"> </script>
    <script src="{{ url('/static/js/app.js?='.time())}}"> </script>


</head>
<body>
    @include('components.mdalert')
    @include('components.loader_action')
    <div class="wrapper">
        @include('components.sidebar')
        <div class="content">
            @section('content')
            @show
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script src="{{ url('/static/js/system.js?='.time())}}"> </script>
    <script src="{{ url('/static/js/mdalert.js')}}"> </script>
    @section('custom_js')
    @show
</body>
</html>
