<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Laravel App')</title>

  <link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css">

  <style>
    .container { max-width: 960px; margin: 2rem auto; }
    .nav { display: flex; gap: .75rem; align-items: center; flex-wrap: wrap; }
    .nav a.active { font-weight: bold; text-decoration: underline; }
    .right { margin-left: auto; display: flex; gap: .75rem; align-items: center; }
    .muted { color: #666; font-size: .9rem; }
    .card { border: 1px solid #ddd; padding: 1.2rem; border-radius: .5rem; background: #fff; }
    form.inline { display: inline; }
    .error { color: #c00; }
  </style>
</head>
<body>
  <div class="container">
    @include('partials.nav')
    <main class="row">
      @yield('content')
    </main>
    <footer style="margin-top:2rem">
      <hr>
      <div class="muted">© 2025 Rajul Muna Project</div>
    </footer>
  </div>
</body>
</html>