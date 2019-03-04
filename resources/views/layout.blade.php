<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laravel Example Project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div class='container'>
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js')}}" type="text/js"></script>
</body>
</html>
