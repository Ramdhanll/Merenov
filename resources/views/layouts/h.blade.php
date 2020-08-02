<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;900&display=swap" rel="stylesheet">
  <title>@yield('title') </title>
</head>
<body>
  @include('includes.navbar')
  @yield('content')
  @include('includes.footer')
</body>
</html>