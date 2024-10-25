<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  @include('backend.includes.style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">


    @include('backend.includes.header')

    @include('backend.includes.sidebar')


    <main>
        @yield('content')
    </main>

  @include('backend.includes.footer')

  @include('backend.includes.script')

  @stack('script')
</body>
</html>
