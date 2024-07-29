<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>{{config('cms.app_name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    <meta name="SubrouteName" content="@yield('subRouter')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="stylesheet" href="{{ url('/static/css/core.css?v='.time())}}">
    <link href="stylesheet" href="{{ url('/static/css/single_page.css?v='.time())}}">
</head>
<body>
    <div class="wrapper">
        @section('content')
            
        @show
    </div>

</body>
</html>
