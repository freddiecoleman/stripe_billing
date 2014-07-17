<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="publishable-key" content="{{ Config::get('stripe.publishable_key') }}">
  <title>Laravel PHP Framework</title>  
</head>
<body>

  <div id="container">
    @yield('content')
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://js.stripe.com/v2/"></script>

  @yield('footer')

</body>
</html>
