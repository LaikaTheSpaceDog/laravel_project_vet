<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>@yield("title")</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
</head>

<body>
    <header class="container">
        @include("partials/nav")
    </header>
    <main class="container">
        @yield("content")
        @yield("form")
        @yield("button")
    </main>
        @include("partials/footer")
</body>

</html>