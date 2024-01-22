<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("titulo")</title>
    <meta name="description" content="@yield("descripcion")">
    @vite("resources/css/app.css")
</head>
<body>
<x-layout.header/>
<x-layout.nav/>
<main class="bg-main h-65v">
MAIN
    @yield("contenido")
</main>

<footer class="bg-footer h-12v">
    FOOTER
</footer>
</body>
</html>
