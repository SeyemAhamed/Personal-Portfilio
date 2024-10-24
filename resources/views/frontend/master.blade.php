<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Personal>.< Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('frontend.includes.style')

</head>

<body class="index-page">

  @include('frontend.includes.header')

  <main>
    @yield('content')
  </main>

  @include('frontend.includes.footer')

  @include('frontend.includes.script')

  @stack('script')

</body>

</html>