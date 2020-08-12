<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Testing</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <header class="container">
        @include("partials/nav")
    </header>
    <main class="container">
        @yield("content")
    </main>
    @include("partials/footer")
</body>

</html>