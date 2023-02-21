<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="container mx-auto">
<h1 class="text-4xl text-blue-600 font-bold">
    Search Drugs
</h1>
{{--//search form--}}
<form action="#" method="GET">
    <input class="bg-gray-50 border-2 text-2xl" type="text" name="query" id="query" value="{{ request()->input('query') }}">
    <button class="bg-blue-700 text-white rounded border-4 text-3xl p-2" type="submit">Search</button>
</body>
</html>
