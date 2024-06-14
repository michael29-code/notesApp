<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes App</title>
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    @include('nav')
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    @include('footer')
    <script src="/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>
