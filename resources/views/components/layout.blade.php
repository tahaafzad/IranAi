<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <x-nav-link href="/" :active="request()->is('/')">Home page</x-nav-link>
    <x-nav-link href="/pricing" :active="request()->is('pricing')">Pricing Page</x-nav-link>
    <h1>Heading {{$heading}}</h1>
    <h2>go to {{$slot}}</h2>
    <h3>{{$footer}}</h3>
</body>
</html>
