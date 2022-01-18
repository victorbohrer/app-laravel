<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>@yield('title')</title>
  <link href="{{asset('assets/fonts/ibmplexsans-bold-webfont.woff2')}}" as="font">
  <link href="{{asset('assets/fonts/ibmplexsans-regular-webfont.woff2')}}" as="font">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  {{-- favicon --}}
  <link rel="icon" type="image/png" href="{{ asset('assets/img/home/logo-1.png') }}">
  
  
  {{-- META TAGS --}}
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @stack('meta-description')
  
  
  {{-- CSS --}}
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css" />
    @stack('css')
</head>

<body>
  @include('front.includes.header')
  @yield('main')
  @include('front.includes.footer')
  @stack('scripts-footer')
</body>
