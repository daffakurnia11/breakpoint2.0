<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="/vendor/fontawesome-free-6.0.0-web/css/all.css">
  <link rel="stylesheet" href="/css/style.css?modify={{ date("Ymd") }}">
  <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
  <title>{{ $title }} - Breakpoint Indonesia</title>
</head>
<body>

  @include('layouts.navbar')
  
  @yield('content')
  
  @include('layouts.footer')

  <!-- Javascript -->
  <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.js"></script>
  <script src="/vendor/jquery/dist/jquery.js"></script>
  <script src="/js/main.js?modify={{ date("Ymd") }}"></script>
  <script>
    
  </script>
</body>
</html>