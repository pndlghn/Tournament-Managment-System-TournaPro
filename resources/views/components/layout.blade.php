<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>TournaPro</title>
</head>
<body class="min-h-screen bg-gradient-to-br from-black to-purple-800 text-white">
<x-navbar></x-navbar>
{{ $slot }}
</body>
</html>