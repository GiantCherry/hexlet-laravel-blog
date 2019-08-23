<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body>
<a href="/">Home</a>
<a href="/about">About</a>
<a href="/articles">Articles</a>

<!-- BEGIN (write your solution here) -->
<h1>@yield('header')</h1>
<div>
    @yield('content')
</div>
<!-- END -->
</body>
</html>
