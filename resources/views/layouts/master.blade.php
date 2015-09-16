<!DOCTYPE html>
<html>
<head>
  <title>@lang('staticpage.app_name')</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
  @yield('style')
</head>
<body>
  @include('layouts.header')
  <div class="container">
    @if(session()->has('flash_message'))
      <div class="alert alert-success">
        {{ session()->get('flash_message') }}
      </div>
    @endif
    @yield('content')
    @include('layouts.footer')
  </div>
</body>
</html>
