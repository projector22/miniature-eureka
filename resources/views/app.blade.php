<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <meta name="description" content="Basic ideas management tool">
  <meta name="author" content="Gareth Palmer">

  <link rel="icon" type="image/x-icon" href="/favicon.ico">

  <title>Miniature Eureka</title>

  @vite('resources/js/app.js')
  @inertiaHead
</head>

<body>
  @inertia
</body>

</html>