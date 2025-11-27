<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel News Portal')</title>
    <link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css">

    <style>
        body { font-family: Arial, sans-serif; max-width: 900px; margin: auto; padding: 20px; background:#f8f9fa }
        .nav a { margin-right: 15px; text-decoration: none; }
        .active { font-weight: bold; border-bottom: 2px solid black; }
        .card { background:white;padding:20px;border-radius:10px;border:1px solid #ddd;margin-top:20px; }
        .muted { color:#777; }
        .row { display:flex; flex-wrap:wrap; gap:1rem; }
        .flash { background: #d4edda; padding: 10px; margin-top: 10px; border-radius: 6px; color: #155724; }
        form.inline { display:inline; }
        button { cursor:pointer; }
    </style>
</head>
<body>

    @include('partials.nav')

    <main>
        @yield('content')
    </main>

</body>
</html>
