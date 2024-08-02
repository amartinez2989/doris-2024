<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

</head>
<body 
    style="
        font-family: 'Open Sans', sans-serif; 
        margin: 0px; 
        padding: 0px; 
        background-color: #f8f8f8; 
        font-size: 14px;
    ">
    <div style="
        background-color: #fff;
        display: block;
        margin: 0px auto;
        min-height: 120px;
        max-width: 640px;
        width: 94%;
        ">
        <div style="display: block; width: 100%">
            <img src="{{ url('/static/images/email_header.png') }}" style="display: block;width: 100%;">
        </div>
        <div style="padding: 32px;">
            @section('content')
            @show
        </div>
    </div>
</body>
</html>