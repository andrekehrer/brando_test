<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meu Template</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <link href="{{ ('css/custom.css') }}" rel="stylesheet">

    <link href="{{ ('css/custom.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{('js/custom.js') }}"></script>


</head>
<body>

    @yield('content')

</body>
</html>